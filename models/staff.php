

<?php
class Staff
{
  public $id;
  public $name;
  public $picture;
  public $position;
  public $detailsCV;

  function __construct()
  {
    
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM staff');

    foreach ($req->fetchAll() as $item) {
      $r = new Staff();
      $r->id=$item['id'];
      $r->name = $item['name'];
      $r->picture=$item['picture'];
      $r->position=$item['position'];
      $r->detailsCV=$item['detailsCV'];

      $list[] = $r;
    }

    return $list;
  }

}
