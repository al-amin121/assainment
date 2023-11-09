<?php include "hedar.php"?>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">

                        <div class="card-header fs-5 fw-bolder">Login</div>
                        <div class="card-body">
                            <p class="text-danger text-center"><?php echo isset($_GET['message']) ? $_GET['message'] : ''; ?></p>
                            <form action="web.php" method="POST">
                                <div class="row mb-3 mt-3">
                                    <label class="col-md-3">User Name</label>
                                    <div class="col-md-9">
                                        <input type="text" name="user_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>

                                <div class="mt-5">
                                    <button class="btn btn-primary fs-5 fw-normal" name="login_btn" type="submit"   >Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"?>