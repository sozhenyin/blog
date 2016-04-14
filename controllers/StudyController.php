<?php
namespace app\controllers;


use yii;
use yii\base\Controller;
use app\models\EntryForm;
use app\models\Country;

class CountryController extends Controller 
{
	public function actionEntry()
	{
		$countries = Country::find()->orderBy('name')->all();
		
		var_dump($countries);
		
		$model = new EntryForm();
		if( $model->load( Yii::$app->request->post() ) && $model->validate() ){
			
			return $this->render('entry-confirm', ['model' => $model]);
		}else{
			return $this->render('entry',['model'=>$model]);
		}
	}
	
	/**
	 * 操作国家
	 */
	public function actionShow()
	{
		exit();
		//获取所有的记录
		$countries = Country::find()->orderBy('name')->all();
		
		var_dump($countries);
		
		//获取主键记录
		$country = Country::findOne('US');
		
		// 输出 “United States”
		echo $country->name;
		
		exit();
		// 修改 name 为 “U.S.A.” 并在数据库中保存更改
		//$country->name = 'U.S.A.';
		//$country->save();
	}
}