<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

/**
 * Default controller for the `main` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = "bootstrap"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .
        return $this->render('index');
    }
}
