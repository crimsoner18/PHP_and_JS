
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="/Area">Manage Contact Tracings</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Manage Contact Tracings</h1>
            </div>

            <div class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Create new area</h2>
                </div>
            </div>

            <form class="needs-validation" action="newArea" method="post">

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputName">Name</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control is-invalid" id="inputName" name="name" placeholder="" value="">
                        <div class="invalid-feedback">
                            Area Name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputName">Contact Person</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control is-invalid" id="inputContactPerson" name="contact_person" placeholder="" value="">
                        <div class="invalid-feedback">
                            Contact Person is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputSlug">Description</label>
                        <input type="text" class="form-control" id="inputDescription" name="description" placeholder="" value="">
                    </div>
                </div>
                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="" value="<?=$_SESSION['uid'] ?>" hidden>
                <?= csrf_field() ?>

                <hr class="mb-4">
                <button class="btn btn-primary" type="submit">Save area</button>
                <a href="areas/index.html" class="btn btn-link">Cancel</a>
            </form>

        </main>
    </div>
</div>
