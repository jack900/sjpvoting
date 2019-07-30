<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

use app\modules\admin\models\Enrolstud;
use app\modules\admin\models\Candidates;
use app\modules\admin\models\Positions;
use app\modules\admin\models\Partylist;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CandidatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candidates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Create Candidates
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

           <?= $form->field($model,'enrolstud_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Enrolstud::find()->all(),'id','id'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
         ]); ?>

            <?= $form->field($model, 'student_id')->textInput() ?>

            <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

              <?= $form->field($model,'position_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Positions::find()->all(),'id','description'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
         ]); ?>

            <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

            
                 <?= $form->field($model,'partylist_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Partylist::find()->all(),'id','partylist_name'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
         ]); ?>

            <?= $form->field($model, 'platform')->textarea(['rows' => 6]) ?>
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

 
    <?= Html::button('Create Candidatess', ['value'=>Url::to('candidates/create'), 'class' => 'btn btn-success', 'id'=>'exampleModal']) ?>
    

  
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
   <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'enrolstud_id',
            'student_id',
            'firstname',
            'lastname',
            'position_id',
            'photo',
            'partylist_id',
            'platform:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


 <?php Pjax::end(); ?>


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

       <?= $form->field($model,'enrolstud_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Enrolstud::find()->all(),'id','id'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'student_id')->textInput() ?>

        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

          <?= $form->field($model,'position_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Positions::find()->all(),'id','description'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

        
             <?= $form->field($model,'partylist_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Partylist::find()->all(),'id','partylist_name'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'platform')->textarea(['rows' => 6]) ?>
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
</div>
