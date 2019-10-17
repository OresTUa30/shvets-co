<?php

namespace app\controllers;

use app\models\Message;
use app\models\Project;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
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
        $project = Project::find()->orderBy('RAND()')->limit(3)->all();
        return $this->render('index',['project' => $project]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
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

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            mail($to, $subject, $mail, $headers);
            return $this->refresh();
        }
        return $this->render('contact', ['message' => $message]);
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

