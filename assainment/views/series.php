<?php include "hedar.php"?>

    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <div class="card">
                        <div class="card-header">My series</div>
                        <div class="card-body">
                            <form action="web.php" method="POST">
                                <div class="row mb-3">
                                    <label class="col-md-3">Stating Number:</label>
                                    <div class="col-md-9">
                                        <input type="number"  value="<?php echo isset($_GET['stating_number']) ? $_GET['stating_number'] : ' ' ; ?>" name="stating_number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Ending Number:</label>
                                    <div class="col-md-9">
                                        <input type="number"  value="<?php echo isset($_GET['ending_number']) ? $_GET['ending_number'] : ' ' ; ?>" name="ending_number" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">result:</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control"><?php echo isset($_GET['result']) ? $_GET['result'] : ' ' ; ?></textarea>

                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <button class="btn btn-primary" name="series_btn" type="submit">Series_btn</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"?>