<?php

class IndexController extends XController
{
	/**
	 * 首页
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
}