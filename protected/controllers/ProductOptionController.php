<?php

class ProductOptionController extends Controller {

    public $layout = '//layouts/admin_lte';

    public function actionView($id) {
        IsAuth::Admin();
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionCreate() {
        IsAuth::Admin();
        $model = new ProductOption;

        if (isset($_POST['ProductOption'])) {
            $model->attributes = $_POST['ProductOption'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->product_option_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        IsAuth::Admin();
        $model = $this->loadModel($id);

        if (isset($_POST['ProductOption'])) {
            $model->attributes = $_POST['ProductOption'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->product_option_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        IsAuth::Admin();
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function actionIndex() {
        IsAuth::Admin();
        $dataProvider = new CActiveDataProvider('ProductOption');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        IsAuth::Admin();
        $model = new ProductOption('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['ProductOption']))
            $model->attributes = $_GET['ProductOption'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = ProductOption::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'product-option-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
