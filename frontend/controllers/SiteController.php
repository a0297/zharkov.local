<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{






    public function actionIndex()
    {
       // $this->layout = "bootstrap"; // в ' public function actionIndex()', если хотим,чтобы бутстрап примеялся только к главной страницы .

        return $this->render('index');
    }


}
