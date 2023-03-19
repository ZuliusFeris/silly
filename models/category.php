

<?php
class Category
{
  public $id;
  public $name;


  function __construct()
  {
    
  }
  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM category');

    foreach ($req->fetchAll() as $item) {
      $r = new Category();
      $r->id=$item['id'];
      $r->name = $item['name'];
      $list[] = $r;
    }

    return $list;
  }


  static function getName($id)
  {
    $db=DB::getInstance();
    $item =$db->query("select name FROM category where id=".$id)->fetch();
    return $item["name"];
  }
}
