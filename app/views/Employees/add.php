<div class="">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h5 class="header"><i class="fa fa-plus-circle fa-sm"></i> Add new employee</h5>
            </div>
        </div>
        <div class="card-body">
            <!--form for admitting new student-->
            <form action="" method="POST" enctype="multipart/form-data" id="add_employee_form">
                <!--personal card info-->
                <div class="form-div personal_info">

                    <h6>Personal Info</h6>

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
                            <input type="tel" placeholder="Phone Number" class="form-control form-control-sm" name="phone-number" required maxlength="13">
                            <small id="emailHelp" class="form-text text-muted">Phone number must be 13 digits (+2547XXXXXXXX)</small>
                        </div>

                        <label for="photo" class="col-sm-2 col-form-label col-form-label-sm">Photo</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" name="photo">
                        </div>

                        
                    </div>

                </div>
                <!-- END OF CARD-->

                <!--conatct info card-->
                <div class="form-div work_info">

                    <h6>Work Information</h6>
                    <div class="form-group row">

                        <label for="parent-name" class="col-sm-2 col-form-label col-form-label-sm">Employee ID<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="employee_id" required>
                        </div>

                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Employee Type <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="employee_type" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">Personal Email<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control form-control-sm" name="personal_email" required>
                        </div>

                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Employee Level <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="employee_level" required="">
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="last-name" class="col-sm-2 col-form-label col-form-label-sm">Date of Joining</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control form-control-sm" name="date_of_joining">
                        </div>

                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Department <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="department" required>
                        </div>

                    </div>
                    <hr>
                    <div class="submit">
                        <button class="btn btn-primary" name="add_employee" type="submit" id="add_employee"><i class="fa fa-plus-circle fa-sm"></i> Add Employee</button>
                    </div>
                </div>
            </form>
            <!--END OF FORM-->
        </div>
    </div>
</div>