<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Kaoshi */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '考试管理', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kaoshi-view">

    <p>
        <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'baomingshijian',
            'jiezhishijian',
            'kaoshishijian',
            'is_reminder',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
