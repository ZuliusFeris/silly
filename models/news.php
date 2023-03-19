

<?php
class News
{
  public $id;
  public $name;
  public $picture;
    public $description;
    public $publisheddate;
    public $categoryid;

  function __construct()
  {
    
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM news');

    foreach ($req->fetchAll() as $item) {
      $r = new News();
      $r->id=$item['id'];
      $r->name = $item['name'];

      $r->picture=$item['picture'];
      
      $r->description=$item['description'];
      $r->publisheddate=$item['publisheddate'];
      $r->categoryid=$item['categoryid'];

      $list[] = $r;
    }

    return $list;
  }

  static function single($id)
  {
    $db=DB::getInstance();
    return $db->query("select * from news where id=".$id)->fetch(PDO::FETCH_OBJ);
  }

  public function remove($id)
  {
    $db=DB::getInstance();
    return $db->query("delete  from news where id=".$id);
  }

  public function save($news){
    $db=DB::getInstance();
    $sql="";
    if($news->id==0){

      $sql="insert into news (name, picture, publisheddate, description, categoryid) values('$news->name','$news->picture','$news->publisheddate','$news->description', '$news->categoryid')";
    }
    else{
      $sql= "update news set name='$news->name'". ($news->picture != ""?", picture='$news->picture'":"").",publisheddate='$news->publisheddate', description='$news->description',categoryid='$news->categoryid' where id=".$news->id;
    }
    return $db->query($sql);
  }
}
