<?php include "header.php";?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-success">
                        <h4 class="text-center">LOG IN</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-center text-danger">
                            <?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?>
                        </p>
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                                <label class="col-md-3">User Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="user_name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="login_btn" value="Log In">
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>

