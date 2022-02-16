<?php include 'pages/includes/header.php';?>

<section class="mt-custom">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Login From</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($message)) {?>
                        <h6 class="text-success text-center"><?php echo $message;}?></h6>
                        <div >
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Passward</label>
                                    <div class="col-md-8">
                                        <input type="password" name="phone" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="loginBtn" value="Login" class="btn btn-outline-success btn-block">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'pages/includes/footer.php';?>

