<?php


class GoodsController extends Controller {


  public function actionGoods() {

    //var_dump(Yii::app()->session['goods']);

   	$model = new GoodsForm;
    
    $idGood = Yii::app()->request->getQuery("id");
    $bucket = new BucketForm;
    $bucket->add($idGood);
    $this->render('goods', array('data' => $model->getAll(), 'model' => $model));

  }


  public function actionBucket(){
  		$model = new BucketForm;
      $this->render('bucket', array('data' => Yii::app()->session['goods'], 'model' => $model));
  }



}
