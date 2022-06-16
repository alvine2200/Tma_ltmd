<!DOCTYPE html>
<html>
<head>
	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/manyatta.css')}}">
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
            }
            .model-container .row .image > img {
                width: 100%;
            }
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
                    <h5 style="color:blue; font-size:30px; font-weight:bold; margin-bottom:20px;">Physical characteristics</h5>
                    <h5>Name: Alicia Amanda</h5>
                    <h5>Age: 20</h5>
                    <h5>Appearance : Tall dark</h5>
                    <h5>Categories : Casual, Commercial</h5>
                    <h5>Instagram : theodore </h5>
                    <h5>Location: Githurai </h5>
                    <h5>Waist: 20</h5>
                    <h5>Hips: 10</h5>
                    <h5>Burst/Chest: 10</h5>
                    <h5>Heights: 10</h5>
                    <h5>Weight: 10</h5>
                    <h5>Shoe size: 10</h5>
                    <h5>Hair color: blue</h5>
                    <h5>Experience: link</h5>
                </span>
            </div>
        </div>
    </div>


    @include('user.footer');

</body>
</html>
