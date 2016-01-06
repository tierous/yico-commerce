<?php

class ManufacturerController extends Controller {

    public $layout = '//layouts/admin_lte';

    public function actionView($id) {
        IsAuth::Admin();
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionCreate() {
        IsAuth::Admin();
        $model = new Manufacturer;

        if (isset($_POST['Manufacturer'])) {
            $model->attributes = $_POST['Manufacturer'];
            $model->date_added = new CDbExpression('NOW()');
            $model->date_modified = new CDbExpression('NULL');
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->manufacturer_id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        IsAuth::Admin();
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Manufacturer'])) {
            $model->attributes = $_POST['Manufacturer'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->manufacturer_id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        IsAuth::Admin();
        if (Yii::app()->request->isPostRequest) {
            $this->loadModel($id)->delete();
            if (!isset($_GET['ajax'])) {
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
            }
        } else {
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
        }
    }

    public function actionIndex() {
        IsAuth::Admin();
        $dataProvider = new CActiveDataProvider('Manufacturer');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        IsAuth::Admin();
        $model = new Manufacturer('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Manufacturer']))
            $model->attributes = $_GET['Manufacturer'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    public function loadModel($id) {
        $model = Manufacturer::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'manufacturer-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
