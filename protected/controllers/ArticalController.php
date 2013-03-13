<?php

class ArticalController extends XController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';
	
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	*/
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->layout = false;
		$modelArtical = new Artical;
		$modelContent = new ArticalContent;

		if(isset($_POST['Artical']))
		{
			$modelArtical->attributes=$_POST['Artical'];
			$modelContent->attributes = $_POST['ArticalContent'];
			$modelContent->validate();
			if($modelArtical->save()) {	
				$modelContent->artical_id = $modelArtical->id;
				if($modelContent->save()) {
					if($_REQUEST['ajax']){
						echo '1';
						Yii::app()->end();
					} else {
						$this->redirect(array('view','id'=>$modelArtical->id));		
					}
				}
			}
		}

		$this->render('create',array(
			'modelArtical'=>$modelArtical,
			'modelContent'=>$modelContent,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Artical']))
		{
			$model->attributes=$_POST['Artical'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * 文章列表页
	 */
	public function actionIndex()
	{
		$modelArtical = new Artical;
		$modelContent = new ArticalContent;

		$model=new Artical('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Artical']))
			$model->attributes=$_GET['Artical'];

		$this->render('index',array(
			'dataProvider' => $model->search(10),
			'modelArtical'=>$modelArtical,
			'modelContent'=>$modelContent,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Artical('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Artical']))
			$model->attributes=$_GET['Artical'];

		$this->render('admin',array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Artical the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Artical::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Artical $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='artical-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
