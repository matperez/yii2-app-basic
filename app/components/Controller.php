<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 03.03.15
 * Time: 17:34
 */

namespace app\components;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class Controller extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();
        $view = $this->getView();
        $view->params['metaDescription'] = '';
        $view->params['metaKeywords'] = '';
        $view->params['breadcrumbs'] = [];
        $view->params['menu'] = [];
    }
}