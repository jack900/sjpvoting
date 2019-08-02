<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Enrolstud */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enrolstud-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput() ?>

    <?= $form->field($model, 'department')->dropDownList([ 'CBA' => 'CBA', 'CHM' => 'CHM', 'CRIM' => 'CRIM', 'EDUC' => 'EDUC', 'ENG' => 'ENG', 'ICT' => 'ICT', 'NURSING' => 'NURSING', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'course')->dropDownList([ 'CBA_BSDM' => 'CBA BSDM', 'CBA_BSFM' => 'CBA BSFM', 'CBA_BSHR' => 'CBA BSHR', 'CBA_BSMM' => 'CBA BSMM', 'CHM_BSHRM' => 'CHM BSHRM', 'CHM_BSTM' => 'CHM BSTM', 'BSCRIM' => 'BSCRIM', 'EDUC_BEGEN' => 'EDUC BEGEN', 'EDUC_BESPE' => 'EDUC BESPE', 'EDUC_BSENG' => 'EDUC BSENG', 'EDUC_BSMATH' => 'EDUC BSMATH', 'ENG_BSCE' => 'ENG BSCE', 'ENG_BSCOE' => 'ENG BSCOE', 'ENG_BSGE' => 'ENG BSGE', 'ICT_BSCS' => 'ICT BSCS', 'ICT_BSIT' => 'ICT BSIT', 'BSN' => 'BSN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'program')->dropDownList([ 'Regular' => 'Regular', 'Special' => 'Special', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'year_level')->dropDownList([ '1ir' => '1ir', '1r' => '1r', '2ir' => '2ir', '2r' => '2r', '3ir' => '3ir', '3r' => '3r', '4ir' => '4ir', '4r' => '4r', '5ir' => '5ir', '5r' => '5r', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'year_term')->dropDownList([ 20181 => '20181', 20182 => '20182', 20183 => '20183', 20191 => '20191', 20192 => '20192', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'date_enrolled')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
