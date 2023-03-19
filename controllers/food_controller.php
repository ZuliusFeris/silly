<?php
require_once('controllers/base_controller.php');
require_once('models/food.php');

class FoodController extends BaseController
{
  function __construct()
  {
    $this->folder = 'food';
  }

  public function index()
  {
    $foodPerPage = 3;
    $page =1;

    if(isset($_GET["page"]))
        $page =$_GET["page"];

    $start = ($page-1)*$foodPerPage;
    $end= $page*$foodPerPage;

    $foods= Food::all();
    $totalFoods= count($foods);
    $totalPages= $totalFoods/$foodPerPage;

    if(intval($totalPages)!= $totalPages)
        $totalPages=intval($totalPages)+1;
    
    $data = array(
      'food'=>Food::all(),
      'start'=>$start,
      'end'=> $end,
      'totalPage'=>$totalPages
    );
    $this->render('index', $data);
  }

  public function details()
  {
    $id = filter_input(INPUT_GET, "id");
    $data=array(
      'foods' =>Food::single($id)
    );
    $this->render('details', $data);
  }
}
?>