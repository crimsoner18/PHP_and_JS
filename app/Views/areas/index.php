<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="/Areas">Manage areas</a></li>
                </ul>
            </div>
        </nav>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Manage areas</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="newArea" class="btn btn-sm btn-outline-secondary">Create new area</a>
                    </div>
                </div>
            </div>

            <div class="row areas">
              <?php
                $db = \Config\Database::connect();
                $id = $_SESSION['uid'];

                $query = $db->query('SELECT * FROM `areas` WHERE `user_id`='.$id);

                foreach ($query->getResult('array') as $data):
              ?>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="Areas/viewArea/<?= $data['id'] ?>" class="btn text-left area">
                            <div class="card-body">
                                <h5 class="card-title"><?= esc($data['name']); ?></h5>
                                <p class="card-subtitle"><?= esc('date registered: '.$data['created_at']); ?></p>
                                <hr>
                                <p class="card-text">
                                  <?php
                                    $id =  $data['id'];
                                    $query = $db->query("SELECT COUNT(DISTINCT(user_id)) as visitors FROM tracers inner join users ON tracers.user_id = users.id WHERE tracers.area_id='$id'");

                                    foreach ($query->getResult('array') as $data):
                                      echo($data['visitors'].' Unique Visitors');
                                    endforeach;
                                    ?>
                              </p>
                            </div>
                        </a>
                    </div>
                </div>

              <?php
                endforeach;
              ?>
            </div>

        </main>
    </div>
</div>
