<?php
require_once __DIR__ . "../../../public/assets/header.php";  // Include header if exists
?>

<div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-4">
            <h3 class="text-center">Login</h3>
            <form action="../config/formsprocess.php" method="post">
                <div class="card-body">
                    <div class="form-group input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    </div>
                        <input type="text" class="form-control" placeholder="Enter username" name="username" required value="maitri2025">
                    </div>

                    <div class="form-group input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                        <!--<label for="password">Password</label>-->
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required value="Ealpha072@">
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success" name="login" id="loginbtn"><i class="fa fa-sign-in"></i> <span>Login</span>
                        </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>