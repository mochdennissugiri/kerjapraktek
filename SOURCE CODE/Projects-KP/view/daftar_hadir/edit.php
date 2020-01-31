<?php

require_once'../../function/connection.php';

$id_kehadiran = $_GET['id_kehadiran'];
$query = mysqli_query($link, "SELECT * FROM hadir WHERE id_kehadiran = '$id_kehadiran'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['edit'])){
	$namakaryawan = $_POST['karyawan'];
	$jeniskelamin = $_POST['jk'];
	$kehadiran =$_POST['kd'];
	$keterangan =$_POST['keterangan'];
	$status =$_POST['status'];
	$bagian =$_POST['bagian'];
	$jamdatang =$_POST['jamdatang'];
	$jampulang =$_POST['jampulang'];
	$shift =$_POST['shift'];
	$ubah = mysqli_query($link, "UPDATE hadir SET karyawan ='$namakaryawan', jk = '$jeniskelamin', kd ='$kehadiran', keterangan ='$keterangan', status ='$status', bagian ='$bagian', jamdatang ='$jamdatang', jampulang ='$jampulang', shift ='$shift'  WHERE id_kehadiran ='$id_kehadiran' ");
		if ($ubah){
			?>
			<script type="text/javascript">
				alert('edit data berasil');
				document.location.href="view.php";
			</script>
			<?php
		}else {
			?>
			<script type="text/javascript">
				alert('gagal edit data');
				document.location.href="edit.php";
			</script>
			<?php

		}


	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <title>
   aplikasi
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            PT
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            Yuniko Asia Prima
          </a>
        </div>
        <ul class="nav">
          <li>
            <a href="../../index.php">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Home</p>
            </a>
          </li>
          <li>
            <a href="../gaji/view.php">
              <i class="tim-icons icon-atom"></i>
              <p>Bagian</p>
            </a>
          </li>
          <li class="active">
            <a href="../daftar_hadir/view.php">
              <i class="tim-icons icon-single-02"></i>
              <p>Daftar Hadir</p>
            </a>
          </li>
          <li>
            <a href="../data_karyawan/view.php">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Data Karyawan</p>
            </a>
          </li>
          <li>
            <a href="../penggajian/view.php">
              <i class="tim-icons icon-world"></i>
              <p>Slip Gaji</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">selamat datang di website kami</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">
                <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                  <span class="d-lg-none d-md-block">Search</span>
                </button>
              </li>
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="../assets/img/anime3.png" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a>
                  </li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      
     <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header"><br>
                <a href="view.php">kelola tabel</a>
                <br>
                <h5 class="title">input data absensi</h5>
              </div>
              <div class="card-body">
                <form method="POST" name="from1">
                  <div class="row">
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>namakaryawan</label>
                        <input type="text" name="karyawan" class="form-control" placeholder="masukan nama"value="<?php echo $data['karyawan']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>jeniskelamin</label>
                        <input type="text" name="jk" class="form-control" placeholder="masukan jenis kelamin"value="<?php echo $data['jk']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>kehadiran</label>
                        <input type="text" name="kd" class="form-control" placeholder="masukan kehadiran"value="<?php echo $data['kd']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>keterangan</label>
                        <input type="text" name="keterangan" class="form-control" placeholder="masukan keterangan"value="<?php echo $data['keterangan']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>status</label>
                        <input type="text" name="status" class="form-control" placeholder="masukan status"value="<?php echo $data['status']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>bagian</label>
                        <input type="text" name="bagian" class="form-control" placeholder="masukan bagian"value="<?php echo $data['bagian']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>jamdatang</label>
                        <input type="text" name="jamdatang" class="form-control" placeholder="masukan jam datang"value="<?php echo $data['jamdatang']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>jampulang</label>
                        <input type="text" name="jampulang" class="form-control" placeholder="masukan jam pulang"value="<?php echo $data['jampulang']; ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>shift</label>
                        <input type="text" name="shift" class="form-control" placeholder="masukan shift"value="<?php echo $data['Shift']; ?>">
                      </div>
                    </div>
                  <div class="card-footer">
                <button type="submit" name="edit" value="edit" class="btn btn-fill btn-primary">edit</button>
              </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      <footer class="footer">
        <div class="container-fluid">
          <ul class="nav">
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
              
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
                
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" class="nav-link">
              
              </a>
            </li>
          </ul>
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> PT <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank">yuniko asia prima</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">LIGHT MODE</span>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/black-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
          <a href="https://demos.creative-tim.com/black-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
            Documentation
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
          <a class="github-button" href="https://github.com/creativetimofficial/black-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/black-dashboard.min.js?v=1.0.0"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
</body>

</html>