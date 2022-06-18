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

        <form action="#" method="post">
            @csrf
            <span style="padding-bottom:30px; " class="heading" >
            <a href="#" class="btn">Section 1, Personal Information</a>
            </span>

           <div style="padding-bottom: 30px;" class="inputBox">
                <div class="input">
                    <span>Full Name</span>
                    <input type="text" name="fullnames" placeholder="Enter your names" required >
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
                    <option value="Male">blue</option>
                    <option value="Female">grey</option>
                    <option value="other">grey-blue...</option>
                </select>
            </div>
            <div class="input">
                <span>What is your Hair Color?</span>
                <select style="width:100% !Important;" name="hair" id="hair">
                    <option>--Select Option--</option>
                    <option value="Male">blue</option>
                    <option value="Female">grey</option>
                    <option value="other">grey-blue...</option>
                </select>
            </div>
            <div class="input">
                <span>Complexion</span>
                <select style="width:100% !Important;" name="complexion" id="complexion">
                    <option>--Select Option--</option>
                    <option value="Male">Very dark</option>
                    <option value="Female">dark</option>
                    <option value="other">Chocolate</option>
                </select>
            </div>
            <div class="input">
                <span>What is your Shoe Size?</span>
                <select style="width:100% !Important;" name="shoe" id="shoe">
                    <option>--Select Option--</option>
                    <option value="Male">20</option>
                    <option value="Female">30</option>
                    <option value="other">50</option>
                </select>
            </div>
            <div class="input">
                <span>Hair Length</span>
                <input type="text" name="hair" placeholder="what's your hair length" required>
            </div>
            <div class="input">
                <span>Hips (Inches)</span>
                <input type="number" name="hips" placeholder="what's your email address" required >
            </div>
            <div class="input">
                <span>Waist (Inches) Ladies measure high waist</span>
                <input type="number" name="waist" placeholder="Enter your waist length" required>
            </div>
            <div class="input">
                <span>Burst/Chest (Inches)</span>
                <input type="text" name="burst" required placeholder="Enter here ...." >
            </div>
            <div class="input">
                <span>Height</span>
                <input type="text" name="height" required placeholder="Enter here ...." >
            </div>
            <div class="input">
                <span>When last did you take measurements?</span>
                <select style="width:100% !Important;" name="shoe" id="shoe">
                    <option>--Select Option--</option>
                    <option value="Male">This Week</option>
                    <option value="Female">This Month</option>
                    <option value="other">This Year</option>
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
                    <input type="file" name="headshot" required>
                </div>
                <div class="input">
                    <span>Upload a clear full body shot facing forward<br>
                    Wear fitting outfit(Pants and Top)
                    </span>
                    <input type="file" name="fullbody" required>
                </div>
                <div class="input">
                    <span>Upload a clear full body shot facing sideways<br>
                    Wear fitting outfit(Pants and Top)
                    </span>
                    <input type="file" name="fullbody" required>
                </div>
          </div>


          <span style="padding-bottom:30px; " class="heading" >
            <a href="#" class="btn">Section 4, Your Story</a>                
          </span>

          <div style="padding-bottom:70px; " class="inputBox">
            
            <div class="input">
                <span>Any Modelling experience</span>
                <input type="text" name="experience" placeholder="Tell us about your journey...." required>
            </div>
            
            <div class="input">
                <span>What are your hobbies?</span>
                <input type="text" name="hobby" placeholder="Tell us about your hobbies...." required>
            </div>
            <div class="input">
                <span>Why do you want to venture into modelling?</span>
                <input type="text" name="why" placeholder="Express yourself...." required>
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
                <span>Where do you see yourself in 5 years?</span>
                <input type="text" name="vision" placeholder="Long Text, Be expressive...." required>
            </div>
            <div class="input">
                <span>Who is your favourite model and why?</span>
                <input type="text" name="favourite" placeholder=" Be expressive...." required>
            </div>
            
            <div class="input">
                <span>Whats your longest Photo shoot you've done?</span>
                <input type="text" name="time" placeholder="Type here..." required>
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
                <span>How do you prepare for photo shoot?</span>
                <textarea name="prepare" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>How do you handle a situation where director does'nt direct well?</span>
                <textarea name="prepare" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What's the hardest photo shoot you've done?</span>
                <textarea name="about" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>What would make you give up on modelling?</span>
                <textarea name="career" placeholder="Express yourself" required cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Describe your shoot experience?</span>
                <textarea name="describe" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            <div class="input">
                <span>Tell us about yourself</span>
                <textarea name="about" placeholder="Express yourself" required  cols="20" rows="7"></textarea>
            </div>
            
            

          </div>





           

          <input type="submit" value="Submit" name="" class="btn">

        </form>
        </section>

    @include('user.footer')

</body>
</html>
