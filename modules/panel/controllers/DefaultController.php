<?php

namespace app\modules\panel\controllers;

use app\modules\panel\PanelController;
use Yii;

/**
 * Default controller for the `panel` module
 */
class DefaultController extends PanelController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
