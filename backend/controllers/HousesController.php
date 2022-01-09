<?php

namespace backend\controllers;

use Yii;
use backend\models\Houses;
use backend\models\search\HouseSearch;
use backend\components\Controller;
use yii\web\NotFoundHttpException;

/**
 * HousesController implements the CRUD actions for Houses model.
 */
class HousesController extends Controller
{
    /**
     * Lists all Houses models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HouseSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Houses model.
     * @param int $id ID
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Houses model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Houses();
        $model->loadDefaultValues();

        if(Yii::$app->request->isPost)
        {
            // 取消注释来上传文件/图片
            // $model->uploadFiles($model->fileAttributes);
            // $model->uploadImages($model->fileAttributes);
            $model->load($_POST);

            if (!$model->hasErrors() && $model->save()) {
                Yii::$app->session->setFlash('success', Houses::$modelName.'#'.$model->id.'已添加成功。');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Houses model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(Yii::$app->request->isPost)
        {
            // 取消注释来上传文件/图片
            // $model->uploadFiles($model->fileAttributes);
            // $model->uploadImages($model->fileAttributes);
            $model->load($_POST);

            if (!$model->hasErrors() && $model->save()) {
                Yii::$app->session->setFlash('success', Houses::$modelName.'#'.$model->id.'已更新成功。');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Houses model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        Yii::$app->session->setFlash('warning', Houses::$modelName.'#'.$model->id.'已成功删除。');
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Houses model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Houses the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Houses::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
