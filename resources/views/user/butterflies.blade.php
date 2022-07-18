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
    .column {
    float: left;
    width: 50%;
    height: 50px;
    border: 1px solid black;
    
    }
    .column p{
        margin-left:30px;
        font-size: 16px;
       
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    @media screen and (max-width: 600px) {
     .column {
    width: 50%;
    
   }
     .column p{
        margin-left:30px;
        font-size: 16px;
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
            
           <div class="summary">
                <div class="row">   
                    <div class="column">
                        <p>Followers</p>
                    </div>
                    <div class="column">
                        <p style="font-weight:bold;">{{$data->followers}}</p>
                    </div>
                    <div class="column">
                        <p>Likes</p>
                    </div>
                    <div class="column">
                        <p style="font-weight:bold;">{{$data->likes}}</p>
                    </div>
                    <div class="column">
                        <p>Posts </p>
                    </div>
                    <div class="column">
                        <p style="font-weight:bold;">{{$data->posts}}</p>
                    </div>
                    <div class="column">
                        <p>Age Range</p>
                    </div>
                    <div class="column">
                        <p style="font-weight:bold;">{{$data->age_range}}</p>
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
