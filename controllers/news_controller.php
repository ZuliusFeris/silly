

<?php
require_once('controllers/base_controller.php');
require_once('models/news.php');

class NewsController extends BaseController
{
  function __construct()
  {
    $this->folder = 'news';
  }

  public function index()
  {
    $roomsPerPage = 3;
    $page =1;

    if(isset($_GET["page"]))
        $page =$_GET["page"];

    $start = ($page-1)*$roomsPerPage;
    $end= $page*$roomsPerPage;

    $news= News::all();
    $totalnews= count($news);
    $totalPages= $totalnews/$roomsPerPage;

    if(intval($totalPages)!= $totalPages)
        $totalPages=intval($totalPages)+1;
    
    $data = array(
      'news'=> $news,
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
      'news' =>News::single($id)
    );
    $this->render('details', $data);
  }
}
?>
