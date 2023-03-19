<form method="post" action="index.php?controller=foods&action=save" enctype="multipart/form-data">
<input type="hidden" value="<?=$food->id?>" name="id"/>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Tên món ăn</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"value="<?=$food->name?>" id="name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="picture" class="col-sm-2 col-form-label">Hình ảnh</label>
    <div class="col-sm-10">
        <?php
            if($food->picture!=null){
                ?>
                <img src="../assets/img/gallery/<?=$food->picture?>"/>
                <?php
            }
        ?>
      <input type="file" class="form-control"  name="picture" id="picture">
    </div>
  </div>
  <div class="form-group row">
    <label for="price" class="col-sm-2 col-form-label">Giá món ăn</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="<?=$food->price?>" id="price" name="price">
    </div>
  </div>
  <div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Mô tả</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control" id="description" name="description"><?=$food->description?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="categoryid" class="col-sm-2 col-form-label">Mã danh mục</label>
    <div class="col-sm-10">
      <select name="categoryid" class="form-control">
        <?php
        foreach($categories as $item){
          echo '<option '.($item->id==$food->categoryid?"selected":"").' value="'.$item->id.'">'.$item->name.'</option>';
        }
          ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Save to phpMyadmin</button>
    </div>
  </div>
</form>