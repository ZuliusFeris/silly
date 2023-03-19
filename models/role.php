

<?php
class Role
{
  public $id;
  public $name;
  public $controller;
  public $action;


  function __construct()
  {
    
  }
  static function getRole($controller, $action)
  {
    $db=DB::getInstance();
    return $db->query("select * from role where controller='$controller' and action='$action'")->fetch(PDO::FETCH_OBJ);
  }
  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM role');

    foreach ($req->fetchAll() as $item) {
      $r = new Role();
      $r->id=$item['id'];
      $r->name = $item['name'];
      $r->controller = $item['controller'];
      $r->action = $item['action'];
      $list[] = $r;
    }

    return $list;
  }
  
 
}

