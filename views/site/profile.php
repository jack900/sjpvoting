<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 use yii\bootstrap\ActiveField;

use kartik\date\DatePicker;
//use yii\bootstrap4\Modal;
//use kartikorm\ActiveForm;

//use yii\captcha\Captcha;

$this->title = 'Sign Up';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-profile">
    <h1><?= Html::encode($this->title) ?></h1>


        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'profile-form']); ?>

                   

                    <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'lastname') ?>

                     <?= $form->field($uname, 'username') ?>

                     <?= $form->field($uname, 'password')->passwordInput() ?>

 <?= $form->field($model,'bday')->widget(DatePicker::className(), [
                        'value' => date('Y-M-d', strtotime('+2 days')),

                        'options' => ['placeholder' => 'Select date ...'],
                        'pluginOptions' => [
                            'format' => 'yyyy-mm-dd',
                            'todayHighlight' => true
                        ]
    ])->label('Birthday');
?>

  
                     <?= $form->field($model, 'gender')->dropDownList([ 'male' => 'Male', 'female' => 'Female', '' => '', ], ['prompt' => 'gender']) ?>


                   <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


                <?php ActiveForm::end(); ?>

            </div>
        </div>

 
</div>
