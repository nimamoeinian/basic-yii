<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'کاربران');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'ایجاد کاربر جدید'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'family',
            'national_code',
            'id_number',
            // 'mobile',
            // 'tel',
             'age',
            // 'contract_number',
            // 'ref_date',
            // 'delivery_date',
            // 'description:ntext',
            // 'create_time',
            // 'update_time',
            // 'delete_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
