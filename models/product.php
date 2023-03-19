

<?php
class Product
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
    $req = $db->query('SELECT * FROM product');

    foreach ($req->fetchAll() as $item) {
      $r = new Product();
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
    return $db->query("select * from product where id=".$id)->fetch();
  }
}
