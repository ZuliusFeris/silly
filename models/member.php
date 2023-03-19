

<?php
class Member
{
  public $id;
  public $name;
  public $userName;
  public $userPass;
  public $picture;
  public $groupid;

  function __construct()
  {
    
  }
  static function check($loginname, $loginpass)
  {
    $db=DB::getInstance();
    $loginname =str_replace("'","", $loginname);
    return $db->query("select * from members where userName='$loginname' and userPass=MD5('$loginpass')")->fetch(PDO::FETCH_OBJ);
  }

 
  static function single($id)
  {
    $db=DB::getInstance();
    return $db->query("select * from members where id=".$id)->fetch(PDO::FETCH_OBJ);
  }

}
