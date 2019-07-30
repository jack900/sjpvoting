<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Campaign;



/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Campaign */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="campaign-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'election_name')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'election_term')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'election_end')->widget(DatePicker::className(), 
        [
            'value' => date('Y-M-d', strtotime('+2 days')),

            'options' => [
                    'placeholder' => 'Select date ...'
            ],
            'pluginOptions' => [
                'format' => 'yyyy-mm-dd',
                'todayHighlight' => true
            ]
    ])->label('Election End');
?>
   
    

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
