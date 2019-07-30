<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Profile;
use app\models\UserForm;
use app\models\SignupForm;
use kartik\date\DatePicker;
use app\models\Users;

class SiteController extends Controller
{ 
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
     //  $this->layout = 'loginLayout'; //v tuitorial
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
          //model form
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
         //return $this->goBack();
            return $this->redirect(['admin/dashboard']); // to display other page
       // return Yii::$app->getResponse()->redirect('admin/dashboard');
        }
     //$this->layout = "admin/main";
        $model->password = '';
     //  $this->layout = "main";

 //Yii::$app->getResponse()->redirect('main');
       return $this->render('login', [
            'model' => $model,

      //  return $this->redirect(['main']);
           // 'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHello(){
        $name='John';
        return $this->render('hello',array('name'=>$name));
    }

    public function actionUser()
    {
        $model = new UserForm;

        if($model->load(Yii::$app->request->post())&& $model->validate())
        {
            Yii::$app->session->setFlash('success','You have entered the data correctly');
        }
            return $this->render('userForm',['model' => $model]);
        }

     public function actionProfile()
    {
        $model = new Profile();
       
       $uname = new Users();
    
        //submit
     
        if ($model->load(Yii::$app->request->post()) && $uname->load(Yii::$app->request->post()))
         {
   
     
      $uname->setPassword($uname->password);
      $uname->generateAuthKey();
      $uname->generatePasswordResetToken();
      $uname->save(); 

      $model->user_id = $uname->id;

        // echo '<pre>';
       //   var_dump($uname->id);
             //  exit();
        
    //save to database
            $model->profile();

            return $this->refresh();
        }
   
        return $this->render('profile', [
            'model' => $model,
            'uname' => $uname,
           
        ]);

        

    }


}
      