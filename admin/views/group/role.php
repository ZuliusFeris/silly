<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>Action</th>
    
    ?>
    </tr>
    <?php
    foreach($role as $item){
        $key= array_search($item->id, array_column($rolepermit, 'roleid'));
    ?>
    <tr>
        <td><?php echo $item->id; ?></td>
        <td><a href="index.php?controller=groups&action=role&id=<?php $item->id ?>"><?php echo $item->name; ?></a></td>
        <?php
        if(gettype($key)=="integer")
        {
            echo "<td><a href='index.php?controller=groups&acion=checkpermit&q=delete&groupid=$groupidsi&roleid=$item->id'>Xóa</a></td>";
        }
        else
        {
            echo "<td><a href='index.php?controller=groups&acion=checkpermit&q=add&groupid=$groupidsi&roleid=$item->id'>Thêm</a></td>";
        }
        ?>
    
    <?php
    }
    ?>
</table>