<?php include "hedar.php"?>

<section class="py-5 bg-primary-subtle">
    <div class="container">
        <div class="row">
             <div class="col-md-6">
                 <div class="card card-body">
                     <img src="<?php echo $blog['image']; ?>" height="400">
                 </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1 class="mt-3"><?php echo $blog['name']; ?></h1>
                    <hr>
                    <p><?php echo $blog['description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"?>
