<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class GoodsForm extends CFormModel
{
  public $id;
  public $name;
  public $about;
  public $price;
  public $all;

  public function getAll() {
    
    if(!isset($this->all)){
      $this->all = array();
    }
    for($i = 0; $i <10; $i++)
      array_push(
        $this->all, 
        array("id" => $i, "name" => "comp", "about" => "Cool thing", "price" => rand() % 10000));

    return $this->all;
  }

  public function getById($id){
    foreach($this->all as $i)
      if($i['id'] == $id) return $i;
  }
}
