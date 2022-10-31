<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
    <link rel="stylesheet" href="event.css">
    <title>Document</title>
</head>
<body>
    <div class="contact-section">

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
<li><a href="#">our services</a></li>
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
<li><a href="#">our service</a></li>
<li><a href="cellgroup.php">cell group</a></li>
<li><a href="gallery.php">gallery</a></li>
<!-- <li><a href="">DONATE</a></li> -->
</ul>

</div>



<!-- mobile nav ending -->
</section>



<div class="eventwrap">

  <div class="eventheader">
    <h1>our service</h1>
    </div>  

<div class="eventflex">
    <!-- card 0 -->
    <div class="eventcontent">
      <h1>DIGGING DEEP</h1>
      <p>Do you want to know more about God? <br>
      join us in church every TUESDAY where we studied the word of God. 
    </p>
    <h2>TIME: <span style="color : green; ">5 : 30PM</span> </h2>
    </div>

<!-- card 1 -->
<div class="eventcontent">
      <h1>FAITH CLINIC</h1>
      <p>Prayer is not the master key but is a way of life <br>
      join us in church every THURSDAY where we cast our burden to the God that answers prayer.
      </p>
      <h2>TIME: <span style="color : green; ">5 : 30PM</span> </h2>
    </div>


    <!-- card 2 -->
<div class="eventcontent">
      <h1>youth service</h1>
      <p>The glory of young men is their strength: and the beauty of old men is the gray head <br>
      join us in church every SECOND sunday of the month
    </p>
    <h2>TIME: <span style="color : green; ">8 : 00AM</span> </h2>
    </div>

<!-- card 3 -->
<div class="eventcontent">
      <h1>thanksgiving service</h1>
      <p>In every thing give thanks: for this is the will of God in Christ Jesus concerning you. <br>
      join us in church every FIRST sunday of the month where we celebrate the God of the  universe
    </p>
    <h2>TIME: <span style="color : green; ">8 : 00AM</span> </h2>
    </div>


</div>

</div>
</section>

    </div>
    </div>

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