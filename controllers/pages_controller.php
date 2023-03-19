

<?php
require_once('controllers/base_controller.php');
require_once('models/product.php');
require_once('models/categoryfood.php');

class PagesController extends BaseController
{
  function __construct()
  {
    $this->folder = 'pages';
  }

  public function home()
  {
    $products= Product::all();
    $category=Categoryfood::all();
    $data = array(
      'product' => $products,
      'category' => $category
    );
    $this->render('home', $data);
  }
  


  public function error()
  {
    $this->render('error');
  }
}
