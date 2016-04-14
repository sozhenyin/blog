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
	 * ��������
	 */
	public function actionShow()
	{
		exit();
		//��ȡ���еļ�¼
		$countries = Country::find()->orderBy('name')->all();
		
		var_dump($countries);
		
		//��ȡ������¼
		$country = Country::findOne('US');
		
		// ��� ��United States��
		echo $country->name;
		
		exit();
		// �޸� name Ϊ ��U.S.A.�� �������ݿ��б������
		//$country->name = 'U.S.A.';
		//$country->save();
	}
}