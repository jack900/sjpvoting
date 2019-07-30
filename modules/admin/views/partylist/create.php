<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Partylist */

$this->title = 'Create Partylist';
$this->params['breadcrumbs'][] = ['label' => 'Partylists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partylist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
