<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="cellgroup.css">
    <title>Document</title>
</head>
<body>
    
   

    <section>
<div class="nav">
<div class="navflex">

    <div class="logo">
        <a href="index.php"><img src="image/logo.png" alt=""></a> 
    </div>


<ul>
<li class="active"><a href="index.php">home</a></li>
<li><a href="contactus.php">contact us</a></li>
<li><a href="prayerrequest.php">prayer request</a></li>
<li><a href="event.php">our service</a></li>
<li><a href="cellgroup.php">cell group</a></li>
<li><a href="gallery.php">gallery</a></li>
<!-- <li><a href=""><button style="background: blue;
text-align: center;
cursor: pointer;
padding: 10px;
">DONATE</button></a> </li> -->
</ul>
<!-- toggle -->
<div class="icon" id="hamburg"><i class="fas fa-bars"></i>
</div>
<!-- toggle end -->
</div>
</div>
 <!-- mobile nav -->
 <div class="mobilenav"  style="display:none;">

<ul id="items">
<li><a href="index.php">home</a></li>
<li><a href="contactus.php">contact us</a></li>
<li><a href="prayerrequest.php">prayer request</a></li>
<li><a href="event.php">our service</a></li>
<li><a href="cellgroup.php">cell group</a></li>
<li><a href="gallery.php">gallery</a></li>
<!-- <li><a href="">DONATE</a></li> -->
</ul>
</div>
<!-- mobile nav ending -->
</section>

 <div class="contact-section">

<section>
<!--table section-->
<h1>
    cell/family group
</h1>

<p class="cp">

Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nesciunt distinctio harum quia doloremque atque veniam quasi accusamus sapiente veritatis placeat tempora dolor fuga illum libero recusandae ipsa, delectus voluptatem dicta quis cum omnis porro dignissimos? Odit consequatur perferendis, magnam doloribus atque velit commodi laudantium.
</p>

<!-- list of cel group -->

<h2 style="color:green;">
•	CELL GROUP LIST
</h2>

<h3 >
  The following list below are the cell group we have:  
</h3><br>

<p>
    <ul style="list-style: none;">
<li>[1] Cell group
</li><br>
<li>[2] Ramah group  </li><br>
<li>[3] Royal Priesthood group</li><br>
<li>[4] Zion Group</li><br>
<li>[5] Agape Group</li><br>
<li>[5] Charis Group</li><br>
</ul>
</p>

<!-- cell group  -->
<div class="cell">
<h2>BETHEL CELL</h2>
<p>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum quas a repellendus accusantium ducimus iure rerum praesentium ullam cumque molestiae. Aut perspiciatis neque possimus quia, accusantium ipsam, vitae placeat laudantium mollitia deserunt, facere esse. Neque itaque accusantium minima repellendus labore officiis consectetur, assumenda et earum. Error asperiores molestiae dignissimos maxime autem aliquid sapiente nulla dolores, officiis, nostrum amet, nobis  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos, quasi.
</p>

<div class="cell-img">
    <img src="image/youth.jpg" alt="">
</div>
</div>
<!-- cell group end -->

<!-- cell group  -->
<div class="cell">
<h2>BETHEL CELL</h2>
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex modi facilis commodi libero ea velit molestiae inventore odio aliquid veritatis consectetur, rerum vero asperiores tenetur rem placeat aperiam repudiandae? Error, aliquam. Sint corrupti enim, id accusamus quas minus iure laboriosam quaerat alias unde fuga ex, assumenda, repellat deserunt! Quisquam recusandae, dolore sunt iusto in quo distinctio impedit corrupti exercitationem porro expedita libero corporis tenetur nobis repudiandae ex hic! Aspernatur, laboriosam?
</p>

<div class="cell-img">
    <img src="image/youth.jpg" alt="">
</div>
</div>
<!-- cell group end -->


</div>
</section>
    <script>
// top menu responsiveness

const toggl = document.querySelector('#hamburg');

let ul = document.querySelector('.mobilenav');

toggl.addEventListener('click', blockItems);

function blockItems(){
if(ul.style.display == "none"){

ul.style.display = "block";

}else{

    ul.style.display ="none";
    
}

};


    </script>
</body>
</html>