<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="css/manyatta.css">
   <style>

    .row{
        display: flex !important;
        width: 100% !important;
        justify-content: center !important;
        align-items: center !important
    }
    .width{
            margin-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
            width: 50%;
            justify-content: center;
            align-items: center;
            height: auto !important;
            overflow: hidden;
            border-radius:10px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

    }
    .width span{
        padding:30px;
        font-size:16px;
        font-weight:bold;


    }

    .width p{
        font-size:16px;
        font-weight:bold;
    }


    @media screen and (max-width: 600px) {
        .row{
            margin-bottom:30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: auto !important;
            overflow: hidden;
            border-radius:10px;
            box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
        .width span{
        padding:30px;
        font-size:14px;
        font-weight:bold;

         }

}
   </style>

</head>

<body>
    @include('user.navbar');

        <div style="padding-top:20rem;" class="flex-container">
            <div class="row">
                @foreach ($models as $model)
                     <a href="{{ url('individual',$model->id)}}"><div class="image">
                            <img src="imagemodels/photos/{{ $model->photo}}" class="img-responsive" alt="img">
                        <div class="description">
                            <span>
                                <h3 style="font-size:20px !Important">{{$model->fullname}}</h3>
                            </span>

                            <h4 style="font-size:13px !Important">{{$model->category}}</h4>
                            </div>
                        </div>
                        </a>
                @endforeach

            </div>

        </div>

        <section class="table">

            <h3 style="margin-bottom: 30px;" class="sub-heading">Butterflies Stats</h3>

            <div class="pictures">
              <div class="row">
                <div class="column width">
                    <span> Followers </span>
                    <p style="font-weight:bold;">{{$data->followers ?? '0'}}</p>
                </div>
                <div class="column width">
                    <span> Likes </span>
                    <p style="font-weight:bold;">{{$data->likes ?? '0'}}</p>
                </div>
                <div class="column width">
                    <span>Posts </span>
                    <p style="font-weight:bold;">{{$data->posts ?? '0'}}</p>
                </div>
                <div class="column width">
                    <span> Age Range</span>
                    <p style="font-weight:bold;">{{$data->age_range ?? '0'}}</p>
                </div>

              </div>
           </div>



        </section>



    <!--footer section starts-->
    @include('user.footer');


<!--footer section ends-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('js/manyatta.js')}}"></script>



</body>
</html>
