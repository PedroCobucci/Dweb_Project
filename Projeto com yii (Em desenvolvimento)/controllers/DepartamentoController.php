<?php

namespace app\controllers;

use app\models\Departamento;
use app\models\DepartamentoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DepartamentoController implements the CRUD actions for Departamento model.
 */
class DepartamentoController extends Controller
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
     * Lists all Departamento models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new DepartamentoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Departamento model.
     * @param int $idDepartamento Id Departamento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idDepartamento)
    {
        return $this->render('view', [
            'model' => $this->findModel($idDepartamento),
        ]);
    }

    /**
     * Creates a new Departamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Departamento();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idDepartamento' => $model->idDepartamento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Departamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idDepartamento Id Departamento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idDepartamento)
    {
        $model = $this->findModel($idDepartamento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idDepartamento' => $model->idDepartamento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Departamento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idDepartamento Id Departamento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idDepartamento)
    {
        $this->findModel($idDepartamento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Departamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idDepartamento Id Departamento
     * @return Departamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idDepartamento)
    {
        if (($model = Departamento::findOne(['idDepartamento' => $idDepartamento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
