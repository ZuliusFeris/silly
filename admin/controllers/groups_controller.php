<?php
require_once('controllers/base_controller.php');
require_once('../models/groupadmin.php');
require_once('../models/role.php');

class GroupsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'group';
  }

  public function index()
  {
    $data = array(
      'groups' => GroupAdmin::all(),

    );
    $this->render('index', $data);

  }
  public function role()
  {
    $id = $_GET["id"];
    $data = array(
      'role' => Role::all(),
      'rolepermit' => GroupRole::getRolepermit($id),
      'groupidsi' => $id
    );
    $this->render('role', $data);

  }
}
?>