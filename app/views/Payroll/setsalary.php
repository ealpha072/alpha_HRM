
<div class="">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h5 class="header"><i class="fa fa-plus-circle fa-sm"></i> Add Salary Info</h5>
            </div>
        </div>
        <div class="card-body">
            <!--form for admitting new student-->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data" id="add_employee_form">
                <!--personal card info-->
                <div class="form-div personal_info">
                    <h6>Salary Info</h6>

                    <div class="form-group row">
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Employee Name<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="first_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">Base Salary <sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control-sm" name="phone_number" default="20,000">
                        </div>
                    </div>
                    <hr>
                    <div class="submit">
                        <button class="btn btn-primary" name="add_employee" type="submit" id="add_employee"><i class="fa fa-plus-circle fa-sm"></i> Set Slary</button>
                    </div>

                </div>
            </form>
            <!--END OF FORM-->
        </div>
    </div>
</div>