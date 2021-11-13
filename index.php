<!doctype html>
<html lang="en">

<head>
  <title>Biodata Saya</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bio.css">
  <link rel="icon" href="images/3.jpg">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
        </button>
      </div>
      <div class="img bg-wrap text-center py-4" style="background-image: url(images/coding.png);">
        <div class="user-logo">
          <!-- <div class="img" style="background-image: url(images/rosi2.jpeg);"></div>
          <h3>Rosiani </h3>
          <i class="cinta fa fa-heart fa-3x font-weight-bold h-100 my-3"> </i> -->
          <div class="img" style="background-image: url(images/3.jpg);"></div>
          <h3>Rachmad Ananda Damaputra</h3>
        </div>
      </div>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="index.php?p=home"><span class="fa fa-home mr-3"></span> Beranda</a>
        </li>
        <li>
          <a href="index.php?p=tb-mahasiswa"><span class="fa fa-pencil-square-o mr-3"></span>Data Mahasiswa</a>
        </li>
        <li>
          <a href="index.php?p=tb-mata-kuliah"><span class="fa fa-bookmark mr-3"></span> Data Mata Kuliah</a>
        </li>
        <!-- <li>
            <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-download mr-3 notif"><small class="d-flex align-items-center justify-content-center">5</small></span> Download</a>
          </li> -->
      </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="my-2"><strong> Jadwal Mahasiswa STMIK Palangkaraya</strong> </h2>
      <p>Ini adalah web aplikasi CRUD untuk penjadwalan mahasiswa, terdapat beberapa menu yang ada disini seperti
        pada tabel di bawah ini.</p>
      <?php
      $page_dir = 'pages';
      if (!empty($_GET['p'])) {
        $page = scandir($page_dir, 0);
        unset($page[0], $page[1]);
        $p = $_GET['p'];
        if (in_array($p . '.php', $page)) {
          include($page_dir . '/' . $p . '.php');
        } else {
          include($page_dir . '/error-nih.php');
        }
      } else {
        include($page_dir . '/home.php');
      }
      ?>

    </div>
  </div>
  <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <p>Copyright Template Source Code By &copy; <a href="https://colorlib.com/wp/bootstrap-sidebar/" target="_blank">Colorlib</a></p>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>