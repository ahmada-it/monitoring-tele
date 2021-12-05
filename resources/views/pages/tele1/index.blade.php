<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="refresh" content="120">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Monitoring Cuaca Tirtarona</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Kedaireka</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
              </li>
              <li class="nav-item">
                <a href="{{route('tele1')}}" class="nav-link active">
                  <p>Device Telemetering 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <p>Device Telemetering 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <p>Device Telemetering 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('forecast')}}" class="nav-link active">
                  <p>Weather Forecast</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('user')}}" class="nav-link active">
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="logout" class="nav-link active">
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Data Sensor Keseluruhan Device Telemetering 1</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Data Sensor Keseluruhan -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sensor Keseluruhan</h3>
              </div>
              <div class="card-body">
                <a href="{{route('tele1.cetak_pdf')}}" class="btn btn-primary" target="_blank">CETAK PDF</a>
                <!-- <a href="#" class="ml-1 btn btn-primary"><i class="fas fa-plus"></i> -->
                </a>
                <table id="keseluruhan" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>WAKTU</th>
                      <th>CO</th>
                      <th>O3</th>
                      <th>H2S</th>
                      <th>DUST</th>
                      <th>NH3</th>
                      <th>NO2</th>
                      <th>TEMP</th>
                      <th>HUMID</th>
                      <th>PRESSURE</th>
                      <th>RAIN</th>
                      <th>WIND SPEED</th>
                      <th>WIND DIRECT</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1
                    @endphp
                    @for ($i = sizeof($data_CO)-1;$i>=0;$i--)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data_waktu[$i]['created_at']}}</td>
                      <td>{{$data_CO[$i]['field1']}}</td>
                      <td>{{$data_O3[$i]['field2']}}</td>
                      <td>{{$data_H2S[$i]['field3']}}</td>
                      <td>{{$data_DUST[$i]['field4']}}</td>
                      <td>{{$data_NH3[$i]['field5']}}</td>
                      <td>{{$data_NO2[$i]['field6']}}</td>
                      <td>{{$data_TEMPERATURE[$i]['field1']}}</td>
                      <td>{{$data_HUMIDITY[$i]['field2']}}</td>
                      <td>{{$data_PRESSURE[$i]['field3']}}</td>
                      <td>{{$data_RAIN[$i]['field4']}}</td>
                      <td>{{$data_WIND_SPEED[$i]['field1']}}</td>
                      <td>{{$data_WIND_DIRECT[$i]['field2']}}</td>
                    </tr>
                    @endfor
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>WAKTU</th>
                      <th>CO</th>
                      <th>O3</th>
                      <th>H2S</th>
                      <th>DUST</th>
                      <th>NH3</th>
                      <th>NO2</th>
                      <th>TEMP</th>
                      <th>HUMID</th>
                      <th>PRESSURE</th>
                      <th>RAIN</th>
                      <th>WIND SPEED</th>
                      <th>WIND DIRECT</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Data Sensor Kualitas Udara -->
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sensor Kualitas Udara</h3>
              </div>
              <div class="card-body">
                <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                </a>
                <table id="kualitas" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>WAKTU</th>
                    <th>CO</th>
                    <th>O3</th>
                    <th>H2S</th>
                    <th>DUST</th>
                    <th>NH3</th>
                    <th>NO2</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1
                  @endphp
                  @for ($i = sizeof($data_CO)-1;$i>=0;$i--)
                  <tr>
                    <td>{{$no++}}</td>
                    <td>{{$data_waktu[$i]['created_at']}}</td>
                    <td>{{$data_CO[$i]['field1']}}</td>
                    <td>{{$data_O3[$i]['field2']}}</td>
                    <td>{{$data_H2S[$i]['field3']}}</td>
                    <td>{{$data_DUST[$i]['field4']}}</td>
                    <td>{{$data_NH3[$i]['field5']}}</td>
                    <td>{{$data_NO2[$i]['field6']}}</td>
                  </tr>
                  @endfor
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>WAKTU</th>
                    <th>CO</th>
                    <th>O3</th>
                    <th>H2S</th>
                    <th>DUST</th>
                    <th>NH3</th>
                    <th>NO2</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        </div>

        <!-- Data Sensor Cuaca -->
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sensor Cuaca</h3>
              </div>
              <div class="card-body">
                <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                </a>
                <table id="cuaca" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>DATE</th>
                      <th>TEMP</th>
                      <th>HUMID</th>
                      <th>PRESSURE</th>
                      <th>RAIN</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1
                    @endphp
                    @for ($i = sizeof($data_CO)-1;$i>=0;$i--)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data_waktu[$i]['created_at']}}</td>
                      <td>{{$data_TEMPERATURE[$i]['field1']}}</td>
                      <td>{{$data_HUMIDITY[$i]['field2']}}</td>
                      <td>{{$data_PRESSURE[$i]['field3']}}</td>
                      <td>{{$data_RAIN[$i]['field4']}}</td>
                    </tr>
                    @endfor
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>DATE</th>
                      <th>TEMP</th>
                      <th>HUMID</th>
                      <th>PRESSURE</th>
                      <th>RAIN</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>

        <!-- Data Sensor Angin -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Sensor Angin</h3>
              </div>
              <div class="card-body">
                <!-- <a href="#" class="btn btn-primary" target="_blank">CETAK PDF</a> -->
                <!-- <a href="#" class="ml-1 btn btn-primary"><i class="fas fa-plus"></i> -->
                </a>
                <table id="angin" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>WAKTU</th>
                      <th>WIND SPEED</th>
                      <th>WIND DIRECT</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $no = 1
                    @endphp
                    @for ($i = sizeof($data_CO)-1;$i>=0;$i--)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data_waktu[$i]['created_at']}}</td>
                      <td>{{$data_WIND_SPEED[$i]['field1']}}</td>
                      <td>{{$data_WIND_DIRECT[$i]['field2']}}</td>
                    </tr>
                    @endfor
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>WAKTU</th>
                      <th>WIND SPEED</th>
                      <th>WIND DIRECT</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; </strong> Made With Love.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#keseluruhan').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#kualitas').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#cuaca').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    $('#angin').DataTable({
      "paging": true,
      "pageLength": 10,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
