
<?php include "hedar.php"?>

<section class="container mt-5 mb-5">
    <div class="row">
       <div class="col-md-6 mx-auto">
           <div class="card">
               <div class="card-header">Full Name Programs</div>
               <div class="card-body">
                   <form action="web.php" method="POST">
                       <div class="row mb-3">
                           <label class="col-md-3">First Name:</label>
                           <div class="col-md-9">
                               <input type="text" name="first_name" class="form-control">
                           </div>
                       </div>
                       <div class="row mb-3">
                           <label class="col-md-3">last Name:</label>
                           <div class="col-md-9">
                               <input type="text" name="last_name" class="form-control">
                           </div>
                       </div>
                       <div class="row mb-3">
                           <label class="col-md-3">Full Name:</label>
                           <div class="col-md-9">
                               <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ' ' ; ?>" name="ful_name" class="form-control">
                           </div>
                       </div>
                       <div class="row mb-3">
                           <button class="btn btn-primary" name="submit_btn" type="submit">Submit</button>
                       </div>
                   </form>
               </div>
           </div>

       </div>
     </div>
</section>

                <!--<section class="py-5 bg-primary-subtle">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-3"></div>-->
<!--            <div class="col-6 shadow bg-white rounded">-->
<!--                <h1 class="text-center fw-bolder mt-3 mb-5 "> <u>Contact US</u></h1>-->
<!--                <div class="mb-3 mt-3 mb-4">-->
<!--                    <label for="exampleFormControlInput1" class="form-label fw-bolder">Name :</label>-->
<!--                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name">-->
<!--                </div>-->
<!--                <div class="mb-3 mt-3 mb-4">-->
<!--                    <label for="exampleFormControlInput1" class="form-label fw-bolder">Email :</label>-->
<!--                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">-->
<!--                </div>-->
<!--                <div class="mb-3 mt-3 mb-4">-->
<!--                    <label for="exampleFormControlInput1" class="form-label fw-bolder">Subject :</label>-->
<!--                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="subject">-->
<!--                </div>-->
<!---->
<!---->
<!--                <div class="mb-3">-->
<!--                    <label for="exampleFormControlTextarea1" class="form-label fw-bolder">Message :</label>-->
<!--                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>-->
<!--                </div>-->
<!--                <div class="mt-4 mb-5">-->
<!--                    <button class="btn btn-primary" type="submit">Submit</button>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-3"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<?php include "footer.php"?>


