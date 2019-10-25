<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SkripsiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skripsi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'judul') ?>

    <?= $form->field($model, 'penguji') ?>

    <?= $form->field($model, 'pembimbing') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'perguruan_tinggi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
