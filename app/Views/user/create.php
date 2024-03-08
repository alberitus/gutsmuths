<?=$this->extend('layout/template') ?>
<?=$this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Default</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('user/create') ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="fisrtname">First Name</label>
                                <input type="text" class="form-control" name="firstname" placeholder="First name" id="validationDefault01" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname">last Name</label>
                                <input type="text" class="form-control" name="lastname" placeholder="Last name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Instagram</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"
                                            id="inputGroupPrepend2">https://instagram.com/</span>
                                    </div>
                                    <input type="text" class="form-control" name="instagram"
                                        aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?=$this->endSection() ?>