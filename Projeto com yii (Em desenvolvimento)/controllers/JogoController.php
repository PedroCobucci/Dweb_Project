<?php

namespace app\controllers;

use app\models\Jogo;
use app\models\JogoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JogoController implements the CRUD actions for Jogo model.
 */
class JogoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Jogo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JogoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jogo model.
     * @param int $idJogo Id Jogo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idJogo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idJogo),
        ]);
    }

    /**
     * Creates a new Jogo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jogo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idJogo' => $model->idJogo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jogo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idJogo Id Jogo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idJogo)
    {
        $model = $this->findModel($idJogo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idJogo' => $model->idJogo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jogo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idJogo Id Jogo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idJogo)
    {
        $this->findModel($idJogo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jogo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idJogo Id Jogo
     * @return Jogo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idJogo)
    {
        if (($model = Jogo::findOne(['idJogo' => $idJogo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
