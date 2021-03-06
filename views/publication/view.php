<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Publication */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Publications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publication-view">

    <h1><?= Html::encode($this->title) ?></h1>
  
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
            'date',
            'descriptoin',
            'text',
        ],
    ]) ?>

</div>
