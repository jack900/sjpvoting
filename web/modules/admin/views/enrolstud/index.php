<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\EnrolstudSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enrolstuds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="enrolstud-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Enrolstud', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'student_id',
            'firstname',
            'lastname',
            'gender',
            //'email:email',
            //'contact',
            //'department',
            //'course',
            //'program',
            //'year_level',
            //'year_term',
            //'date_enrolled',
            //'create_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
