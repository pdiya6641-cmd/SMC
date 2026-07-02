<?php include("vheader.php");?>
                     <div class="container-fluid">
                        <div class="row">
                            
							<img src="images/snagar.gif" width="100%" height="500px">
							<!--<h1 class="banner_taital">SURENDRANAGAR CITY AS INDIA'S BEST <BR>CITY TO LIVE-IN,IN TERMS OF INFRASTRUCTURE </h1>-->
                        </div>
						
						
						
						<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
</head>
<body>

<div class="slideshow-container">
<?php
		include("connect.php");
		$q="select * from activity_master";
		$res=mysqli_query($cn,$q);
		while($row=mysqli_fetch_array($res))
		{
		?>

<div class="mySlides">
  
  <p class="author"><?php print strtoupper($row['ac_name']);?></p><br>
    <q class="author"><?php print $row['ac_date'];?></q>

  <q><?php print $row['ac_description'];?></q>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<?php
		}
		?>
		

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html> 

						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<div class="row" style="margin-top:25px;">
<div class="col-md-4">
	<img src="images/index1.jpg" height="850px" width="100%">
</div>						
<div class="col-md-8" style="text-align:justify;color:#000;">
<p style="font-size:30px;font-weight:bold;">History</p>
<p style="font-size:22px;font-family:serif;">Surendranagar was under the control of traditional dynasties which were ruling over other regions of the Gujarat state. After the mobilization of the states the now Surendranagar district was called Jhalawad. The present district which is called Surendranagar, was the head quarter of the British political agent. Political agents left from the Wadhwan camp and returned it to the ruler of Wadhwan in the year 1946 A. D. There after it was named Surendranagar again in 1947 as per the name of the past king of Wadhwan, Surendrasinhji. Since 1948, Surendranagar has remained as the main centre of the district. Surendranagar is one of the districts of the Saurashtra sub-state.
Architectural research has been done on a small scale in the district and some places of pre historical habitation are found. In the year 1957 – 58 some equipments of the era after the stone-age are found from Sejakpur in Sayla taluka. This depicts the culture of the era after the stone-age which had the economy, principally, of the hunters and fishers. The equipments used by the people at the start of the mythological era are also found from this district.
It will be very interesting to analyze the rulers’ history of some of the village regions of this district. Surendranagar district was made up of the states and Jagirs like Dhrangadhra, Wadhwan, Lakhtar, Sayla, Chuda, Muli, Bajana, Patadi etc. and the centres like Vanod, Vitthalgarh, Jainabad, Rajpura, Anandpur, Chotila, Bhoika, Jhinjhuwada, Dasada and Raysankali. All these states and Jagirs were included in the earlier Saurashtra state and became the part of the Jhalawad district.
</p>
<p style="font-size:30px;font-weight:bold;">Legends</p>
<p style="font-size:22px;font-family:serif;">Myth of Bhogaavo According to legend, during the siege of Junagadh, Jayasimha Siddharaja fell in love with the queen of Ra’Khenger, Ranakdevi. He attacked Junagadh and killed Ra’Khengar to claim the fort and the queen, but she refused and fled. She escaped from the city towards the River Bhogaavo. After a long chase, she gave up and instead of becoming the queen of Junagadh she sacrificed her life by forming sati on the banks of Bhogaavo River, near the city of Wadhwan. However, before she died she cursed that the river would not flow beyond that spot. There is a temple in honour of Ranakdevi on the banks of the river.
<p>
</div>
                     </div>
					</div>
            
      <!-- banner section end -->
      	   
		
		
		
<?php include("footer.php");?>