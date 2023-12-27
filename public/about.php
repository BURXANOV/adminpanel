<?php require_once './functions/connect.php';?>
<?php 

$row = $pdo->prepare("SELECT * FROM about");
$row->execute();
$about=$row->fetch(PDO::FETCH_ASSOC);?>

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="images/2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-md-6">
      
            <h3 style="color: black"><?php echo $about->filenmae?></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, illum, quasi. Odit velit deserunt eligendi unde, enim. Lorem ipsum dolor sit ametLorem ipsum dolor sit amet.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit ametLorem ipsum dolor sit ametLorem ipsum dolor sit amet!</p>
       
          </div>
        </div>
      </div>
    </div>