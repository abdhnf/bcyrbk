<?php

namespace app\modules\panel\controllers;

use Yii;
use app\models\Yearbook;
use app\models\GalleryYearbook;
use app\models\YearbookSearch;
use app\modules\panel\PanelController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use yii\base\Security;
use yii\web\UploadedFile;
use yii\helpers\Url;
use Da\QrCode\QrCode;
use yii\helpers\FileHelper;

/**
 * YearbookController implements the CRUD actions for Yearbook model.
 */
class YearbookController extends PanelController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulkdelete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Yearbook models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new YearbookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Yearbook model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        $request = Yii::$app->request;
        $gallery = GalleryYearbook::find()->where(['id_yearbook' => $id])->all();

        if ($request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'title' => "Yearbook #" . $id,
                'content' => $this->renderAjax('view', [
                    'model' => $this->findModel($id),
                    'gallery' => $gallery,
                ]),
                'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                    Html::a('Edit', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
            ];
        } else {
            return $this->render('view', [
                'model' => $this->findModel($id),
                'gallery' => $gallery,
            ]);
        }
    }

    public function actionQrcode($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id);
        $fileQr = Yii::getAlias('@app') . '/files/img/qrcode/' . $id . '.png';
        if ($request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if (!file_exists(Yii::getAlias('@app') . '/files/img/qrcode/' . $id . '.png')) {
                $qrCode = (new QrCode(Yii::$app->urlManager->createAbsoluteUrl(['files/pdf/' . $model->file_yearbook])))
                    ->setSize(250)
                    ->setMargin(5)
                    ->useForegroundColor(0, 0, 0);

                $qrCode->writeFile(Yii::getAlias('@app') . '/files/img/qrcode/' . $id . '.png');
                $urlQr = Yii::$app->urlManager->createAbsoluteUrl(['/files/img/qrcode/' . $id . '.png']);
            } else {
                $urlQr = Yii::$app->urlManager->createAbsoluteUrl(['/files/img/qrcode/' . $id . '.png']);
            }

            return [
                'title' => "QrCode #" . $model->name_yearbook,
                'content' => $this->renderAjax('qrcode', [
                    'urlQr' => $urlQr,
                    'model' => $model,
                ]),
                'footer' => Html::button('Close', ['class' => 'btn btn-default pull-right', 'data-dismiss' => "modal"])
            ];
        }
    }
    /**
     * Creates a new Yearbook model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new Yearbook();

        if ($request->isAjax) {
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($request->isGet) {
                return [
                    'title' => "Create new Yearbook",
                    'content' => $this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Save', ['class' => 'btn btn-primary', 'type' => "submit"])

                ];
            } else if ($model->load($request->post())) {
                $model->id_yearbook = Yii::$app->security->generateRandomString(8);
                $thumbnail = UploadedFile::getInstance($model, 'thumbnail_yearbook');
                $header = UploadedFile::getInstance($model, 'header_yearbook');
                $file_pdf = UploadedFile::getInstance($model, 'file_yearbook');

                if (is_object($thumbnail)) {
                    $model->thumbnail_yearbook = $thumbnail->baseName . '-' . $model->id_yearbook . '.' . $thumbnail->extension;
                    $path_thumbnail = Yii::getAlias('@app') . '/files/img/thumbnail/' . $model->thumbnail_yearbook;
                    $thumbnail->saveAs($path_thumbnail);
                    $model->file = $path_thumbnail;
                }

                if (is_object($header)) {
                    $model->header_yearbook = $header->baseName . '-' . $model->id_yearbook . '.' . $header->extension;
                    $path_header = Yii::getAlias('@app') . '/files/img/' . $model->header_yearbook;
                    $header->saveAs($path_header);
                    $model->file = $path_header;
                }

                if (is_object($file_pdf)) {
                    $model->file_yearbook = str_replace(' ', '', $file_pdf->baseName) . '-' . $model->id_yearbook . '.' . $file_pdf->extension;
                    $path_file = Yii::getAlias('@app') . '/files/pdf/' . $model->file_yearbook;
                    $file_pdf->saveAs($path_file);
                    $model->file = $path_file;
                }
                //$model->save();
                if ($model->save(false)) {
                    return [
                        'forceReload' => '#crud-datatable-pjax',
                        'title' => "Create new Yearbook",
                        'content' => '<span class="text-success">Create Yearbook success</span>',
                        'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                            Html::a('Create More', ['create'], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])

                    ];
                }
            } else {
                return [
                    'title' => "Create new Yearbook",
                    'content' => $this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Save', ['class' => 'btn btn-primary', 'type' => "submit"])

                ];
            }
        } else {
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_yearbook]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    public function actionGallery($id)
    {
        $request = Yii::$app->request;
        $model = new GalleryYearbook();

        if ($request->isAjax) {
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($request->isGet) {
                return [
                    'title' => "Create new Gallery Yearbook #" . $id,
                    'content' => $this->renderAjax('gallery', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Save', ['class' => 'btn btn-primary', 'type' => "submit"])

                ];
            } else if ($model->load($request->post())) {
                //$model->id_yearbook = Yii::$app->security->generateRandomString(5);
                $gallery = UploadedFile::getInstances($model, 'image_gallery_yearbook');
                $model->id_yearbook = $id;
                foreach ($gallery as $gallerys) {
                    $models = new GalleryYearbook();
                    // if (is_object($gallerys)) {
                    $models->image_gallery_yearbook = $gallerys->baseName;
                    $models->image_gallery_yearbook .= '.' . $gallerys->extension;
                    $path_gallery = Yii::getAlias('@app') . '/files/img/gallery/' . $model->id_yearbook;
                    FileHelper::createDirectory($path_gallery);
                    $gallerys->saveAs($path_gallery . '/' . $models->image_gallery_yearbook);
                    $models->file = $path_gallery;
                    $models->id_yearbook = $model->id_yearbook;
                    $models->save(false);
                    // }
                }

                return [
                    'forceReload' => '#crud-datatable-pjax',
                    'title' => "Create new GalleryYearbook",
                    'content' => '<span class="text-success">Create GalleryYearbook success</span>',
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::a('Create More', ['create'], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])

                ];
            } else {
                return [
                    'title' => "Create new GalleryYearbook",
                    'content' => $this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Save', ['class' => 'btn btn-primary', 'type' => "submit"])

                ];
            }
        } else {
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_gallery_yearbook]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    public function actionDelgallery($id)
    {
        $request = Yii::$app->request;
        $this->findGallery($id)->delete();

        if ($request->isAjax) {
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                'forceReload' => '#crud-datatable-pjax',
                'title' => "Yearbook #" . $id,
                'content' => $this->renderAjax('view', [
                    'model' => $this->findModel($id),
                ]),
                'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                    Html::a('Edit', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
            ];
        } else {
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
    }

    /**
     * Updates an existing Yearbook model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $gallery = GalleryYearbook::find()->where(['id_yearbook' => $id])->all();
        $request = Yii::$app->request;
        $model = $this->findModel($id);
        $oldThumbnail = $model->thumbnail_yearbook;
        $oldHeader = $model->header_yearbook;
        $oldPdf = $model->file_yearbook;

        if ($request->isAjax) {
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($request->isGet) {
                return [
                    'title' => "Update Yearbook #" . $id,
                    'content' => $this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Save', ['class' => 'btn btn-primary', 'type' => "submit"])
                ];
            } else if ($model->load($request->post()) && $model->save()) {

                $thumbnail = UploadedFile::getInstance($model, 'thumbnail_yearbook');
                $header = UploadedFile::getInstance($model, 'header_yearbook');
                $file_pdf = UploadedFile::getInstance($model, 'file_yearbook');

                if (is_object($thumbnail)) {
                    $thumbnail->saveAs(Yii::getAlias('@app') . '/files/img/thumbnail/' . $thumbnail->baseName . '-' . $model->id_yearbook . '.' . $thumbnail->extension);
                    $model->thumbnail_yearbook =  $thumbnail->baseName . '-' . $model->id_yearbook . '.' . $thumbnail->extension;
                    unlink(Yii::getAlias('@app') . '/files/img/thumbnail/' . $oldThumbnail);
                } else {
                    $model->thumbnail_yearbook = $oldThumbnail;
                }

                if (is_object($header)) {
                    $header->saveAs(Yii::getAlias('@app') . '/files/img/header/' . $header->baseName . '-' . $model->id_yearbook . '.' . $header->extension);
                    $model->header_yearbook =  $header->baseName . '-' . $model->id_yearbook . '.' . $header->extension;
                    unlink(Yii::getAlias('@app') . '/files/img/header/' . $oldHeader);
                } else {
                    $model->header_yearbook = $oldHeader;
                }

                if (is_object($file_pdf)) {
                    $file_pdf->saveAs(Yii::getAlias('@app') . '/files/pdf/' . str_replace(' ', '', $file_pdf->baseName) . '-' . $model->id_yearbook . '.' . $file_pdf->extension);
                    $model->file_yearbook =  str_replace(' ', '', $file_pdf->baseName) . '-' . $model->id_yearbook . '.' . $file_pdf->extension;
                    unlink(Yii::getAlias('@app') . '/files/pdf/' . $oldPdf);
                } else {
                    $model->file_yearbook = $oldPdf;
                }

                if ($model->save()) {
                    return [
                        'forceReload' => '#crud-datatable-pjax',
                        'title' => "Yearbook #" . $id,
                        'content' => $this->renderAjax('view', [
                            'model' => $model,
                            'gallery' => $gallery,
                        ]),
                        'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                            Html::a('Edit', ['update', 'id' => $id], ['class' => 'btn btn-primary', 'role' => 'modal-remote'])
                    ];
                }
            } else {
                return [
                    'title' => "Update Yearbook #" . $id,
                    'content' => $this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer' => Html::button('Close', ['class' => 'btn btn-default pull-left', 'data-dismiss' => "modal"]) .
                        Html::button('Save', ['class' => 'btn btn-primary', 'type' => "submit"])
                ];
            }
        } else {
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_yearbook]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing Yearbook model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;

        $model = $this->findModel($id);
        $oldThumbnail = $model->thumbnail_yearbook;
        $oldHeader = $model->header_yearbook;
        $oldPdf = $model->file_yearbook;

        $this->findModel($id)->delete();
        if ($oldThumbnail != null) {
            unlink(Yii::getAlias('@app') . '/files/img/thumbnail/' . $oldThumbnail);
        }
        if ($oldHeader != null) {
            unlink(Yii::getAlias('@app') . '/files/img/header/' . $oldHeader);
        }
        if ($oldPdf != null) {
            unlink(Yii::getAlias('@app') . '/files/pdf/' . $oldPdf);
        }
        if ($request->isAjax) {
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose' => true, 'forceReload' => '#crud-datatable-pjax'];
        } else {
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
    }

    /**
     * Delete multiple existing Yearbook model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionBulkdelete()
    {
        $request = Yii::$app->request;
        $pks = explode(',', $request->post('pks')); // Array or selected records primary keys
        foreach ($pks as $pk) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if ($request->isAjax) {
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose' => true, 'forceReload' => '#crud-datatable-pjax'];
        } else {
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the Yearbook model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Yearbook the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
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
