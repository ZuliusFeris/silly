<?php
class Food
{
  public $id;
  public $name;
  public $picture;
  public $price;
  public $description;
  public $categoryid;

  function __construct()
  {
    
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM food');

    foreach ($req->fetchAll() as $item) {
      $r = new Food();
      $r->id=$item['id'];
      $r->name = $item['name'];
      $r->picture=$item['picture'];
      $r->price=$item['price'];
      $r->description=$item['description'];
      $r->categoryid=$item['categoryid'];
      $list[] = $r;
    }

    return $list;
  }

  static function single($id)
  {
    $db=DB::getInstance();
    return $db->query("select * from food where id=".$id)->fetch(PDO::FETCH_OBJ);
  }
  public function remove($id)
  {
    $db=DB::getInstance();
    return $db->query("delete  from food where id=".$id);
  }

  public function save($food){
    $db=DB::getInstance();
    $sql="";
    if($food->id==0){

      $sql="insert into food (name, picture, price, description, categoryid) values('$food->name','$food->picture','$food->price','$food->description', '$food->categoryid')";
    }
    else{

      $sql= "update food set name='$food->name' ". ($food->picture != ""?", picture='$food->picture'":"").", price='$food->price', description='$food->description',categoryid='$food->categoryid' where id=".$food->id;
    }
    return $db->query($sql);
  }
}
