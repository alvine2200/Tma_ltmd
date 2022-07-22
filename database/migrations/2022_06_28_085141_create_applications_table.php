<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('nickname');
            $table->string('email');
            $table->string('phone');
            $table->string('dob');
            $table->string('location');
            $table->string('instagram');
            $table->string('gender');

            $table->string('eye');
            $table->string('hair');
            $table->string('complexion');
            $table->string('shoe');
            $table->string('hairlength');
            $table->string('hips');
            $table->string('waist');
            $table->string('burst');
            $table->string('height');
            $table->string('measurement_time');


            $table->string('headshot');
            $table->string('fullbody');
            $table->string('sideway');

            $table->string('experience');
            $table->string('hobbies');
            $table->string('venture');
            $table->string('goal');
            $table->string('passion');
            $table->string('longest');
            $table->string('professional');
            $table->string('casual');
            $table->string('workout');
            $table->string('fitness');
            $table->string('nude');
            $table->string('swimsuit');
            $table->longText('fiveyears');
            $table->longText('favourite');
            $table->longText('physique');
            $table->longText('response');
            $table->longText('activities');
            $table->longText('prepare');
            $table->longText('director');
            $table->longText('hardest_shoot');
            $table->longText('give_up');
            $table->longText('describe_shoot');
            $table->longText('about_yourself');
            $table->longText('weakness');
            $table->longText('overcome');
            $table->longText('skin_show');
            $table->longText('personalities');
            $table->longText('communication');
            $table->longText('arrogancy');
            $table->longText('critism');
            $table->longText('comments');
            $table->longText('why');
            $table->longText('unique');
            $table->longText('speciality');
            $table->string('name_of_agency');
            $table->string('piercing');
            $table->string('tatoos');
            $table->string('scars');
            $table->string('enhancement');
            $table->string('manager');
            $table->string('work');
            $table->string('studying');
            $table->string('schedule');
            $table->string('availability');
            $table->string('travelling');
            $table->string('acting');
            $table->string('training');
            $table->string('relationship');
            $table->string('active');
            $table->string('whatsapp');
            $table->string('confidence');
            $table->string('registered');
            $table->string('category');

            $table->string('review');
            $table->string('projects');
            $table->string('fee');
            $table->string('contract');
            $table->string('terms');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
