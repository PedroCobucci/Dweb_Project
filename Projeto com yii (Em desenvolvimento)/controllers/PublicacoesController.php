<?php

namespace app\controllers;

use app\models\Publicacoes;
use app\models\PublicacoesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PublicacoesController implements the CRUD actions for Publicacoes model.
 */
class PublicacoesController extends Controller
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
     * Lists all Publicacoes models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PublicacoesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionJogospage()
    {
        $searchModel = new PublicacoesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('jogospage', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionJogosvr()
    {
        $searchModel = new PublicacoesSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('jogosvr', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publicacoes model.
     * @param int $idPublicacao Id Publicacao
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idPublicacao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idPublicacao),
        ]);
    }

    /**
     * Creates a new Publicacoes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Publicacoes();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idPublicacao' => $model->idPublicacao]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Publicacoes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idPublicacao Id Publicacao
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idPublicacao)
    {
        $model = $this->findModel($idPublicacao);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idPublicacao' => $model->idPublicacao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Publicacoes model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idPublicacao Id Publicacao
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idPublicacao)
    {
        $this->findModel($idPublicacao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Publicacoes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idPublicacao Id Publicacao
     * @return Publicacoes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idPublicacao)
    {
        if (($model = Publicacoes::findOne(['idPublicacao' => $idPublicacao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
