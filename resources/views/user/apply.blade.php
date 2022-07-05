<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

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


    <section class="order" id="contact_us">
        <h3 style="padding-top:17rem" class="sub-heading">Join us</h3>
        <h1 class="heading">Complete the form below and submit your request</h1>

        <form action="{{url('application_form')}}" method="post" enctype="multipart/form-data">
            @csrf
            <span style="padding-bottom:30px; " class="heading" >
            <a href="#" class="btn">Section 1, Personal Information</a>
            </span>

           <div style="padding-bottom: 30px;" class="inputBox">
                <div class="input">
                    <span>Full Name</span>
                    <input type="text" name="fullname" placeholder="Enter your names" required >
                </div>
                <div class="input">
                    <span>Nick name</span>
                    <input type="text" name="nickname" placeholder="Enter your nickname" required >
                </div>
                <div class="input">
                    <span>Email Address</span>
                    <input type="text" name="email" placeholder="Enter your email address" required >
                </div>
                <div class="input">
                    <span>Phone Number</span>
                    <input type="number" name="phone" placeholder="Enter your phone number" required>
                </div>
                <div class="input">
                    <span>Date Of Birth</span>
                    <input type="date" name="dob" placeholder="Enter your email address" required >
                </div>
                <div class="input">
                    <span>Location</span>
                    <input type="text" name="location" placeholder="Enter your names" required>
                </div>
                <div class="input">
                    <span>Instagram Handle</span>
                    <input type="text" name="instagram" placeholder="Copy and paste your profile instagram link" >
                </div>

                <div class="input">
                    <span>Gender</span>
                    <select style="width:100% !Important;" name="gender" id="gender">
                        <option>--Select Option--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="other">Others...</option>
                    </select>
                </div>
                <!--
                <div class="input">
                    <span>your address</span>
                    <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <span>your message</span>
                    <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                </div>
                -->
          </div>

          <span style="padding-bottom:70px; " class="heading" >
            <a href="#" class="btn">Section 2, MeasureMents</a>
          </span>


         <div style="padding-bottom:70px; " class="inputBox">
            <div class="input">
                <span>What is your Eye Color?</span>
                <select style="width:100% !Important;" name="eye" id="eye">
                    <option>--Select Option--</option>
                    @foreach ($eyecolors=App\Models\EyeColor::orderby('name','asc')->get() as $eyecolor)
                      <option>{{$eyecolor->name}}</option>  
                    @endforeach
                </select>
            </div>
            <div class="input">
                <span>What is your Hair Color?</span>
                <select style="width:100% !Important;" name="hair" id="hair">
                    <option>--Select Option--</option>
                    @foreach ($hairs=App\Models\HairColor::orderby('name','asc')->get() as $hair)
                        <option>{{$hair->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input">
                <span>Complexion</span>
                <select style="width:100% !Important;" name="complexion" id="complexion">
                    <option>--Select Option--</option>
                    @foreach ($complexions=App\Models\Complexion::orderby('name','asc')->get() as $complexion)
                        <option>{{$complexion->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input">
                <span>What is your Shoe Size?</span>
                <select style="width:100% !Important;" name="shoe" id="shoe">
                    <option>--Select Option--</option>
                    @foreach ($shoes=App\Models\ShoeSize::orderby('name','asc')->get() as $shoe)
                        <option>{{$shoe->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="input">
                <span>Hair Length (Where does it reach e.g on the back, neck, shoulder, etc.)</span>
                <input type="text" name="hairlength" placeholder="what's your hair length" required>
            </div>
            <div class="input">
                <span>Hips (Inches)</span>
                <input type="number" name="hips" placeholder="what's your hip size" required >
            </div>
            <div class="input">
                <span>Waist (Inches) Ladies measure high waist</span>
                <input type="number" name="waist" placeholder="Enter your waist length" required>
            </div>
            <div class="input">
                <span>Burst/Chest (Inches)</span>
                <input type="number" name="burst" required placeholder="Enter here ...." >
            </div>
            <div class="input">
                <span>Height</span>
                <input type="number" name="height" required placeholder="Enter here ...." >
            </div>
            <div class="input">
                <span>When last did you take measurements?</span>
                <select style="width:100% !Important;" name="measurement_time" id="shoe">
                    <option>--Select Option--</option>
                    @foreach ($times=App\Models\Time_Measurement::orderby('name','asc')->get() as $time)
                        <option>{{$time->name}}</option>
                    @endforeach
                </select>
            </div>
         </div>


            <span style="padding-bottom:30px; " class="heading" >
                <a href="#" class="btn">Section 3, Photos</a>
            </span>

         <div style="padding-bottom:70px; " class="inputBox">
                <div class="input">
                    <span>Upload a clear headshot<br>
                         without makeup</span>
                    <input type="file" name="headshot" required >
                    <img src="images/model2.jpg" style="width: 150px; display:flex; flex-wrap: wrap; padding:20px; height:150px;!Important"class="img-responsive" alt="img">
                </div>
                <div class="input">
                    <span>Upload a clear full body shot facing forward<br>
                    Wear fitting outfit(Pants and Top)
                    </span>
                    <input type="file" name="fullbody" required >
                    <img src="images/model2.jpg"  style="width: 150px; display:flex; flex-wrap: wrap; padding:20px; height:150px;!Important"class="img-responsive" alt="img">
                </div>
                <div class="input">
                    <span>Upload a clear full body shot facing sideways<br>
                    Wear fitting outfit(Pants and Top)
                    </span>
                    <input type="file" name="sideway" required >
                    <img src="images/model2.jpg" style="width: 150px; display:flex; flex-wrap: wrap; padding:20px; height:150px;!Important"class="img-responsive" alt="img">
                </div>
          </div>


          <span style="padding-bottom:30px; " class="heading" >
            <a href="#" class="btn">Section 4, Your Story</a>
          </span>

          <div style="padding-bottom:70px; " class="inputBox">

            <div class="input">
                <span>What Modelling experience do you have?</span>
                <input type="text" name="experience" placeholder="Tell us about your journey...." required>
            </div>

            <div class="input">
                <span>What are your hobbies?</span>
                <input type="text" name="hobbies" placeholder="Tell us about your hobbies...." required>
            </div>
            <div class="input">
                <span>Why do you want to venture into modelling?</span>
                <input type="text" name="venture" placeholder="Express yourself...." required>
            </div>
            <div class="input">
                <span>What's your main goal as a model?</span>
                <input type="text" name="goal" placeholder="Be clear and Specific...." required>
            </div>

            <div class="input">
                <span>What are you passionate about?</span>
                <input type="text" name="passion" placeholder="Tell us about your passion...." required>
            </div>
            <div class="input">
                <span>What's the longest Photo shoot you've done?</span>
                <input type="text" name="longest" placeholder="Type here..." required>
            </div>
            <div class="input">
                <span>Have you done professional shoot before?</span>
                <select name="professional" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Have you done casual shoot before?</span>
                <select  name="casual" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Do you work out regularly?</span>
                <select  name="workout" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Would you be open to enroll in a fitness program?</span>
                <select  name="fitness" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Would you be open to nude modelling?</span>
                <select  name="nude" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="semi">Semi</option>
                    <option value="implied">Implied</option>
                    <option value="full">Full</option>
                    <option value="no">No</option>
               </select>
               <img src="images/model2.jpg" style="width: 150px; display:flex; flex-wrap: wrap; padding:20px; height:150px;!Important"class="img-responsive" alt="img">
            </div>
            <div class="input">
                <span>Would you be open to swimsuit/lingerie modelling and why?</span>
                <input type="text" name="swimsuit" placeholder="Express yourself...." required>
                <img src="images/model2.jpg" style="width: 150px; display:flex; flex-wrap: wrap; padding:20px; height:150px;!Important"class="img-responsive" alt="img">
            </div>
            <div class="input">
                <span>Where do you see yourself in 5 years?</span>
                <textarea name="fiveyears" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Who is your favourite model and why?</span>
                <textarea name="favourite" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What are the best 4 physical features(physique) and why?</span>
                <textarea name="physique" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Explain reasons for the above response?</span>
                <textarea name="response" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What can you not do in modelling and why?</span>
                <textarea name="activities" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How do you prepare for photo shoot?</span>
                <textarea name="prepare" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How do you handle a situation where director does'nt direct well?</span>
                <textarea name="director" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What's the hardest photo shoot you've done?</span>
                <textarea name="hardest_shoot" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What would make you give up on modelling?</span>
                <textarea name="give_up" placeholder="Express yourself" required cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Describe your shoot experience?</span>
                <textarea name="describe_shoot" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Tell us about yourself</span>
                <textarea name="about_yourself" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What's your greatest weakness as a person, why?</span>
                <textarea name="weakness" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How do you work to overcome your weakness?</span>
                <textarea name="overcome" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How Comfortable are you showing your skin and why?</span>
                <textarea name="skin_show" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What are your 4 best personality trait?</span>
                <textarea name="personalities" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How well do you communicate with others?</span>
                <textarea name="communication" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How would you deal with an arrogant client?</span>
                <textarea name="arrogancy" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Do you have any experience with critism, How do you handle it?</span>
                <textarea name="critism" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How would you deal with photographers making bad comments about you during photoshoot?</span>
                <textarea name="comments" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Why do you want to join TMA?</span>
                <textarea name="why" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What is unique and special about you?</span>
                <textarea name="unique" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What makes you best of the best?</span>
                <textarea name="speciality" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>

            <div class="input">
                <span>If yes, name the Agency?</span>
                <input type="text" name="name_of_agency" placeholder="Type here..." required>
            </div>
            <div class="input">
                <span>Do you have any piercing?</span>
                <select  name="piercing" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="Yes, Ears">Yes, Ears</option>
                    <option value="yes, nose">Yes, Nose</option>
                    <option value="yes, belly button">Yes, Belly Button</option>
                    <option value="yes, face">Yes, Face</option>
                    <option value="yes, nipple">Yes, Nipple</option>
                    <option value="yes, many">More than one</option>
                    <option value="no, none">None</option>
               </select>
            </div>
            <div class="input">
                <span>Do you have any Tatoos?</span>
                <select  name="tatoos" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Do you have any scars?</span>
                <select  name="scars" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Have you had any enhancement surgery?</span>
                <select  name="enhancement" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Are you open to have a manager?</span>
                <select  name="manager" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Are you work?</span>
                <select  name="work" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Are you studying?</span>
                <select  name="studying" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Whats your weekly schedule like?</span>
                <select  name="schedule" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="free alldays">Free All Days</option>
                    <option value="free weekdys">Free WeekDays</option>
                    <option value="free weekends">Free weekends</option>
                    <option value="none">none</option>
               </select>
            </div>
            <div class="input">
                <span>Are you available on short notice?</span>
                <select  name="availability" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Are you prepared to travel to modelling assignments?</span>
                <select  name="travelling" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Are you intrested in acting?</span>
                <select  name="acting" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Have you done any modelling training?</span>
                <select  name="training" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Are you in a relationship or dating someone at TMA?</span>
                <select  name="relationship" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes, im dating stuff at TMA">Yes, i'm dating staff at TMA</option>
                    <option value="yes, im dating a model at TMA">Yes, i'm dating a model at TMA</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>How active are you on Instagram?</span>
                <select  name="active" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="Daily">Daily</option>
                    <option value="Once a week">Once a week</option>
                    <option value="thrice a week">Thrice a week</option>
                    <option value="once a month">Once a month</option>
                    <option value="twice a month">Twice a month</option>
                    <option value="no, none">None</option>
               </select>
            </div>
            <div class="input">
                <span>How active are you on whatsapp?</span>
                <select  name="whatsapp" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="Daily">Daily</option>
                    <option value="Once a week">Once a week</option>
                    <option value="thrice a week">Thrice a week</option>
                    <option value="once a month">Once a month</option>
                    <option value="twice a month">Twice a month</option>
                    <option value="no, none">None</option>
               </select>
            </div>
            <div class="input">
                <span>How do you rate your confidence?</span>
                <select  name="confidence" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
               </select>
            </div>
            <div class="input">
                <span>Are you registered with any other modelling agency?</span>
                <select  name="registered" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>




          </div>


          <span style="padding-bottom:30px; " class="heading" >
            <a href="#" class="btn">Section 5, Acceptance & Review</a>
          </span>

         <div style="padding-bottom:70px; " class="inputBox">
            <div class="input">
                <span>Will you manage to visit agency for review and<br> orientation for the first 2 weeks if accepted?</span>
                <select  name="review" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Will you manage to pay agency fee of 1500/-  within first week if accepted?</span>
                <select  name="fee" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>Will you manage to commit to a contract of 1 year if accepted?</span>
                <select  name="contract" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
               </select>
            </div>
            <div class="input">
                <span>I have read and accept application process and agency terms?</span>
                <select  name="terms" style="width:100%">
                    <option value="">--select option--</option>
                    <option value="yes">Yes</option>
               </select>
            </div>
         </div>


          <input type="submit" value="Submit" name="" class="btn">

        </form>
        </section>

    @include('user.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if(session()->has('success'))
        <script>
            swal("Application submitted successfully","Done","success");
        </script>
        @endif

    <script src="js/manyatta.js"></script>
    <script src="js/swiper.js"></script>

</body>
</html>
