
<div class="">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h5 class="header"><i class="fa fa-plus-circle fa-sm"></i> Add new employee</h5>
            </div>
        </div>
        <div class="card-body">
            <!--form for admitting new student-->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data" id="add_employee_form">
                <!--personal card info-->
                <div class="form-div personal_info">
                    <h6>Leave Info</h6>

                    <div class="form-group row">
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Name<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="first_name" required>
                            <small id="" class="form-text text-muted">First name</small>
                        </div>

                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="last_name" required>
                            <small id="emailHelp" class="form-text text-muted">Last name</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last-name" class="col-sm-2 col-form-label col-form-label-sm">Personal Email<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control form-control-sm" name="personal_email">
                        </div>

                        <label for="gender" class="col-sm-2 col-form-label col-form-label-sm">Gender<sup>*</sup></label>
                        <div class="col-sm-4">
                            <select name="gender" id="" class="form-control form-control-sm" required>
                                <option value="" disabled >--Gender--</option>
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">Phone Number <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="tel" placeholder="Phone Number" class="form-control form-control-sm" name="phone_number" required maxlength="13">
                            <small id="emailHelp" class="form-text text-muted">Phone number must be 13 digits (+2547XXXXXXXX)</small>
                        </div>

                        <label for="photo" class="col-sm-2 col-form-label col-form-label-sm">Photo</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" name="photo" value="profile.jpg">
                            <input type="hidden" name="photo_dummy" value="profile.jpg">
                        </div>
                    </div>

                </div>
            </form>
            <!--END OF FORM-->
        </div>
    </div>
</div>