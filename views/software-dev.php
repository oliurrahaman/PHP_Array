<?php include "header.php"; ?>
<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <?php foreach ($softwares as $software) { ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $software['image']; ?>" alt="" height="320">
                        <div class="card-body">
                            <h4><?php echo $software['name']; ?></h4>
                            <h6><?php echo $software['price']; ?></h6>
                            <hr/>
                            <a href="action.php?page=detail&&id=<?php echo $software['id']; ?>" class="btn btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
