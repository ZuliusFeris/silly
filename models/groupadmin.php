

<?php
class GroupAdmin
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
    $req = $db->query('SELECT * FROM groupadmin');

    foreach ($req->fetchAll() as $item) {
      $r = new GroupAdmin();
      $r->id=$item['id'];
      $r->name = $item['name'];
      $list[] = $r;
    }

    return $list;
  }

}
