<?php

namespace app\controllers;

use yii\rest\ActiveController;

class ProdutoController extends ActiveController
{
    public $modelClass = 'app\models\Produto';

    public function actions()
    {
        return parent::actions();
    }
}
