<?php
namespace app\api\modules\v1\controllers;

use yii\rest\ActiveController;

class BooksController extends ActiveController
{
    public $modelClass = 'app\models\Books';

    public function actionList()
    {

        return 1;

    }
}