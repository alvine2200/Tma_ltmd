i<!DOCTYPE html>
<html lang="en">
<head>

    <base href="/public">

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

            .image-container .individual-images .row .image img{
                width:200px;
                height:200px;
                margin:20px;
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

            .image-container .individual-images{
               display:flex;
               column-width:100%;
               margin:20px;
               border-radius:20px;
               box-shadow:  rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
            }
            .image-container .individual-images .row .image img{
                width:350px;
                height:350px;
                margin:20px;
            }
            .image-container .individual-images .row .image #zoom:hover{
                transform:scale(1.5);
            }


    </style>
</head>
<body>

    @include('user.navbar');

 <div style="padding-top:18rem; padding-bottom:10px;" class="model-container">

        <div class="row">
              <div class="image">
                  <img style="max-width:450px;!important" src="/imagemodels/photos/{{$models->photo}}" class="img-responsive" alt="img">
              </div>
              <div class="appearance">
                <span>
                    <h5 style="color:blue; font-size:50px; font-weight:bold; margin-bottom:20px;">{{$models->fullname}}</h5>
                    <h5> Wt-{{$models->weight}}, Ht-{{$models->height}}, B/C-{{$models->burst_chest}},
                         SH-{{$models->shoe_size}}, HC-{{$models->hair_color}}, H-{{$models->hips}} </h5>
                    <h5> CX: {{$models->complexions}},
                    <h5> category: {{$models->category}}</h5>
                    <h5>Instagram : <a href="#">
                                        <em class="fab fa-instagram-square"></em> {{$models->instagram}}
                                     </a> <br><br>
                        Tiktok: <a href="#">
                                   <em class="fab fa-tiktok"></em> {{$models->tiktok}}
                                </a>
                    </h5>

                    <h5>Experience: {{$models->experience}}</h5>
                    <h5>Book Model: <a href="https://wa.me/254789133541"  class="btn"> <em class="fab fa-whatsapp fa-lg"></em> Whatsapp</a>
                                    <a href="{{url('book_model')}}"  class="btn"> <em class="fab fa-phone fa-lg"></em> Send request</a></h5>
                </span>
            </div>


        </div>


    </div>

    <div class="image-container">

        <div class="individual-images">
            <div class="row">

                 <div class="image">
                    @foreach ($individuals as $individual)

                        <img id="zoom" src="imagemodels/photos/{{ $individual['photo']}}" alt="image" class="img-responsive">

                    @endforeach
                </div>

            </div>
        </div>

    </div>


    @include('user.footer');

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/manyatta.js"></script>
    <script src="js/swiper.js"></script>

</body>
</html>
