<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PartylistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Partylists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partylist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Create Partylist', ['value'=>Url::to('partylist/create'), 'class' => 'btn btn-success','id' =>'modalButton']) ?>
    </p>

     <?php 
       Modal::begin([
             'header'=>'<h4>Positions</h4>', 
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

            'id',
            'partylist_name',
            'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
 <?php Pjax::end(); ?>

</div>
