<table>
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
    <?php
    foreach($groups as $item){
    ?>
    <tr>
        <td><?php echo $item->id; ?></td>
        <td><a href="index.php?controller=groups&action=role&id=<?=$item->id?>"><?php echo $item->name; ?></a></td>
    </tr>
    <?php
    }
    ?>
</table>