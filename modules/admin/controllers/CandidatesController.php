<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Candidates;
use app\modules\admin\models\CandidatesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use app\modules\admin\models\Position;
use app\modules\admin\models\Partylist;
use app\modules\admin\models\Students;
use app\modules\admin\models\Campaign;
use yii\web\UploadedFile;
/**
 * CandidatesController implements the CRUD actions for Candidates model.
 */
class CandidatesController extends Controller
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
     * Lists all Candidates models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main"; 
        $searchModel = new CandidatesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model = new Candidates();

        $enrol_stud = Students::find()->all();

        if ($model->load(Yii::$app->request->post())) {
         $imageName = $model->student_id;
          $model->file = UploadedFile::getInstance($model,'file');
                $model->file-> saveAs('uploads/' .$imageName. '.' .$model->file->extension);
               // save the path in the db column
               $model->photo =  'uploads/' .$imageName. '.' .$model->file->extension;

            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,
            'enrol_stud' =>  $enrol_stud
        ]);
    }

    /**
     * Displays a single Candidates model.
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
     * Creates a new Candidates model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
         $this->layout = "main"; 
        $model = new Candidates();

        // $modeluser = Students::find()
        // ->where(['NOT IN', 'student_id', [1001,1002,1003,1004,1005]])
        // ->all();
        
// $subQuery = Enrolstud::find()->select('id');
// $query = Enrolstud::find()->where(['not in', 'id', $subQuery]);
// $models = $query->all();


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Candidates model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
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

    /**
     * Deletes an existing Candidates model.
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
     * Finds the Candidates model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Candidates the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Candidates::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
