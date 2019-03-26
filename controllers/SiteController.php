<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\Contact;
use app\models\Yearbook;

class SiteController extends Controller
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
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'layout' => 'error',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $yrbk = Yearbook::find()->limit(3)->all();

        return $this->render('index', [
            'yrbk' => $yrbk,
        ]);
    }

    // public function actionYearbook()
    // {
    //     return $this->render('yearbook');
    // }

    // public function actionPricelist()
    // {
    //     return $this->render('pricelist');
    // }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = "login";
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new Contact();
        if ($model->load(Yii::$app->request->post())) {
            $model->type = "outbox";
            $model->create_contact =  date('Y-m-d H:i:s');
            $model->update_contact =  date('Y-m-d H:i:s');

            //email notification
            //system email akan mengirim email ke bc yearbook
            $email = Yii::$app->mailer->compose()
                ->setFrom([Yii::$app->params['systemEmail'] => $model->full_name . ' - BC YEARBOOK'])
                ->setTo(Yii::$app->params['bcEmail'])
                ->setSubject($model->subject_contact)
                ->setHtmlBody($model->message)
                ->send();
            if ($email) {
                Yii::$app->getSession()->setFlash('success', "Check your email!<br>if it's not in the inbox, please check in the spam.");
            } else {
                Yii::$app->getSession()->setFlash('warning', 'Failed, contact Admin!');
            }
            $model->save();

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
