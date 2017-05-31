<?php

class CustomerController extends CController
{
	public function init()
    {
        $this->layout = 'layout';
    }

	public function actionIndex()
	{
		$customers = Customer::model()->findAll();		
		$this->render('index', ['customers' => $customers]);
	}

	public function actionCreate()
	{
		$customer = Customer::model();
		$this->render('create', ['customer' => $customer]);
	}

	public function actionStore()
	{
		$customer = new Customer();
		$customer->attributes=$_POST['Customer'];

		$validation=$customer->validate();

		if ($validation) {
			$customer->save();
		}

		$customers = Customer::model()->findAll();		
		$this->render('index', ['customers' => $customers]);
	}

	public function actionShow($id)
	{
		$customer = Customer::model()->findByPk($id);		
		$this->render('show', ['customer' => $customer]);
	}

	public function actionEdit($id)
	{
		$customer = Customer::model()->findByPk($id);		
		$this->render('edit', ['customer' => $customer]);
	}

	public function actionUpdate($id)
	{
		$customer = Customer::model()->findByPk($id);
		$customer->attributes=$_POST['Customer'];

		$validation=$customer->validate();

		if ($validation) {
			$customer->save();
		}

		$customers = Customer::model()->findAll();		
		$this->render('index', ['customers' => $customers]);
	}

	public function actionDelete($id)
	{
		Yii::app()->getClientScript()->registerCoreScript('yii'); 

		$customer = Customer::model()->findByPk($id)->delete();

		$customers = Customer::model()->findAll();		
		$this->render('index', ['customers' => $customers]);
	}

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
}