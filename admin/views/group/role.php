
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Cập nhật chỉnh sửa quyền</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên quyền</th>
                    <th>Check</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($role as $item) {
                    $key = array_search($item->id, array_column($rolepermit, 'roleid'));
                    ?>
                    <tr>
                        <td>
                            <?php echo $item->id; ?>
                        </td>
                        <td><a href="index.php?controller=groups&action=role&id=<?php $item->id ?>"><?php echo $item->name; ?></a></td>
                        <?php
                        echo "<td><input type='checkbox' " . (gettype($key) == "integer" ? "checked" : "") .
                            " data-groupid='" . $groupidsi . "' data-roleid='" . $item->id . "' class='permit'/></td>";

                        ?>

                        <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>


<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Theme style -->




<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>





<script>
    $(function () {
        $('.permit').on("change", function (e) {
            e.preventDefault();

            var check = $(this).is(':checked');
            var q = "delete";
            if (check)
                q = "add";

            var groupid = $(this).data("groupid");
            var roleid = $(this).data("roleid");
            $.post("index.php?controller=groups&action=checkpermit",
                {
                    q: q,
                    groupid: groupid,
                    roleid: roleid
                },
                function () {

                });
        });
    });
</script>