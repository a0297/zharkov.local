<?php

namespace frontend\controllers;

class AvtoshkolyController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "avtoshkoly"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .

        return $this->render('index');
    }

}
