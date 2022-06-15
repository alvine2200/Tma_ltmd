<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/manyatta.css')}}">

</head>
<body>
 <!--header starts-->

	@include('user.navbar');

 <!--header ends-->

 <<!--home section starts-->
<section class="home" id="home">
	<div class=" swiper mySwipper home-slider ">
		<div class="swiper-wrapper wrapper">
			<div class="swiper-slide slide ">
				<div class="content">
					<span>Fashion And Modelling</span>
					<h3>Manyatta Agency</h3>
					<p> Welcome To Manyatta Agency, a home to Fashion, Modelling and Videography.  <p>
					<a href="#" class="btn">Contact Us</a>
				</div>
				<div class="image">
					<img src="images/model2.jpg" alt="image">
				</div>
			</div>

			</div>
		    <div class="swiper-pagination"></div>

	</div>

</section>
 <!--home section ends-->

 <!--dishes section begins-->
<section class="dishes" id="models">

	<h3 class="sub-heading">our models</h3>
	<h1 class="heading">popular models</h1>

    <div  class="flex-container">
        <div class="row">
            <div class="image">
                <img src="images/model2.jpg" class="img-responsive" alt="img">
               <div class="description">
                  <span>
                     <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                  </span>

                   <h4 style="font-size:13px !Important">Commercial Model</h4>
                </div>
            </div>
            <div class="image">
                <img src="images/model2.jpg" class="img-responsive" alt="img">
               <div class="description">
                  <span>
                     <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                  </span>

                   <h4 style="font-size:13px !Important">Commercial Model</h4>
                </div>
            </div>
            <div class="image">
                <img src="images/model2.jpg" class="img-responsive" alt="img">
               <div class="description">
                  <span>
                     <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                  </span>

                   <h4 style="font-size:13px !Important">Commercial Model</h4>
                </div>
            </div>
            <div class="image">
                <img src="images/model2.jpg" class="img-responsive" alt="img">
               <div class="description">
                  <span>
                     <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                  </span>

                   <h4 style="font-size:13px !Important">Commercial Model</h4>
                </div>
            </div>
            <div class="image">
                <img src="images/model2.jpg" class="img-responsive" alt="img">
               <div class="description">
                  <span>
                     <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                  </span>

                   <h4 style="font-size:13px !Important">Commercial Model</h4>
                </div>
            </div>
            <div class="image">
                <img src="images/model2.jpg" class="img-responsive" alt="img">
               <div class="description">
                  <span>
                     <h3 style="font-size:20px !Important">Aleisha Amanda</h3>
                  </span>

                   <h4 style="font-size:13px !Important">Commercial Model</h4>
                </div>
            </div>


        </div>
    </div>



</section>

 <!--dishes section ends-->

  <!--about section starts-->
<section class="about" id="about">

	<h3 class="sub-heading">about us</h3>
	<h1 class="heading">why choose us</h1>

	<div class="row">

		<div class="image">
			<img style="border-radius: 5px;" src="{{asset('images/model1.jpg')}}" alt="image">
		</div>

			<div class="content">
				<h3>Best Modelling agency in the city</h3>
				<p>Here at Manyatta we identify talents, nurture them with the best skills interms of fashion, modelling and life skills in general. we work and develop our models from scratch to sky </p>
				<p>we're so determined with our team to achieve the great from this fiels. welcome all </p>

			 <div class="icons-container">
				<div class="icons">
					<i class="fas fa-shipping-fast"></i>
					<span>Try us Today</span>
			     </div>

				<div class="icons">
					<i class="fas fa-dollar-sign"></i>
					<span>View Models</span>
				</div>

				<div class="icons">
					<i class="fas fa-headset"></i>
					<span>24/7 services</span>
				</div>
				<a href="#" class="btn">Contact us</a>
			 </div>
		  </div>
	</div>
</section>
 <!--about section ends-->

 <!--menu section starts-->

<!--review section ends-->


<!--order section starts-->
<section class="order" id="contact_us">
<h3 class="sub-heading">Contact us</h3>
<h1 class="heading">contact us today to get intouch with our models</h1>

<form action="" method="post">
    @csrf
   <div class="inputBox">
	<div class="input">
		<span>name</span>
		<input type="text" placeholder="Enter your name" >
	</div>
	<div class="input">
		<span>number</span>
		<input type="number" placeholder="Enter your number" >
	</div>


	<div class="input">
		<span>your address</span>
		<textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
	</div>
	<div class="input">
		<span>your message</span>
		<textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
	</div>
  </div>
  <input type="submit" value="Submit" name="" class="btn">

</form>
</section>
<!--order section ends-->

<!--footer section starts-->
 @include('user.footer');

<!--footer section ends-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('js/manyatta.js')}}"></script>
</body>
</html>
