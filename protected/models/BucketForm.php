<?php

class BucketForm extends CFormModel {



	public $bucket = array();


	// Add to bucket
	public function add($good = null){
		$model = new GoodsForm;
		$gd = null;
		$allGoods = $model->getAll();

		foreach($allGoods as $i)
			if($i['id'] = $good) $gd = $i;



	    if(!isset(Yii::app()->session['goods']))
	      Yii::app()->session['goods'] = [];
	    $tmp = Yii::app()->session['goods'];
	    array_push($tmp, $gd);
	    Yii::app()->session['goods'] = $tmp;

  }


	public function getAll(){
		return $this->bucket;
	}

}