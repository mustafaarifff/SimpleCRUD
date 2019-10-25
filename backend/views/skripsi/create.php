<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Skripsi */

$this->title = 'Create Skripsi';
$this->params['breadcrumbs'][] = ['label' => 'Skripsis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skripsi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
