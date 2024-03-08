<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <!-- Start Flash Data -->
                <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                </div>
                <?php endif; ?>
                <!-- End Flash Data -->
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"><?= $title ?></h4>
                    </div>
                    <div class="header-action">
                        <a class="mt-2 btn btn-primary" href="/user/create" role="button">Add User</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable-1" class="table data-table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Instagram</th>
                                    <th>Voucher</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                    foreach ($result as $value) : ?>
                                <tr>
                                    <td><?= $value['firstname'] ?></td>
                                    <td><?= $value['lastname']  ?></td>
                                    <td><?= $value['username'] ?></td>
                                    <td><?= $value['email']  ?></td>
                                    <td><a
                                            href="https://www.instagram.com/<?= $value['instagram']  ?>/"><?= $value['instagram']  ?></a>
                                    </td>
                                    <td><?= $value['voucher']  ?></td>
                                    <td><?= $value['created_at']  ?></td>
                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Add" href="#"><i class="ri-user-add-line"></i></a>
                                            <a data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Edit" href="#"><i class="ri-pencil-line"></i></a>
                                            <a data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Delete" href="#"><i
                                                    class="ri-delete-bin-line"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Instagram</th>
                                    <th>Voucher</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>