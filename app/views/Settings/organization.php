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
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Employee Name<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="first_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last-name" class="col-sm-2 col-form-label col-form-label-sm">Leave Type<sup>*</sup></label>
                        <div class="col-sm-4">
                            <select name="gender" id="" class="form-control form-control-sm" required>
                                <option value="" disabled >--Type--</option>
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">Start Date <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="date" placeholder="Phone Number" class="form-control form-control-sm" name="phone_number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">End Date <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="date" placeholder="Phone Number" class="form-control form-control-sm" name="phone_number">
                        </div>
                    </div>
                    <hr>
                    <div class="submit">
                        <button class="btn btn-primary" name="add_employee" type="submit" id="add_employee"><i class="fa fa-plus-circle fa-sm"></i> Book Leave</button>
                    </div>

                </div>
            </form>
            <!--END OF FORM-->
        </div>
    </div>
</div>