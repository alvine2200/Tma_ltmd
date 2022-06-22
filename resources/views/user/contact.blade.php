<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link
     rel="stylesheet"
     href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <link   rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/manyatta.css')}}">
    <style>
        select{
            background: #eee;
            border-radius: .5rem;
            padding: 1rem;
            font-size: 1.6rem;
            color: var(--black);
            text-transform: none;
            margin-bottom: 1rem;
            width: 100%;
        }
        .inputBox{
            padding-top: 2rem;
        }
    </style>
</head>
<body>

    @include('user.navbar');

    <section style="padding-top: 17rem;" class="order" id="contact_us">
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
                <span>phone number</span>
                <input type="number" placeholder="Enter your phone number" >
            </div>
            <div class="input">
                <span>address(location) </span>
                <input type="text" placeholder="Enter your address" >
            </div>
            <div class="input">
                <span>address</span>
                <select  name="subject">
                    <option value="">--select option--</option>
                    <option value="Query">Query</option>
                    <option value="Problem Applying">Problem Applying</option>
                    <option value="other">Other option...</option>
                </select>
            </div>


            <div class="input">
                <span>your message</span>
                <textarea name="message" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            </div>
          </div>
          <input type="submit" value="Submit" name="" class="btn">

        </form>
    </section>

    @include('user.footer');

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/manyatta.js"></script>
    <script src="js/swiper.js"></script>

</body>
</html>
