<div class="">
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <h5 class="header"><i class="fa fa-plus-circle fa-sm"></i> Add New Leave Type</h5>
            </div>
        </div>
        <div class="card-body">
            <?php
                if (isset($_SESSION['msg-success'])) {
                    echo
                    "<div class='alert alert-success' role='alert'>";
                    echo $_SESSION['msg-success'];
                    echo "</div>";
                    unset($_SESSION['msg-success']);
                }

                if (isset($_SESSION['msg-errors'])) {
                    echo
                    "<div class='alert alert-danger' role='alert'>
                                <ul>";
                    foreach ($_SESSION['msg-errors'] as $error) {
                        echo "<li>" . htmlspecialchars($error) . "</li>";
                    }
                    echo "</ul></div>";
                    unset($_SESSION['msg-errors']);
                }
            ?>

            <!--form for admitting new student-->
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data" id="add_employee_form">
                <!--personal card info-->
                <div class="form-div personal_info">
                    <div class="form-group row">
                        <label for="first-name" class="col-sm-2 col-form-label col-form-label-sm">Leave Name<sup>*</sup></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm" name="leave_name" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone-number" class="col-sm-2 col-form-label col-form-label-sm">Max Number of days</label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control form-control-sm" name="leave_days">
                        </div>
                    </div>
                    <hr>
                    <div class="submit">
                        <button class="btn btn-primary" name="add_leave_type" type="submit" id="add_employee"><i class="fa fa-plus-circle fa-sm"></i> Add Leave</button>
                    </div>

                </div>
            </form>
            <!--END OF FORM-->
        </div>
    </div>
</div>