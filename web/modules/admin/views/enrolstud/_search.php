<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EnrolstudSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="enrolstud-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'department') ?>

    <?php // echo $form->field($model, 'course') ?>

    <?php // echo $form->field($model, 'program') ?>

    <?php // echo $form->field($model, 'year_level') ?>

    <?php // echo $form->field($model, 'year_term') ?>

    <?php // echo $form->field($model, 'date_enrolled') ?>

    <?php // echo $form->field($model, 'create_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
