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

<style>

</style>

<body>
    @include('user.navbar')

    <section  style="padding-top:18rem; padding-bottom:3rem;" class="order" id="contact_us">
        <h3 class="sub-heading">Book Model</h3>
        <h1 class="heading">contact us today to get the best services</h1>

        <form action="{{url('post_book')}}" method="post">
            @csrf
           <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" name="name" required placeholder="Enter your name" >
            </div>
            <div class="input">
                <span>Model's name</span>
                <input type="text" name="models_name" value="" required placeholder="Enter your name" >
            </div>
            <div class="input">
                <span>phone number</span>
                <input type="number" name="phone" required placeholder="Enter your phone number" >
            </div>
            <div class="input">
                <span>Where </span>
                <input type="text" name="where" required placeholder="Enter the location where the model is needed" >
            </div>
            <div class="input">
                <span>When </span>
                <input type="date" name="when" required placeholder="Enter the date when the model is needed" >
            </div>
            <div class="input">
                <span>Budget </span>
                <input type="number" name="budget" required placeholder="Whats the estimated budget for the activity">
            </div>

            <div class="input">
                <span>Category</span>
                <select  name="category">
                    <option value="">--select option--</option>
                    <option value="casual">casual shoot</option>
                    <option value="professional">professional shoot</option>
                    <option value="fashion">fashion </option>
                    <option value="swimsuit-lingerie">swimsuit-lingerie</option>
                    <option value="fitness">fitness</option>
                    <option value="acting">Acting</option>
                    <option value="video shoot">Video shoot</option>
                    <option value="other">Other option...</option>
                </select>
            </div>

            <div class="input">
                <span>Purpose for booking</span>
                <input name="purpose" required placeholder="For what purpose are you booking this model" >
            </div>
            
          </div>
          <input type="submit" value="Submit"  name="booking-submit" class="btn">

        </form>
    </section>

    @include('user.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if(session()->has('success'))
        <script>
            swal("Booking is a sucess, wait for Response","Done","success");
        </script>
        @endif

</body>
</html>
