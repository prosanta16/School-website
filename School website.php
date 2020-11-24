<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8"/>
		<title>School website</title>
			<script language="javascript" type="text/javascript">
				function clearText(field)
				{
					if (field.defaultValue == field.value) field.value = '';
					else if (field.value == '') field.value = field.defaultValue;
				}
			</script>

			<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
			<link rel="stylesheet" href="css/style.css">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
			<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

				<script type="text/javascript">
						$(window).load(function() {
							$('#slider').nivoSlider({
								effect:'random',
								slices:10,
								animSpeed:600,
								pauseTime:2200,
								startSlide:0, //Set starting Slide (0 index)
								directionNav:false,
								directionNavHide:false, //Only show on hover
								controlNav:false, //1,2,3...
								controlNavThumbs:false, //Use thumbnails for Control Nav
								pauseOnHover:true, //Stop animation while hovering
								manualAdvance:false, //Force manual transitions
								captionOpacity:0.8, //Universal caption opacity
								beforeChange: function(){},
								afterChange: function(){},
								slideshowEnd: function(){} //Triggers after all slides have been shown
							});
						});
				</script>
		
    </head>
	
		 <body>
			<div class="Headersection Templete clear">
				<h2> Pithabhogh D.G.C High School</h2>
			</div>
				<div class="Navigation Templete clear">
					<ul>
						<li><a href="School website.php">Home</a></li>
						<li><a href="About.php">About</a></li>
						<li><a href="Contact.php">Contact</a></li>
						<li>Teacher
							  <ul>
								  <li><a href="">Krishno Roy<a></li>
								  <li><a href="">Amol sikder<a></li>
								  <li><a href="">Poritosh Biswas<a></li>
							  </ul>
						  
						</li>	
			
						
						<li>Batch
							  <ul>
								  <li><a href="">Batch-1997<a></li>
								  <li><a href="">Batch-1998<a></li>
								  <li><a href="">Batch-1999<a></li>
							  </ul>
						</li>
						
						<li><a href="#">Result</a></li>
						<li><a href="#">Syllabus</a></li>
						<li><a href="#">Learning</a></li>
						
					 </ul>	
				  
				</div>
			<div class= "Slidersection Templete clear">
				 <div id="slider">
					<a href="#"><img src="images/slideshow/01.jpg" alt="nature 1" title="Teacher with JSC batch 2016" /></a>
					<a href="#"><img src="images/slideshow/02.jpg" alt="nature 2" title="Teachers" /></a>
					<a href="#"><img src="images/slideshow/03.jpg" alt="nature 3" title="Reunion S.S.C batch 2012-2013" /></a>
					<a href="#"><img src="images/slideshow/04.jpg" alt="nature 4" title="Tour to Bagerhat batch 2012-2013" /></a>
					<a href="#"><img src="images/slideshow/05.jpg" alt="nature 4" title="Tour to Bagerhat batch 2012-2013" /></a>		
				 </div>			
			</div>
				<div class="Contentsection  Templete clear">
					<div class="Maincontent Templete clear">
						<div class="samepost clear">
							
							<p  class="pa">This is my school.I can not forget my school.Because there are so many colors to choose from, tools have been created to make the task of selection much simpler. A color picker allows a user to select a color by clicking on visual range of color to pin-point an exact code. A color chart provides a listing of common colors for quick selection.To use a selected color code within your webpage, you could place the following attribute within a given element to change its background color to red.HTML color codes are used within HTML and CSS to create web design color schemes.They are primarily used by web designers, graphic designers, computer.Let’s be honest. Creating attractive websites for schools isn’t hard. </p>
							<div class ="readmore clear"> <a href="#"> Read more </a></div>
						</div>
					</div>
				</div>
					
					
			<div class = "footer Templete clear">
				<div class = "social">
					<a href="http://www.facebook.com"><img src="Images/facebook.png" alt="Facebook"/></a>
					<a href="http://www.twitter.com"><img src="Images/twitter.png" alt="Twitter"/></a>
					<a href="http://www.google.com"><img src="Images/google.png" alt="Google"/></a>
				</div>
			   <p>&copy; All Rights Reserved</p>
			</div>
			
		</body>
</html>
