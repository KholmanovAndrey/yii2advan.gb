<?php
/**
 * Created by PhpStorm.
 * User: Kholmanov
 * Date: 07.01.2020
 * Time: 18:52
 */

namespace frontend\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}