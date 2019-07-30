<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\date\DatePicker;
use yii\bootstrap\Modal;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\CampaignSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Campaigns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="campaign-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Create Campaign', ['value'=>Url::to('campaign/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']) ?>
    </p>

      <?php 
       Modal::begin([
             'header'=>'<h4>Campaign</h4>', 
             'id' => 'modal',
             'size' => 'modal-lg', //size of mode/
                           ]);
       echo "<div id='modalContent'></div>";
  
       Modal::end();

    ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'election_name',
            'election_term',
            'election_start',
           // 'election_end',
            [
                'attribute'=>'election_end',
                'value'=>'election_end',
                'format'=>'raw',
                'filter' => DatePicker::widget([
                    'name' => 'election_end',
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'model' => $searchModel, 
                    'attribute' =>'election_end', 
                    'pluginOptions' => [
                        'autoclose' => true, 
                        'format' => 'yyyy-mm-dd'
                    ]
                ]),
            ],


            'created_by',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

 <?php Pjax::end(); ?>
</div>
