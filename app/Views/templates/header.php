<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Tracing Backend</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="<?= base_url() ?>/assets/css/custom.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="areas/index.html">Contact Tracing Platform</a>
      <span class="navbar-organizer w-100"><?= $_SESSION['name'] ?></span>
      <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
              <a class="nav-link" id="logout" href="Logout">Sign out</a>
          </li>
      </ul>
  </nav>
