<?php

namespace app\modules\admin\controllers;

use app\models\Message;
use app\models\Project;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $project = Project::find()->all();
        $message = Message::find()->all();
        return $this->render('index',[
            'project' => $project,
            'message' => $message
        ]);
    }
}
