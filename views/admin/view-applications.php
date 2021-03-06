<?php

use yii\bootstrap\Html;
use yii\grid\GridView;

$this->title = 'Προβολή αιτήσεων';
$this->params['breadcrumbs'][] = ['label' => 'Διαχειριστικές λειτουργίες', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo GridView::widget([
    'dataProvider' => $users,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        [
            'label' => 'Επώνυμο',
            'attribute' => 'lastname'
        ],
        [
            'label' => 'Όνομα',
            'attribute' => 'firstname'
        ],
        [
            'label' => 'Πατρώνυμο',
            'attribute' => 'fathername'
        ],
        [
            'label' => 'Α.Φ.Μ.',
            'attribute' => 'vat'
        ],
        [
            'label' => 'Α.Δ.Τ.',
            'attribute' => 'identity'
        ],
        [
            'label' => 'Ειδικότητα',
            'attribute' => 'specialty'
        ],
        [
            'label' => 'Μόρια',
            'attribute' => 'points'
        ],
        [
            'attribute' => 'last_submit_str',
            'format' => 'html'
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'header' => 'Προβολή',
            'template' => '{printButton}',
            'buttons' => ['printButton' => function ($url, $model, $key) {
                return Html::a(Html::icon('print'), ['admin/print-applications', 'applicantId' => $model->id]);
            }
            ]
        ]
    ]
]);
