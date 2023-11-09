<?php include "hedar.php"?>

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header">Calculator</div>
                    <div class="card-body">
                        <form action="web.php" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-3">First Number:</label>
                                <div class="col-md-9">
                                    <input type="number"  value="<?php echo isset($_GET['first_number']) ? $_GET['first_number'] : ' ' ; ?>" name="first_number" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Second Number:</label>
                                <div class="col-md-9">
                                    <input type="number"  value="<?php echo isset($_GET['second_number']) ? $_GET['second_number'] : ' ' ; ?>" name="second_number" class="form-control">
                                </div>
                            </div>

                            <div class=" d-flex justify-content-betwee">
                                <label class="">Your Choice:</label>
                                <div class=" ms-3 d-flex justify-content-end">
                                    <label ><input type="radio" class="btn btn-info ps-2" name="choice" value="+">+</label>
                                    <label ><input type="radio" class="btn btn-info ps-2" name="choice" value="-">-</label>
                                    <label ><input type="radio" class="btn btn-info ps-2" name="choice" value="X">*</label>
                                    <label ><input type="radio" class="btn btn-info ps-2" name="choice" value="/">/</label>
                                    <label ><input type="radio" class="btn btn-info ps-2" name="choice" value="%">%</label>
                                    <label ><input type="radio" class="btn btn-info" name="choice" value="C">c</label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">result:</label>
                                <div class="col-md-9">
                                    <input type="text" value="<?php echo isset($_GET['result']) ? $_GET['result'] : ' ' ; ?>" name="result" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <button class="btn btn-primary" name="calculator_btn" type="submit">calculator_btn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"?>