<?php include "header.php"; ?>
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="<?php echo $software['image']; ?>" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $software['name']; ?></h1>
                    <p>TK. <?php echo $software['price']; ?></p>
                    <p><?php echo $software['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
