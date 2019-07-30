  <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Students;
use app\modules\admin\models\Candidates;
use app\modules\admin\models\Positions;
use app\modules\admin\models\Partylist;
use app\modules\admin\models\Campaign;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Candidates */
/* @var $form yii\widgets\ActiveForm */
?>

   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>



<!-- Modal -->
<div class="candidates-create" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $form = ActiveForm::begin(); ?>    

       <?= $form->field($model,'student_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Students::find()->all(),'student_id','student_id'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>


     

        

          <?= $form->field($model,'position_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Positions::find()->all(),'id','description'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

        
             <?= $form->field($model,'partylist_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Partylist::find()->all(),'id','partylist_name'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'platform')->textarea(['rows' => 6]) ?>

        <?= $form->field($model,'campaign_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Campaign::find()->all(),'id','election_name'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

<!-- 
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div> -->
              </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!--  <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
         <div class="modal-footer">
      <!--   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div> -->
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-primary']) ?>

        
             <?= Html::submitButton('Save ', ['class' => 'btn btn-success']) ?>
        
      </div>
    </div>
  </div>
</div>

    <?php ActiveForm::end(); ?>
</div>
