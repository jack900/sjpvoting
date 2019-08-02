<?php

namespace app\modules\student\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
//use app\models\LoginForm;
//use app\models\ContactForm;
//use app\models\Profile;
//use app\models\UserForm;
//use app\models\SignupForm;
//use kartik\date\DatePicker;
//use app\models\Users;
use app\modules\admin\models\Candidates;
use app\modules\admin\models\Campaign;
use app\modules\admin\models\Students;
use app\asset\StudentdAsset;



//use app\modules\admin\asset\DashboardAsset;
class DashboardController extends Controller
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

        // $campaign = Campaign::findOne(1);
        //      $candidates = $campaign->candidates;
        //     foreach ($candidates as $candi){
        //         $campaign[] = $candi->candidates;
        //     }
        //     return $campaign;
        //}

     $campaign = Campaign::findOne(1);
   //  $candidates = $campaign->candidates;


     // // // $campaign = Campaign::findOne(1);
     //   echo "<pre>";
      // var_dump($campaign);
      // exit();

       // $model = new Campaign();

        $this->layout = "main"; //to show the layout
        return $this->render('index', [
            'campaign' => $campaign,
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
       // $this->redirect(Yii::app()->homeUrl);
   // $this->redirect('index');

     return $this->goHome();
    }

    public function actionRex() {
        var_dump('testx');exit;
    }
    


}
      