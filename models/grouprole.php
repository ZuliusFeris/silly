<?php
class GroupRole
{
  public $id;
  public $groupid;
  public $roleid;


  function __construct()
  {

  }
  static function check($groupid, $roleid)
  {
    $db = DB::getInstance();
    return $db->query("select * from grouprole where groupid='$groupid' and roleid='$roleid'")->fetch(PDO::FETCH_OBJ);
  }
  static function getRolepermit($id)
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query("SELECT * FROM grouprole where groupid=$id");

    foreach ($req->fetchAll() as $item) {
      $r = new GroupRole();
      $r->id = $item['id'];
      $r->groupid = $item['groupid'];
      $r->roleid = $item['roleid'];
      $list[] = $r;
    }

    return $list;
  }
  static function setpermit($q, $groupid, $roleid)
  {
    $db = DB::getInstance();
    $sql = "";
    if ($q == 'add') {
      $sql = "insert into grouprole (groupid,roleid) values ($groupid, $roleid)";
    } else {
      $sql = "delete from grouprole where groupid=$groupid and roleid=$roleid";
    }
    return $db->query($sql);
  }
}