

<?php
require_once('controllers/base_controller.php');
require_once('models/staff.php');

class AboutsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'about';
  }

  public function index()
  {
    $staff= Staff::all();
    $data = array(
      'staffs' => $staff,
    );
    $this->render('index', $data);
  }
  


  public function error()
  {
    $this->render('error');
  }
}
