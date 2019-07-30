<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\web\View;

use app\modules\admin\models\Students;
use app\modules\admin\models\Candidates;
use app\modules\admin\models\Positions;
use app\modules\admin\models\Partylist;
use app\modules\admin\models\Campaign;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CandidatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Candidates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="candidates-index">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal111">
      Add Candidate
    </button>

    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'student_id',
           // 'student_id',
            //'fullname',
           // 'lastname',
            'position_id',
            'photo',
            'partylist_id',
            'platform:ntext',
            'campaign_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

 <?php Pjax::end(); ?>



    
<!-- Modal -->
<div class="modal fade" id="exampleModal111" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Candidates</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $form = ActiveForm::begin(); ?>    

                 <?= $form->field($model,'campaign_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Campaign::find()->all(),'id','election_name'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>
      
       <?= $form->field($model,'student_id')->widget(Select2::classname(), [ 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],


     ]); ?>
         
         <h1 id="canprofile"></h1>
     

      

      

          <?= $form->field($model,'position_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Positions::find()->all(),'id','description'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'file')
->fileInput(); ?>
        

        
             <?= $form->field($model,'partylist_id')->widget(Select2::classname(), ['data' => ArrayHelper::map(Partylist::find()->all(),'id','partylist_name'), 'language' => 'en', 'options' =>['placeholder' =>'Select a state...'], 'pluginOptions' => ['allowClear' => true],
     ]); ?>

        <?= $form->field($model, 'platform')->textarea(['rows' => 6]) ?>

     


        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changesxx</button>
      </div>
    </div>
  </div>
</div>

</div>







   <?php
    $this->registerJsFile('@web/js/candidatevalidation.js',
    [
     'position' =>View::POS_END,
     'depends' => [yii\web\JqueryAsset::className()]

    ]
   );
//coded transper in js file
    //    $('#candidates-student_id').on('change', function() {

    //     $.ajax({
    //       type: 'POST',
    //       url: base_url+'/admin/students/getstudent',  
    //       data: {student_id: this.value}, 
    //       dataType: 'json',
    //       success: function(data) {
    //           console.log(data.status);
    //            console.log(data.studid);

    //            console.log(data.name);
    //            $('#candidates-student_id').val(data.studid)
    //            $('#candidates-fullname').val(data.name);
    //             $('#canprofile').html(data.name);

      
    //       }
    //     });

    //     console.log(this.value + 'jubrex');

       

    //   });", 
   

    // );


?>  

