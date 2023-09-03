<?php include "header.php";?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-success">
                        <h4 class="text-center ">Prime Number</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="row mb-3">
                               <label class="col-md-3"> First Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="first_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"> Last Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="last_number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>


                                <div class="col-md-9">
                                    <textarea class="form-control" cols="30" rows="5"><?php echo isset($_GET['result'])?$_GET['result']: '' ?></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"> </label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" name="btn_prime" value="Get Prime Series">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<?php include "footer.php";?>
