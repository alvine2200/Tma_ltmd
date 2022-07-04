@extends('admin.dashboard')
@section('content')

<div class="container-fluid py-1 px-3">
    <div class="row">
        <div class="col-md-6">
            Fullname
        </div>
        <div class="col-md-6">
            {{$application->fullname}}
        </div>
        <div class="col-md-6">
            Nickname
        </div>
        <div class="col-md-6">
            {{$application->nickname}}
        </div>
        <div class="col-md-6">
            Email
        </div>
        <div class="col-md-6">
            {{$application->email}}
        </div>
        <div class="col-md-6">
            Phone Number
        </div>
        <div class="col-md-6">
            {{$application->phone}}
        </div>
        <div class="col-md-6">
            Date Of Birth
        </div>
        <div class="col-md-6">
            {{$application->dob}}
        </div>
        <div class="col-md-6">
            Location
        </div>
        <div class="col-md-6">
            {{$application->location}}
        </div>
        <div class="col-md-6">
            Instagram link
        </div>
        <div class="col-md-6">
            {{$application->instagram}}
        </div>
        <div class="col-md-6">
            Gender
        </div>
        <div class="col-md-6">
            {{$application->gender}}
        </div>
        <div class="col-md-6">
            Eye Color
        </div>
        <div class="col-md-6">
            {{$application->eye}}
        </div>
        <div class="col-md-6">
            Hair Color
        </div>
        <div class="col-md-6">
            {{$application->hair}}
        </div>
        <div class="col-md-6">
            Complexion
        </div>
        <div class="col-md-6">
            {{$application->complexion}}
        </div>
        <div class="col-md-6">
            Shoe Size
        </div>
        <div class="col-md-6">
            {{$application->shoe}}
        </div>
        <div class="col-md-6">
            Hair Length
        </div>
        <div class="col-md-6">
            {{$application->hairlength}}
        </div>
        <div class="col-md-6">
            Hips
        </div>
        <div class="col-md-6">
            {{$application->hips}}
        </div>
        <div class="col-md-6">
            Waist
        </div>
        <div class="col-md-6">
            {{$application->waist}}
        </div>
        <div class="col-md-6">
            Burst
        </div>
        <div class="col-md-6">
            {{$application->burst}}
        </div>
        <div class="col-md-6">
            Height
        </div>
        <div class="col-md-6">
            {{$application->burst}}
        </div>
        <div class="col-md-6">
            When last did you take measurements?
        </div>
        <div class="col-md-6">
            {{$application->measurement_time}}
        </div>
        <div class="col-md-6">
            Headshot photo
        </div>
        <div class="col-md-6">
            <img style="width:300px; margin:10px; height:250px;" src="uploads/photos/{{$application->headshot }}" alt="image" />           
        </div>
        <div class="col-md-6">
            Fullbody Photo
        </div>
        <div class="col-md-6">
            <img style="width:300px; margin:10px; height:250px;" src="uploads/photos/{{$application->fullbody }}" alt="image" />
        </div>
        <div class="col-md-6">
            Sideway photo
        </div>
        <div class="col-md-6">
            <img style="width:300px; margin:10px; height:250px;" src="uploads/photos/{{$application->headshot }}" alt="image" />
        </div>
        <div class="col-md-6">
            Experience
        </div>
        <div class="col-md-6">
            {{$application->experience}}
        </div>
        <div class="col-md-6">
            Hobbies
        </div>
        <div class="col-md-6">
            {{$application->hobbies}}
        </div>
        <div class="col-md-6">
            Venture
        </div>
        <div class="col-md-6">
            {{$application->venture}}
        </div>
        <div class="col-md-6">
            Personal Goals
        </div>
        <div class="col-md-6">
            {{$application->goal}}
        </div>
        <div class="col-md-6">
            What are your passions?
        </div>
        <div class="col-md-6">
            {{$application->passion}}
        </div>
        <div class="col-md-6">
            whats your longest photo shoot?
        </div>
        <div class="col-md-6">
            {{$application->longest}}
        </div>
        <div class="col-md-6">
            Ever done professional photo shoot?
        </div>
        <div class="col-md-6">
            {{$application->professional}}
        </div>
        <div class="col-md-6">
            Ever done casual photo shoot?
        </div>
        <div class="col-md-6">
            {{$application->casual}}
        </div>
        <div class="col-md-6">
            Do you work out regularly?
        </div>
        <div class="col-md-6">
            {{$application->workout}}
        </div>
        <div class="col-md-6">
            Can you be accept to be enrolled in fitness program?
        </div>
        <div class="col-md-6">
            {{$application->fitness}}
        </div>
        <div class="col-md-6">
            Would you do nude modelling?
        </div>
        <div class="col-md-6">
            {{$application->nude}}
        </div>
        <div class="col-md-6">
            Would you do swimsuit/Lingerie modelling and why?
        </div>
        <div class="col-md-6">
            {{$application->swimsuit}}
        </div>
        <div class="col-md-6">
            Where do you see yourself in the next 5 years?
        </div>
        <div class="col-md-6">
            {{$application->fiveyears}}
        </div>
        <div class="col-md-6">
            Who is your favourite model artist and why?
        </div>
        <div class="col-md-6">
            {{$application->favourite}}
        </div>
        <div class="col-md-6">
            What are the best four physical features that you have and why?
        </div>
        <div class="col-md-6">
            {{$application->physique}}
        </div>
        <div class="col-md-6">
            Explain reasons for above response?
        </div>
        <div class="col-md-6">
            {{$application->response}}
        </div>
        <div class="col-md-6">
            What can you not do in modelling and why?
        </div>
        <div class="col-md-6">
            {{$application->activities}}
        </div>
        <div class="col-md-6">
            How do you prepare for a photo shoot?
        </div>
        <div class="col-md-6">
            {{$application->prepare}}
        </div>
        <div class="col-md-6">
            How can you react when your director doesnt direct well?
        </div>
        <div class="col-md-6">
            {{$application->director}}
        </div>
        <div class="col-md-6">
            Whats the hardest photo shoot you've done?
        </div>
        <div class="col-md-6">
            {{$application->hardest_shoot}}
        </div>
        <div class="col-md-6">
            What can make you give up in modelling?
        </div>
        <div class="col-md-6">
            {{$application->give_up}}
        </div>
        <div class="col-md-6">
            Describe your shoot experience?
        </div>
        <div class="col-md-6">
            {{$application->describe_shoot}}
        </div>
        <div class="col-md-6">
            Tell us about yourself?
        </div>
        <div class="col-md-6">
            {{$application->about_yourself}}
        </div>
        <div class="col-md-6">
            What is your greatest weakness as a person, why?
        </div>
        <div class="col-md-6">
            {{$application->weakness}}
        </div>
        <div class="col-md-6">
            How do you work to overcome your weakness?
        </div>
        <div class="col-md-6">
            {{$application->overcome}}
        </div>
        <div class="col-md-6">
            How confortable are you showing your skin and why?
        </div>
        <div class="col-md-6">
            {{$application->skin_show}}
        </div>
        <div class="col-md-6">
            What are the 4 best personality trait?
        </div>
        <div class="col-md-6">
            {{$application->personalities}}
        </div>
        <div class="col-md-6">
            How well do you communicate with others?
        </div>
        <div class="col-md-6">
            {{$application->communication}}
        </div>
        <div class="col-md-6">
            How would you deal with arrogant client?
        </div>
        <div class="col-md-6">
            {{$application->arrogancy}}
        </div>
        <div class="col-md-6">
            Do you have any experience with critism, How did you handle it?
        </div>
        <div class="col-md-6">
            {{$application->critism}}
        </div>
        <div class="col-md-6">
            How would you deal with photographer making bad comments about you during photoshoot?
        </div>
        <div class="col-md-6">
            {{$application->comments}}
        </div>
        <div class="col-md-6">
            Why do you want to join TMA?
        </div>
        <div class="col-md-6">
            {{$application->why}}
        </div>
        <div class="col-md-6">
            What is unique and special about you?
        </div>
        <div class="col-md-6">
            {{$application->unique}}
        </div>
        <div class="col-md-6">
            What makes you the best?
        </div>
        <div class="col-md-6">
            {{$application->speciality}}
        </div>
        <div class="col-md-6">
            If yes, name of the agency?
        </div>
        <div class="col-md-6">
            {{$application->name_of_agency}}
        </div>
        <div class="col-md-6">
            Do you have any piercing?
        </div>
        <div class="col-md-6">
            {{$application->piercing}}
        </div>
        <div class="col-md-6">
            Do you have any tatoos?
        </div>
        <div class="col-md-6">
            {{$application->tatoos}}
        </div>
        <div class="col-md-6">
            Do you have any scars?
        </div>
        <div class="col-md-6">
            {{$application->scars}}
        </div>
        <div class="col-md-6">
            Have you had any enhancement?
        </div>
        <div class="col-md-6">
            {{$application->enhancement}}
        </div>
        <div class="col-md-6">
            Are you open to have a manager?
        </div>
        <div class="col-md-6">
            {{$application->manager}}
        </div>
        <div class="col-md-6">
            Do you work?
        </div>
        <div class="col-md-6">
            {{$application->work}}
        </div>
        <div class="col-md-6">
            Are you studying?
        </div>
        <div class="col-md-6">
            {{$application->studying}}
        </div>
        <div class="col-md-6">
            Whats your weekly schedule like?
        </div>
        <div class="col-md-6">
            {{$application->schedule}}
        </div>
        <div class="col-md-6">
            Are you available on a short notice?
        </div>
        <div class="col-md-6">
            {{$application->availability}}
        </div>
        <div class="col-md-6">
            Are you prepared to travel on modelling assignments?
        </div>
        <div class="col-md-6">
            {{$application->travelling}}
        </div>
        <div class="col-md-6">
            Are you intrested on acting?
        </div>
        <div class="col-md-6">
            {{$application->acting}}
        </div>
        <div class="col-md-6">
            Have you done any modelling training?
        </div>
        <div class="col-md-6">
            {{$application->training}}
        </div>
        <div class="col-md-6">
            Are you in a relationship with anyone at TMA?
        </div>
        <div class="col-md-6">
            {{$application->relationship}}
        </div>
        <div class="col-md-6">
            How active are you on instagram?
        </div>
        <div class="col-md-6">
            {{$application->active}}
        </div>
        <div class="col-md-6">
            How active are you on whatsapp?
        </div>
        <div class="col-md-6">
            {{$application->whatsapp}}
        </div>
        <div class="col-md-6">
            How would you rate your confidence?
        </div>
        <div class="col-md-6">
            {{$application->confidence}}
        </div>
        <div class="col-md-6">
            Are you registered with any modelling agency, Name it?
        </div>
        <div class="col-md-6">
            {{$application->registered}}
        </div>
        <div class="col-md-6">
            Will you manage to visit agency for review and<br> orientation for the first 2 weeks if accepted?
        </div>
        <div class="col-md-6">
            {{$application->review}}
        </div>
        <div class="col-md-6">
            Will you manage to pay agency fee of 1500/-  within first week if accepted?
        </div>
        <div class="col-md-6">
            {{$application->fee}}
        </div>
        <div class="col-md-6">
            Will you manage to commit to a contract of 1 year if accepted?
        </div>
        <div class="col-md-6">
            {{$application->contract}}
        </div>
        <div class="col-md-6">
            I have read and accept application and agency terms?
        </div>
        <div class="col-md-6">
            {{$application->terms}}
        </div>
    </div>
        
</div>
    
@endsection