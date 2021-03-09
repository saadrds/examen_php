<?php include('templates/head.php'); ?>


    <div class="logo text-center my-5">
        <h1>Gestion des absence</h1>
    </div>

    <?php if(!empty($error)):?>
        <div class="text-center mt-3 pt-3">
            <h6 class="text-danger"><?php echo $error; ?></h6>
        </div>
    <?php endif;?>
    
    <div class="c-login container bg-white p-3 shadow p-3 mb-5 bg-white rounded-lg">

        <div class="row justify-content-center my-5">

        <div class="col-md-5 mr-md-5 text-center pic">
            <img src="img/login.jpg" alt="login image">
        </div>

        <div class="col-md-5 order-first order-md-last mb-5">
            <h2 class="mb-3 font-weight-bold">Login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    <p class="text-danger error"><?php echo $check['email'] ?? ''; ?></p>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <p class="text-danger error"><?php echo $check['password'] ?? ''; ?></p>
                </div>
                <div  class="text-right">
                    <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
                </div>
                
            </form>
        </div>
        </div>


    </div>


<?php include('templates/scripts.php') ?>
