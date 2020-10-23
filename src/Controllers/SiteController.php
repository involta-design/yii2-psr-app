<?php

namespace App\Controllers;

use yii\web\Controller;
use yii\web\ErrorAction;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
                'layout' => 'error'
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}