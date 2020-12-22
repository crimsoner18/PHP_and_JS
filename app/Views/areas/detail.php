<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Tracing Backend</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="areas/index.html">Contact Tracing Platform</a>
    <span class="navbar-organizer w-100">{insert user name}</span>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" id="logout" href="index.html">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="areas/index.html">Manage Contact Tracings</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>{insert area name}</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="areas/detail.html">Overview</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Reports</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item"><a class="nav-link" href="reports/index.html">Room capacity</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2 area-title">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{insert area name}</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="areas/edit.html" class="btn btn-sm btn-outline-secondary">Edit area</a>
                        </div>
                    </div>
                </div>
                <span class="h6">{insert area date}</span>
            </div>

            <!-- Visitors -->
            <div id="visitors" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Visitors</h2>
                </div>
            </div>

            <div class="table-responsive visitors">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Person</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-nowrap" colspan="3">November 4, 2020</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">08:30</td>
                        <td>Juan Dela Cruz</td> 
                    </tr>
                    <tr class="positive">
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">10:32</td>
                        <td><a href="people/details.html">Pepito Manaloto</a></td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">11:43</td>
                        <td>Captain Barbel</td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap" colspan="3">November 5, 2020</td>
                    </tr>
                    <tr class="positive">
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">09:30</td>
                        <td><a href="people/details.html">Pepito Manaloto</a></td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">16:21</td>
                        <td>Captain Barbel</td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">17:14</td>
                        <td>Juan Dela Cruz</td> 
                    </tr>
                    
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

</body>
</html>
