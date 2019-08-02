<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Students;
use app\modules\admin\models\StudentsSearch;
use app\modules\admin\models\Candidates;
use app\modules\admin\models\Campaign;
use app\modules\admin\models\ImportStudent;
use yii\web\Response;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Users;
use yii\helpers\Json;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
 use yii\web\UploadedFile;
use \PHPExcel;
use \PHPExel_IOFactory;



/**
 * StudentsController implements the CRUD actions for Students model.
 */
class StudentsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Students models.
     * @return mixed
     */
    public function actionIndex()
    {

        $this->layout = "main";
        $searchModel = new StudentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

      $import = new ImportStudent();
      // var_dump($import);
      // exit;

     $model = new Students();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
            'model' => $import,
        ]);
    }

    /**
     * Displays a single Students model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = "main";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Students model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
         $this->layout = "main";
        $model = new Students();

        if ($model->load(Yii::$app->request->post()) ) {

              //$model->date_enrolled = date('Y-m-d');
             $model->created_by = Yii::$app->user->id;
             $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->renderAjax('create', [
            'model' => $model,
        ]);
    }
    /**
     * Updates an existing Students model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    
   public function actionImport()
   {
        $importstud = new ImportStudent();
       //   $student = new Students();
       // $studcode = new Users();
        if ($importstud->load(Yii::$app->request->post())) //orig

       {
          
            $filename = "filename".(strtotime("now"));
             
            $importstud->filename = $filename;

            $importstud->studfile = UploadedFile::getInstance($importstud,'studfile');
            $importstud->studfile-> saveAs('uploads/excel/' .$filename. '.' .$importstud->studfile->extension);
           $importstud->filename = $filename. '.' .$importstud->studfile->extension;

            $importstud->date_import = date('Y-m-d H:i:s');
            $importstud->created_by =Yii::$app->user->identity->id;


            $importstud->save();
        
        
             $inputFile ='uploads/excel/' .$filename. '.' .$importstud->studfile->extension;
   

        try{
             $inputFileType = \PHPExcel_IOFactory::identify($inputFile);
             $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
             $objPHPExel = $objReader->load($inputFile);
            }catch (exception $e)
            {
                die('Error'); 
            }
               $sheet = $objPHPExel->getSheet(0); //deminsion 
               $highestRow = $sheet->getHighestRow();
               $highestColumn = $sheet->getHighestColumn();

               for( $row = 1; $row <= $highestRow; $row++)
               {
                  $rowData = $sheet->rangeToArray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);
                  if($row == 1)
                  {
                    continue;
                  }

                  $student = new Students();
                 // $id = $rowData[0][0];
                  $student->student_id = $rowData[0][0];
                  $student->firstname = $rowData[0][1];
                  $student->lastname = $rowData[0][2];
                  $student->email = $rowData[0][3];
                  $student->contact = $rowData[0][4];
                  $student->department = $rowData[0][5];
                  $student->course = $rowData[0][6];
                  $student->program = $rowData[0][7];
                 // $student->importstudent_id =Yii::$app->import_student->id;
                  $student->importstudent_id =$importstud->id;

                  $student->created_by =Yii::$app->user->id; //add creatred by

                  $student->save();

                            //  Yii::$app->session->setFlash('success','You have entered the data correctly');

                 print_r($student->errors);//view the error
                }
                 die('okay'); 
                 // Yii::$app->session->setFlash('success','You have entered the data correctly');

              
       }
                     
                
    }



    public function actionSendcode()
    {

      //  $studname = new Students();
        $usercode = new Users();


       if (Yii::$app->request->isAjax)  // ajax form
        //if ($studcode->load(Yii::$app->request->post()) && $usercode->load(Yii::$app->request->post()))  //para form
        {
            $data = Yii::$app->request->post(); //orig
            $student =  $data['student_id'];

             $arrlength = count($student);

             for($x = 0; $x < $arrlength; $x++) {

              $usercode = new Users();

             $passcode=Yii::$app->security->generateRandomString(6);

             $usercode->username=$student[$x];
             $usercode->setPassword($passcode);
             $usercode->generateAuthKey();
             $usercode->generatePasswordResetToken();
              
             $usercode->save(); 

             $auth = \Yii::$app->authManager;
             $studentRole = $auth->getRole('student');
             $auth->assign($studentRole, $usercode->getId());

             
              $studname = new Students();
              $studname=Students::find()->where(['student_id'=>$student[$x]])->one();
               $studname->user_id=$usercode->id;

               $studname->save(); 

                 // echo "<pre>";
                 // var_dump($studname);
                 // exit();
            Yii::$app->mailer->compose()

           ->setTo([$studname->email]) 
           
            ->setFrom(['rexjun609@gmail.com' => 'Alerts'])
            ->setReplyTo('noreply@example.com')
            ->setSubject('Hey your passcode to Vote')
            
            ->setTextBody('Username:'.$studname->student_id .'<br>Your Password:'.$passcode)
            ->send();

            } 
     }
   
        return json_encode([
            'status' => true, 
            // 'studid' => $enrol->student_id,
            // 'name' => $enrol->student_id . "- " .$enrol->firstname . " " .$enrol->lastname
        ]);
    }

    public function actionUpdate($id)
    {
        $this->layout = "main";
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionGetstudent()
    {
      
      
        if (Yii::$app->request->isAjax) 
        {
            $data = Yii::$app->request->post();
         
            $enrolstud =  $data['student_id'];
            //nadawat

            $enrol=Students::find()->where(['student_id'=>$enrolstud])->one();
        

        // echo "<pre>";
        // var_dump($enrol);exit;
       
        }
   
        return json_encode([
            'status' => true, 
            'studid' => $enrol->student_id,
            'name' => $enrol->student_id . "- " .$enrol->firstname . " " .$enrol->lastname
        ]);
    }

    public function actionGetstudentname()
    {
      
       // if (Yii::$app->request->isAjax) {
            $data = Yii::$app->request->post();

             $campaign = $data['campaign_id'];
             $camp=Campaign::findOne($campaign);


            $can = Candidates::find()->asArray()->all();
           // var_dump($can);
           // echo '</pre>';
           // exit;
          
//SELECT student_id FROM students where student_id not in (SELECT student_id FROM `candidates` where campaign_id = 1)
           $subQuery = Candidates::find()->select('student_id')->where(['campaign_id'=> $campaign]);
           $query = Students::find()->where(['not in', 'student_id', $subQuery])->asArray()->all();

        return json_encode
        ([
            'status' => true, 
            'std_drp' => $query
          
        ]);
    }


    /**
     * Deletes an existing Students model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
         $this->layout = "main";
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Students model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Students the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Students::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
