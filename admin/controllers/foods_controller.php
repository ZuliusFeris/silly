

<?php
require_once('controllers/base_controller.php');
require_once('../models/food.php');
require_once('../models/categoryfood.php');

class FoodsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'foods';
  }

  public function index()
  {

    $data = array(
      'foods'=>Food::all(),
    );
    $this->render('index', $data);
  }

  public function edit()
  {
    
    $r=null;

    if(isset($_GET["id"])){
        $r = Food::single($_GET["id"]); 
    }
    else{
      $r = new Food();
      $r->id=0;
    }
    $data=array(
      'food' =>$r,
      'categories' => Categoryfood::all()
    );
    $this->render('edit', $data);
  }

  public function save(){
    $food=new Food();
    $food->id=$_POST["id"];
    $food->name=str_replace(";","", $_POST["name"]);

    $target_dir = "../assets/img/gallery/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]); 
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
    $food->picture=$_FILES["picture"]["name"];
    
    
    $food->description=str_replace(";","",$_POST["description"]);
    $food->price=str_replace(";","",$_POST["price"]);
    $food->categoryid=str_replace(";","",$_POST["categoryid"]);
    Food::save($food);

    header("Location: index.php?controller=foods");
  }
  public function remove()
  {
    $id = filter_input(INPUT_GET, "id");
    Food::remove($id);
    header("Location: index.php?controller=foods");
  }

}
?>
