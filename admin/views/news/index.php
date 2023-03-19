<div class="card">
  <div class="card-header">
    <h3 class="card-title">Thông tin tin tức</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Sự kiện</th>
          <th>Ngày đăng</th>
          <th>Tên danh mục</th>
          <th>Mô tả</th>
          <th>Note_Mod</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once('../models/category.php');
        foreach ($news as $item) {
          ?>
          <tr>
            <td><?= $item->name ?></td>
            <td><?= $item->publisheddate ?></td>
            <td><?=Category::getName($item->categoryid) ?></td>
            <td><?= $item->description ?></td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn dropdown-toggle dropdown-icon" data-toggle="dropdown">
                  <i class="fas fa-align-right"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                  <a class="dropdown-item" href="index.php?controller=news&action=edit&id=<?= $item->id ?>"><i
                      class="fas text-primary fa-pencil-alt pr-1"></i>Cập nhật</a>
                  <a class="dropdown-item remove" href="index.php?controller=news&action=remove&id=<?= $item->id ?>"><i
                      class="fas text-danger fa-trash-alt pr-1"></i>Xóa</a>

                </div>
              </div>
            </td>
          </tr>
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
    $(".remove").click(function () {
      if (confirm("Bạn có muốn xóa?")) {
        return true;
      }
      return false;
    });
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [{
        text: "Thêm",
        action: function () {
          window.location = "index.php?controller=news&action=edit";
        }
      }],

      "aoColumnDefs":[
        { "bSearchable": true,"bVisible": false, "aTargets": [2] }
      ],

      initComplete: function () {
      this.api().columns([2]).every(function () {
        var column = this;
        var select = $('<select class="form-control-sm ml-2"><option value="">'+$(column.header()).text()+'</option></select>')
          .appendTo($(".dataTables_filter"))
          .on('change', function () {
            var val = $.fn.dataTable.util.escapeRegex(
              $(this).val()
            );

            column
              .search(val ? '^' + val + '$' : '', true, false)
              .draw();
          });

        column.data().unique().sort().each(function (d, j) {
          select.append('<option value="' + d + '">' + d + '</option>')
        });
      });
    }
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>