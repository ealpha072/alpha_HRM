<div class="">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h5 class="header"><i class="fa fa-plus-circle fa-sm"></i> Organization Information</h5>
            </div>
        </div>
        <div class="card-body">
            <!--form for admitting new student-->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data" id="add_employee_form">
                <!--personal card info-->
                <div class="form-div personal_info">
                    <div class="form-group row">
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Organization Name<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="first_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Login Username<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="first_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Login Password<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control form-control-sm" name="first_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last-name" class="col-sm-2 col-form-label col-form-label-sm">Organization Address<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="first_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">Organization Email <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="email" placeholder="Email" class="form-control form-control-sm" name="phone_number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">Organization Telephone <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="tel" placeholder="Phone Number" class="form-control form-control-sm" name="phone_number">
                        </div>
                    </div>
                    <hr>
                    <div class="submit">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                            Edit Org Info
                        </button>

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#loginModal">
                            Edit Login Info
                        </button>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Organization Settings</h6>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-sm" value="" required name="Hospital-name">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Address</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control form-control-sm" value="" required name="Hospital-email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="tel" class="form-control form-control-sm" value="" required name="Hospital-phone">
                                                <small id="emailHelp" class="form-text text-muted">Phone number must be 13 digits (+2547XXXXXXXX)</small>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Vision</label>
                                            <div class="col-sm-9">
                                                <textarea cols="" rows="" class="form-control form-control-sm" required name="Hospital-vision"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Mission</label>
                                            <div class="col-sm-9">
                                                <textarea cols="" rows="" class="form-control form-control-sm" required name="Hospital-mission"></textarea>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success btn-sm" name="edit-Hospital-settings">Save</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--modal-->
                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title" id="exampleModalLabel">Login settings</h6>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">New Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control form-control-sm" value="" required name="new-username">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Old Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control form-control-sm" value="" required name="old-password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">New Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control form-control-sm" value="" required name="new-password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="col-sm-3 col-form-label col-form-label-sm">Confirm Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control form-control-sm" value="" required name="confirm-password">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success btn-sm" name="update-logins">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end of modal-->

                </div>
            </form>
            <!--END OF FORM-->
        </div>
    </div>

</div>