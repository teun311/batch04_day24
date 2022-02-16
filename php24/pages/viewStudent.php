<?php include 'pages/includes/header.php';?>

<section>
    <div class="container">
        <div class="row">
            <?php  foreach ($students as $student ) {?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $student['image']?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h2><?php echo $student['name']?></h2>
                        <p><?php echo $student['email']?></p>
                        <p><?php echo $student['phone']?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success float-right">view</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include 'pages/includes/footer.php';?>
