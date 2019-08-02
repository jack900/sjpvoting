<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\CandidatesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="candidates-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'enrolstud_id') ?>

    <?= $form->field($model, 'position_id') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'partylist_id') ?>

    <?php // echo $form->field($model, 'campaign_id') ?>

    <?php // echo $form->field($model, 'platform') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
