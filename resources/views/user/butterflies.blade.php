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


    <!--footer section starts-->
    @include('user.footer');


<!--footer section ends-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="{{asset('js/manyatta.js')}}"></script>



</body>
</html>
