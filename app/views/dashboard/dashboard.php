<div class="card">
    <div class="card-header">
        <div class="float-left">
            <h5 class="header">This is the home view</h5>
        </div>
    </div>
    <div class="card-body">
        <h2>This is the view</h2>
        <?php 
            echo  $_SESSION['msg-success']; 
            echo "<br>";
            echo  $_SESSION['id'];
        ?>
    </div>
</div>