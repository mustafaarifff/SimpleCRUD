<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SkripsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Skripsis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="skripsi-index">
    
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Skripsi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            [
                'label' => 'Judul',
                'attribute' => 'judul',
                'contentOptions' => ['style' => 'text-overflow: ellipsis; white-space: nowrap; max-width: 25vw; overflow: hidden;'],
            ],
            'penguji',
            'pembimbing',
            //'tahun',
            //'perguruan_tinggi',

            ['class' => 'yii\grid\ActionColumn'],
            
        ],
    ]); ?>
</div>
