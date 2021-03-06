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
        .model-container{
            display: flex;
            flex-wrap: wrap;
            background-color: rgb(237, 242, 246);
            border-radius: 3px;
            justify-content: center;
            align-items: center;
        }
        .model-container .row{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            margin: 15px;
        }

         h5{
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 350px;
            color: blue;
        }
        .model-container .row .image{
            border-radius: 7px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        .model-container .row .appearance{
            padding-left: 30px;
            margin-left: 50px;
            flex-direction: row;
        }
       .model-container .row .appearance > img{
            display: flex;
            background-color: #f5eeee;
            width: 300px;
            padding: 5px;
            margin: 10px;
            text-align: center;
            line-height: 75px;

        }

        @media(max-width: 445px){
            h5{
                font-size: 14px !important;
            }
            .model-container .row .appearance{
                justify-content: center;
                align-items: center;
                font-size: 12px;
                flex-wrap: wrap;
                display:flex;
                margin-top: 20px;
                padding-top: 20px;
            }
            .model-container .row .image > img {
                width: 100%;
                object-fit: contain;
            }
        }

        
            .image-container{
                justify-content: center;
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                padding-top: 30px;
                margin: 50px;

            }
           .image-container .swiper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 400px;
            height: auto !important;
            overflow: hidden;
            border-radius:10px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            }
            .image-container .swiper .swiper-wrapper .swiper-slide img {
                width: 100%;
                object-fit: contain;

            }


    </style>
</head>
<body>

    @include('user.navbar');

 <div style="padding-top:18rem; padding-bottom:10px;" class="model-container">
           <div class="row">
              <div class="image">
                  <img src="images/model2.jpg" class="img-responsive" alt="img">
              </div>
              <div class="appearance">

                <span>
                    <h5 style="color:blue; font-size:50px; font-weight:bold; margin-bottom:20px;"> Alicia Amanda</h5>
                    <h5> Wt-20, Ht-20, B/C-20, SH-42, HC-blue, H-14 </h5>
                    <h5> CX: brown,
                    <h5> Casual, Commercial</h5>
                    <h5>Instagram : <a href="https://www.instagram.com/manyattafilms/?hl=en">
                                        <i class="fab fa-instagram-square"></i>
                                     </a>
                        Tiktok: <a href="https://www.tiktok.com/discover/kfc-kenya?lang=en">
                                   <i class="fab fa-tiktok"></i>
                                </a>

                    </h5>

                    <h5>Experience: link</h5>
                </span>
            </div>


        </div>


    </div>

    <div class="image-container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <img src="images/model2.jpg" class="img-responsive" alt="img"/>
              </div>
              <div class="swiper-slide">
                <img src="images/model1.jpg" class="img-responsive" alt="img"/>
            </div>
              <div class="swiper-slide">
                <img src="images/model2.jpg" class="img-responsive" alt="img"/>
            </div>

        </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
     </div>

    </div>


    @include('user.footer');

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/manyatta.js"></script>
    <script src="js/swiper.js"></script>

</body>
</html>
