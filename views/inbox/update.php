<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Inbox */

$this->title = 'Update Inbox: ' . ' ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Inboxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="inbox-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
