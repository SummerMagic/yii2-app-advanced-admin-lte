<?php

namespace backend\controllers;

use Yii;
use backend\models\Progress;
use backend\models\search\ProgressSearch;
use backend\components\Controller;
use yii\web\NotFoundHttpException;

/**
 * ProgressController implements the CRUD actions for Progress model.
 * @author meiluzhi
 * @time 2022-01-22
 * @desc 装修进度管理控制器
 */
class ProgressController extends Controller
{
    /**
     * Lists all Progress models.
     * @return mixed
     * @desc 装修进度节点管理
     */
    public function actionIndex()
    {
        $searchModel = new ProgressSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Progress model.
     * @param int $id id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Progress model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     * @desc 装修节点新增
     */
    public function actionCreate()
    {
        $model = new Progress();
        $model->loadDefaultValues();

        if (Yii::$app->request->isPost) {
            // 取消注释来上传文件/图片
            // $model->uploadFiles($model->fileAttributes);
            // $model->uploadImages($model->fileAttributes);
            $model->load($_POST);

            if (!$model->hasErrors() && $model->save()) {
                Yii::$app->session->setFlash('success', Progress::$modelName . '#' . $model->id . '已添加成功。');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Progress model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            // 取消注释来上传文件/图片
            // $model->uploadFiles($model->fileAttributes);
            // $model->uploadImages($model->fileAttributes);
            $model->load($_POST);

            if (!$model->hasErrors() && $model->save()) {
                Yii::$app->session->setFlash('success', Progress::$modelName . '#' . $model->id . '已更新成功。');
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Progress model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        Yii::$app->session->setFlash('warning', Progress::$modelName . '#' . $model->id . '已成功删除。');
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Progress model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id id
     * @return Progress the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Progress::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
