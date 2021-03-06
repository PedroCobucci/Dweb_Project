<?php

namespace app\controllers;

use app\models\Comentario;
use app\models\ComentarioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComentarioController implements the CRUD actions for Comentario model.
 */
class ComentarioController extends Controller
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
     * Lists all Comentario models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ComentarioSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Comentario model.
     * @param int $idComentario Id Comentario
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idComentario)
    {
        return $this->render('view', [
            'model' => $this->findModel($idComentario),
        ]);
    }

    /**
     * Creates a new Comentario model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Comentario();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idComentario' => $model->idComentario]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Comentario model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idComentario Id Comentario
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idComentario)
    {
        $model = $this->findModel($idComentario);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idComentario' => $model->idComentario]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Comentario model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idComentario Id Comentario
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idComentario)
    {
        $this->findModel($idComentario)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Comentario model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idComentario Id Comentario
     * @return Comentario the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idComentario)
    {
        if (($model = Comentario::findOne(['idComentario' => $idComentario])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
