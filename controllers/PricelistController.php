<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Pricelist;

class PricelistController extends Controller
{
    function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka, 2, ',', '.');
        return $hasil_rupiah;
    }

    public function actionIndex()
    {
        $pricelist = Pricelist::find()->all();

        return $this->render('index', [
            'pricelist' => $pricelist,
        ]);
    }

    public function actionDetail($id)
    {
        $model = $this->findPricelist($id);

        return $this->render('detail', [
            'model' => $model,
        ]);
    }

    protected function findPricelist($id)
    {
        if (($model = Pricelist::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
