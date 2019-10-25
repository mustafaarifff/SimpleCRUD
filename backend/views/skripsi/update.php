<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skripsi */

$this->title = 'Update Skripsi: ' . $model->nim;
$this->params['breadcrumbs'][] = ['label' => 'Skripsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nim, 'url' => ['view', 'id' => $model->nim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="skripsi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
