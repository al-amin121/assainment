<?php include "hedar.php"?>


    <h1 class="fst-italic text-center mt-5 mb-5 text-black" >
        <u>BLOGS</u>
    </h1>

    <section>
        <div class="container">
            <div class="row ">
                <?php  foreach ($blogs as $blog) { ?>
                    <a href="web.php?page=detail&&id=<?php echo $blog['id']; ?>" class="text-decoration-none">
                        <div class="card mb-3 w-100 shadow" >
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $blog['image']; ?>" class="img-fluid rounded-start ">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body ms-5 mt-3">
                                        <h5 class="card-title fw-bolder mb-3"><?php echo $blog['name']; ?></h5>
                                        <p class="card-text pt-1 fw-lighter"><?php echo $blog['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            </div>
        </div>
    </section>


<?php include "footer.php"?>