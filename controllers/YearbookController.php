<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Yearbook;
use app\models\GalleryYearbook;
use Da\QrCode\QrCode;
use yii\db\Expression;
use himiklab\sitemap\behaviors\SitemapBehavior;


class YearbookController extends Controller
{
    /**
     * @inheritdoc
     */
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
            'sitemap' => [
                'class' => SitemapBehavior::className(),
                'scope' => function ($model) {
                    /** @var \yii\db\ActiveQuery $model */
                    $model->select(['url', 'lastmod']);
                    $model->andWhere(['is_deleted' => 0]);
                },
                'dataClosure' => function ($model) {
                    /** @var self $model */
                    return [
                        'loc' => Url::to($model->url, true),
                        'lastmod' => strtotime($model->lastmod),
                        'changefreq' => SitemapBehavior::CHANGEFREQ_DAILY,
                        'priority' => 0.8
                    ];
                }
            ],
        ];
    }

    public function actionIndex()
    {
        $yrbk = Yearbook::find()->all();
        $total = Yearbook::find()->count();

        return $this->render('index', [
            'yrbk' => $yrbk,
            'total' => $total,
        ]);
    }

    public function actionDetail($id)
    {
        $model = $this->findYearbook($id);
        $gallery = GalleryYearbook::find()->where(['id_yearbook' => $id])->all();

        // $modelcount = Yearbook::find()->count();
        // $min = 0;
        // $max = $modelcount;
        // $random = rand($min, $max);

        $navigasi =  Yearbook::find()->orderBy(new Expression('rand()'))->limit(2)->all();

        return $this->render('detail', [
            'model' => $model,
            'gallery' => $gallery,
            'navigasi' => $navigasi,
            // 'random' => $random,
        ]);
    }

    public function actionPdf($id)
    {
        $this->layout = 'full';
        $model = $this->findYearbook($id);

        return $this->render('pdf', [
            'model' => $model,
        ]);
    }

    public function actionQrcode($id)
    {
        $model = $this->findYearbook($id);

        $qrCode = (new QrCode(Yii::$app->urlManager->createAbsoluteUrl(['files/pdf/' . $model->file_yearbook])))
            ->setSize(250)
            ->setMargin(5)
            ->useForegroundColor(0, 0, 0);

        $qrCode->writeFile(Yii::getAlias('@app') . '/files/img/qrcode/' . $id . '.png');
        //$urlQr = Yii::$app->urlManager->createAbsoluteUrl(['/files/img/qrcode/' . $id . '.png']);

        return $this->render('detail', [
            'model' => $model,
        ]);
    }

    protected function findYearbook($id)
    {
        if (($model = Yearbook::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findGallery($id)
    {
        if (($model = GalleryYearbook::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
