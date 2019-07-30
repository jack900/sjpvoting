<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\StudentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Students';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>

     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#uploadModal">Import file</button> 
  <br>
  <br>
    <!--  <button type="button" class="btn btn-success"data-toggle="modal" data-target="#uploadModalcodeq">Send Code</button>   -->
<!--   <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?> -->
    <br>
    <p>
        <?= Html::submitButton('Send code', ['id'=>'sendcode','value'=>Url::to('students/sendcode'), 'class' => 'btn btn-success']) ?>
    </p>
     <?php 
       // Modal::begin([
       //       'header'=>'<h4>Students</h4>', 
       //       'id' => 'modal',
       //       'size' => 'modal-lg', //size of mode/
       //                     ]);
       // echo "<div id='modalContent'></div>";
  
       // Modal::end();
      ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
 <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'class' => 'yii\grid\CheckboxColumn',
              'checkboxOptions' => function($model, $key, $index, $widget) {

                     return ["value" => $model->student_id]; //orig
                   // return ["value" => $model->student_id,'class' => 'checkbox-row', 'id' => 'checkbox'];

                },
            ],

            //'id',
             'user_id',
            'student_id',
            'firstname',
            'lastname',
            'email:email',
            'contact',
            'department',
            'course',
            'program',
            'importstudent_id',
            'created_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

 <?php Pjax::end(); ?>


<!-- Modal -->
<div id="uploadModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">File upload form</h4>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <?php $form = ActiveForm::begin(
          [
             'action'=>'students/import',
            'options'=> ['class'=> ''
                        ]
          ]); ?>   
          

        <?= $form->field($model, 'studfile')
          ->fileInput(); ?>
      

        <div class="form-group">
             <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?> 

        <?php ActiveForm::end(); ?>

     </div>
 
    </div>

  </div>
</div>
</div>




<div id="uploadModalcode" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Code</h4>
      </div>
      <div class="modal-body">
        <!-- Form -->
        <?php $form = ActiveForm::begin(
          [
             'action'=>'students/sendcode',
            'options'=> ['class'=> ''
                        ]
          ]); ?>   
          

        <div class="form-group">
             <!-- <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>  -->

        <?php ActiveForm::end(); ?>




          

        </div>


        <!-- <form method='post' action='' enctype="multipart/form-data">
          Select file : <input type='file' name='file' id='file' class='form-control' ><br>
          <input type='submit' class='btn btn-info' value='Upload' id='upload'>
        </form> /sjpvoting/web/admin/students -->

        <!-- Preview-->
        <!-- <div id='preview'></div> -->
      </div>
 
    </div>

  </div>
</div>
</div>
