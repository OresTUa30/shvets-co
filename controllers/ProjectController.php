<?php

namespace app\controllers;

use app\models\Message;
use Yii;
use app\models\Project;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ProjectController extends Controller
{

    public function actionIndex()
    {
        $dataProvider  = new ActiveDataProvider([
            'query' => Project::find()->where(['status' => 0]),
            'pagination' => [
                'pageSize' => 8,
            ],
        ]);

        return $this->render('index_view',['dataProvider'=>$dataProvider]);
    }

    public function actionShow($id)
    {
        $project = Project::find()->where(['id' => $id])->one();
        $message = new Message();
        if ($message->load(Yii::$app->request->post()) && $message->save()) {
            $to = 'shvetscreativestudio@gmail.com';
            $subject = 'Message from '. ' '. $message->email;
            $mail = '<table class="body-wrap">
                            <tr>
                                <td class="container">
                                    <table>
                                        <tr>
                                            <td align="center" class="masthead">
                                                <h2 style="font-weight: normal">Hello my name is '.$message->name.'</h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="content">
                        
                                                <p style="font-size: 17px">'. $message->message.'</p>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table> ';

            $headers = 'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n".
            'From: administrator@shvetscreativestudio.com' . "\r\n";
            mail($to, $subject, $mail, $headers);
            return $this->refresh();
        }

        return $this->render('show',[
            'project' => $project,
            'message' => $message
        ]);
    }

    



}
