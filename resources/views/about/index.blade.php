<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manyatta Films And Modelling Agency</title>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="css/manyatta.css">
<style>
     .information{
            display:flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding:2rem;
            margin-bottom: 4rem;
            border-radius:15px;
            box-shadow:  rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
        }
        .information .text{
            margin:20px;
            font-size:16px;
        }
        .information .text p{
            font-size:16px;
            font-weight:bold;
            margin-bottom: 1rem;
            text-align:center;
        }
        .container-offer{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-wrap: wrap;

        }
        .container-offer .row{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .container-offer .row .col{
            column:100%;
            display:flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .container-offer .row .col .industries{
            column:33%;
            flex-wrap: wrap;
            display:flex;
            padding:2rem;
            margin:20px;
            border-radius:10px;
            font-size:15px;
            box-shadow:  rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;

        }
</style>
</head>
<body>

    @include('user.navbar')

    <section style="padding-top:18rem; padding-bottom:4rem;">

           <h3 class="heading">About us</h3>

           <div class="container">
             <div class="row">

                <h1 style="padding-bottom:30px; " class="sub-heading">Origin and Goal of Thera Modeling Agency</h1>
                 <div class="information">
                    <div class="text">
                        {{-- <p class="heading">
                        </p> --}}
                        Founded in 2019, Thera Modelling Agency is a Model and talent management company that works to
                        raise the profile of the talented models and actors. Thera Modelling Agency is continuously developing
                        strong relationships with many modeling and casting agencies in Nairobi and Kiambu Regions. Thera
                        Modelling Agency scouts and develops its clients and spends the time to get to know the unique needs
                        of each individual to be able to place them in specialized areas and markets. This includes, model print,
                        runway shows, editorial, advertising campaigns, music, TV and booking feature films. Thera Modelling
                        Agency assists in coordination and logistics for clients and also assists in career-making changes and
                        introductions to industry insiders.

                    </div>
                 </div>

                 <h1 style="padding-bottom:30px; " class="sub-heading">Insight</h1>
                 <div class="information">
                    <div class="text">
                        {{-- <p class="heading">
                        </p> --}}
                        A career in modelling can offer fantastic opportunities to travel the world, meet diverse & interesting
                        people and generate a good income. Before starting out, it's important to be aware that today
                        modelling is a highly competitive industry where, however good you look, success can only be achieved
                        with certain vital ingredients: dedication, a professional attitude, a good agent and a bit of luck.
                        At Thera Modelling Agency we have a formula for new faces which can mean facing some changes, not
                        just your image but also your outlook. Having a strong sense of purpose, determination and enthusiasm
                        is vital to a model's career, it can mean the difference between success and failure.
                        Models must work hard to look their best and yes you do have to be beautiful and have good clear skin
                        but synonymous with this is eating a healthy balanced diet, taking regular exercise, not smoking, and
                        preferring a glass of water to a glass of wine! What you wear is also important. But looking good is only
                        half of the requirements. Being professional is a must. This means turning up on time, having a positive
                        attitude and generally getting along with everyone at the shoot or casting. If you take all of this on board
                        then your chances of making it as a model will increase enormously. Remember that the competition is
                        fierce out there for work and standards today are higher than ever.
                        If we do accept you onto our books, then don't forget the agency is here to give advice and guidance on
                        all aspects of our models careers. We will dedicate ourselves to your individual development as a model
                        and ensure that you receive the nurturing you need and the very best in management.


                    </div>
                 </div>
             </div>
            </div>

            <h1 style="padding-bottom:30px; " class="sub-heading">What we offer</h1>
            <div class="container-offer">
                    <div class="row">
                        <div class="col">
                             <div class="information">
                                <div class="industries">
                                        Catwalk Training
                                </div>
                                <div class="industries">
                                        Etiquette Training
                                </div>
                                <div class="industries">
                                        Confidence Building
                                </div>
                                <div class="industries">
                                        Communications Skills
                                </div>
                                <div class="industries">
                                        Grooming
                                </div>
                                <div class="industries">
                                        Make-up Training
                                </div>
                                <div class="industries">
                                        Fitness Training
                                </div>
                                <div class="industries">
                                        Posing and Portfolio Management
                                </div>
                                <div class="industries">
                                        Acting skills
                                </div>
                                <div class="industries">
                                        Dance and Choreography
                                </div>

                            </div>
                        </div>

                     </div>
            </div>


            <h1 style="padding-bottom:20px; " class="sub-heading">Our Industries</h1>
            <div class="container-offer">
                <div class="row">
                    <div class="col">
                        <div class="information">
                            <p class="text">
                                There are many types of modelling. Modelling is one of those unique professions that lends itself to
                                applying your specific talents in many interesting ways. As our model, you get the chance to be creative
                                and explore the different artistic options within the industry. Many people dabble in multiple types of
                                modelling before settling on the type that best fits their skills.
                                As a model at TMA, try to stay open minded at the beginning of your career. Over time, you will become
                                more well versed with in the different types of modelling. There are so many unique models within the
                                industry and you can be the next big thing in one or more types of modelling.

                            </p>

                          <div class="industries">
                                <ul style="padding:1rem"> HIGH FASHION/RUNWAY MODELING
                                    <li style="padding-top:1rem;">Minimum height: 5’9” female, 6’0” male</li>
                                    <li>Bust: 32-35</li>
                                    <li>Hips: 33-35</li>
                                    <li>Waist: 22-26</li>
                                    <li>Age: 15-21</li>
                                </ul>
                          </div>
                          <div class="industries">
                            <ul style="padding:1rem"> COMMERCIAL MODELING
                                <li style="padding-top:1rem;">Even Skin</li>
                                <li>Great Actor</li>
                            </ul>
                          </div>
                          <div class="industries">
                            <ul style="padding:1rem"> GLAMOUR AND VIDEO MODELING
                                <li style="padding-top:1rem;">Age: 18 and above</li>
                                <li>Curvy</li>
                                <li>100% comfortable showing skin</li>
                            </ul>
                          </div>
                          <div class="industries">
                            <ul style="padding:1rem"> SWIMSUIT & LINGERIE MODELING
                                <li style="padding-top:1rem;">Age: 18-35</li>
                                <li>Size 8-16</li>
                                <li>100% comfortable showing skin</li>
                            </ul>
                         </div>
                         <div class="industries">
                            <ul style="padding:1rem"> FITNESS MODELING
                                <li style="padding-top:1rem;">Athletic body</li>
                                <li>Masculine Body</li>
                            </ul>
                         </div>
                         <div class="industries">
                            <ul style="padding:1rem"> PLUS-SIZE MODELING
                                <li style="padding-top:1rem;">Age: 19-38</li>
                                <li>Size 12 and above</li>
                            </ul>
                         </div>


                        </div>

                    </div>
                </div>
            </div>

            <h1 style="padding-bottom:20px; " class="sub-heading">ENROLLMENT</h1>
            <div class="container-offer">
                <div class="row">
                    <div class="col">
                        <div class="information">
                            <p class="text">
                                Models are expected to attend a review and orientation within the first week of confirmation of their
                                application’s success. This is done at the agency office.
                            </p>

                            <div class="industries">
                                <ul style="padding:1rem"> ACTIVITIES
                                    <li style="padding-top:1rem;">Introduction & orientation (Notebook and a pen needed)</li>
                                    <li>Fitness Review(Workouts) -> Training gear needed</li>
                                    <li>Acting Review(Monologue)</li>
                                    <li>Speed Change Review(3 extra outfits needed)</li>
                                    <li>Measurements(two-piece bikini/short biker short(f) and briefs(m) needed)</li>
                                    <li>Physical & Personal Details Recording (two-piece bikini/short biker short (f) and briefs (m)
                                        needed)</li>
                                </ul>
                             </div>
                             <div style="" class="industries">
                                <ul style="padding:1rem"> REQUIREMENTS
                                    <li style="padding-top:1rem;">Training gear (T-shirt (m) Sports bra (f), tights or track suit pants, trainers)
                                    </li>
                                    <li> Two-piece bikini or short biker short & unpadded bra (f)</li>
                                    <li>Briefs(m)</li>
                                    <li>3 ectra Outfits (Any)</li>
                                    <li>Notebook and a Pen</li>
                                    <li>Water and a bottle</li>
                                </ul>
                             </div>
                             {{-- <div class="industries">
                                <a class="btn btn-primary" href="{{url('apply')}}">Apply Here</a>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>

            <h1 style="padding-bottom:20px; " class="sub-heading">TRAINING & DEVELOPMENT</h1>
            <div class="container-offer">
                <div class="row">
                    <div class="col">
                        <div style="font-size:16px;" class="information">
                                <ul style="padding:1rem"> REQUIREMENTS
                                    <li style="padding-top:1rem;">Male Attire: Plain fitting shirt (Preferably black), Skinny/Fitting pants (Black/Blue), plain closed
                                    </li>
                                    <li> Shoes and Short</li>
                                    <li> Female Attire: High Heels (strictly 4” and above), Sports Bra (Preferably black) with Tights
                                        (Black/Blue)
                                        </li>
                                    <li>A pair of rubber/sport shoes</li>
                                    <li> Lingerie/Underwear (Lingerie/Swimsuit models only): Two piece (f), Briefs (m)
                                    </li>
                                    <li>A bottle of water</li>
                                    <li>Notebook and a Pen</li>
                                    <li>Sweater/Jacket (depending on weather condition)</li>
                                </ul>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 style="padding-bottom:20px; " class="sub-heading">INTEGRATION</h1>
            <div class="container-offer">
                <div class="row">
                    <div class="col">
                        <div class="information">
                            <p class="text">
                                Upon a successful review and orientation, models are ready to be fully integrated
                                into TMA and begin work on various opportunities and projects that present themselves. Models get to
                                sign an agency contract where they will be professionally managed and explore opportunities as a TMA
                                model. There are no additional fees at this stage a model is to pay. <br>
                                We only charge a 20% commission on all paid projects our models take up.<br>
                                Please note that minors (below 18 years) MUST have their parent/guardian present and consent when
                                signing up with us.
                                Minors (below 18 years), are NOT allowed to participate in Video, Glamour and Swimsuit & lingerie
                                projects/activities.

                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <h1 style="padding-bottom:20px; " class="sub-heading">MEMBERSHIP REQUIREMENTS</h1>
            <div class="container-offer">
                <div class="row">
                    <div class="col">
                        <div style="font-size:16px;" class="information ">
                            <p class="text">
                                <ul style="padding:1rem"> ACTIVITIES
                                    <li style="padding-top:1rem;"> Models MUST maintain an active presence in WhatsApp. It is our MAIN mode of
                                        communication. One should have an appropriate device that supports the app.</li>
                                    <li> Signed models are obligated to communicate with the agency ALL MODELING/ACTING activity
                                        they participate in.</li>
                                    <li> Models MUST have the appropriate outfits for castings and trainings</li>
                                    <li> Models MUST be ready to engage in weekly tasks assigned by the agency. Access to a
                                        smartphone/camera will be necessary to record videos and take photos.</li>
                                    <li>Models MUST include the agency handle on their IG bio.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



    </section>

    @include('user.footer')

    <script src="js/manyatta.js"></script>
    <script src="js/app.js"></script>
</body>
</html>
