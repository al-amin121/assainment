
<?php include "hedar.php"?>
<section class="bg-primary-subtle pt-1">
    <div class="container">
        <marquee scrollamount="10" class="fw-bold text-danger fs-5 mb-0 bg-white"><h4>মৌসুমি বায়ু বিদায় নিচ্ছে, তাপমাত্রা কমবে কবে জানাল আবহাওয়া অধিদপ্তর</h4></marquee>
    </div>
</section>
<section class="py-5 bg-primary-subtle">
    <div class="container"  >
        <div class="row" >
            <?php  foreach ($blogs as $blog) { ?>
                    <div class="col-md-3 mb-5" >
                        <div class="card h-100 shadow mb-3" >
                            <img src="<?php echo $blog['image']; ?>" class="card-img-top shadow" height="200">
                            <div class="card-body d-flex align-items-end flex-column">
                                <h5 class="card-title mb-3 fw-bold "><?php echo $blog['name']; ?></h5>
                                <p class="font-monospace"><?php echo $blog['description']; ?></p>

                                <hr>
                                <a href="web.php?page=detail&&id=<?php echo $blog['id']; ?>" class="btn btn-outline-warning shadow text-black fw-bold  mt-auto">Details</a>
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "footer.php"?>


