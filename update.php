<?php

include "includes/db.php";

$num_per_page = 4;

$qCount = 'SELECT * FROM farmupdate';

$count = mysqli_query($con, $qCount);

$total_page = mysqli_num_rows($count);

$num_of_pages = ceil($total_page/$num_per_page);

if(!isset($_GET['page'])){
    $page = 1;
}else{
    $page = $_GET['page'];
}

$starting_num_per_page = ($page-1)*$num_per_page;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="farmupdate.css">
    <link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.css">
<link rel="stylesheet" href="../fontawesome-free-5.15.3-web/css/all.min.css">
    
    <title>Vinemondfarms : invest and earn huge Roi</title>
</head>

<body>
<!-- order here -->
<div class="wrap-p">

    <div class="header-p">
    <h1>farms update and news</h1>
</div>

<div class="card-flex">
<!-- form -->
<?php

 $query = "SELECT * FROM farmupdate LIMIT " . $starting_num_per_page . ',' . $num_per_page;

 $result = mysqli_query($con, $query);


 while($row = mysqli_fetch_array($result)){
     ?>
<form method="post" ">
<div class="card-col">

      <div class="card-img" >
      <img src="Admin/images/<?= $row['image'] ?>" alt="">
      </div>
      <div class="card-content">

      <h2> <?= $row['content'] ?></h2>

    </div>
</form>  
 </div>
 
<?php
 }
 ?> 

</div>
<div class="paggination">

 <?php

for($page=1;  $page<=$num_of_pages; $page++){

echo '<a href="farmupdate.php?page=' . $page . '">' . $page . '</a>';

}
 ?>
 </div>
 
 
</body>
</html>