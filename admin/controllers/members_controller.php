

<?php
require_once('controllers/base_controller.php');
require_once('../models/member.php');

class MembersController extends BaseController
{
  function __construct()
  {
    $this->folder = 'members';
  }

  public function login()
  {
    $this->render_single('login');
  }
  public function check()
  {
    $loginName = $_POST["username"];
    $loginPassword = $_POST["userpass"];
    $member= Member::check($loginName, $loginPassword);
    if($member != false ) {
      $_SESSION["member"]=$member;
        header("Location: index.php");
    }
    else
    {
      header("Location: index.php?controller=members&action=login");
    }

  }
  public function logout()
  {
    session_destroy();
    header("Location: index.php?controller=members&action=login");
  }

}
?>
