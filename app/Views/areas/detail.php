
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="/Areas">Manage Contact Tracings</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span><?= esc($name) ?></span>
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
                    <h1 class="h2"><?= esc($name) ?></h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="areas/edit.html" class="btn btn-sm btn-outline-secondary">Edit area</a>
                        </div>
                    </div>
                </div>
                <span class="h6"><?= date('d-m-Y') ?></span>
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
                      <?php
                        $db = \Config\Database::connect();
                        $id = $_SESSION['uid'];

                        $query = $db->query("SELECT created_at FROM `tracers` WHERE `area_id`='$room_id'");
                        foreach ($query->getResult('array') as $data):
                      ?>
                    <tr>
                        <td class="text-nowrap" colspan="3">November 4, 2020</td>
                    </tr>
                    <?php
                      $query = $db->query("SELECT * FROM `tracers` WHERE `area_id`='$room_id'");
                      foreach ($query->getResult('array') as $data):
                    ?>
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
                    <?php
                      endforeach;
                    ?>
                  <?php
                    endforeach;
                  ?>



                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>
