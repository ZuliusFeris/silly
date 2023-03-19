

<?php
require_once('controllers/base_controller.php');
require_once('../models/news.php');
require_once('../models/category.php');

class NewsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'news';
  }

  public function index()
  {

    $data = array(
      'news'=>News::all(),
    );
    $this->render('index', $data);
  }

  public function edit()
  {
    
    $r=null;

    if(isset($_GET["id"])){
        $r = News::single($_GET["id"]); 
    }
    else{
      $r = new News();
      $r->id=0;
    }
    $data=array(
      'news' =>$r,
      'categories' => Category::all()
    );
    $this->render('edit', $data);
  }

  public function save(){
    $food=new News();
    $food->id=$_POST["id"];
    $food->name=$_POST["name"];

    $target_dir = "../assets/img/blog/";
    $target_file = $target_dir . basename($_FILES["picture"]["name"]); 
    move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);
    $food->picture=$_FILES["picture"]["name"];

    $food->description=$_POST["description"];
    $food->publisheddate= date('Y-m-d');
    $food->categoryid=$_POST["categoryid"];
    News::save($food);

    header("Location: index.php?controller=news");
  }
  public function remove()
  {
    $id = filter_input(INPUT_GET, "id");
    News::remove($id);
    header("Location: index.php?controller=news");
  }

}
?>
