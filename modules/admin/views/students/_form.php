<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\web\View;

use app\modules\admin\models\Department;
use app\modules\admin\models\Course;
use app\modules\admin\models\Program;
use app\modules\admin\models\ImportStudent;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Students */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

   
     <?= $form->field($model,'department')->widget(Select2::classname(), ['data' => ArrayHelper::map(Department::find()->all(),'department_code','department_code'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>


    
   <?= $form->field($model,'course')->widget(Select2::classname(), ['data' => ArrayHelper::map(Course::find()->all(),'course_code','course_code'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

 


   <?= $form->field($model,'program')->widget(Select2::classname(), ['data' => ArrayHelper::map(Program::find()->all(),'program_code','program_code'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model,'importstudent_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(ImportStudent::find()->all(),'id','filename'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

   
     
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    

    <?php ActiveForm::end(); ?>

</div>
