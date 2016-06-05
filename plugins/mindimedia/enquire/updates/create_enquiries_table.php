<?php namespace Mindimedia\Enquire\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEnquiriesTable extends Migration
{

    public function up()
    {
        Schema::create('mindimedia_enquire_enquiries', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('quotation_number')->nullable();
              $table->string('full_name')->nullable();
              $table->string('email')->nullable();
              $table->string('phone_number')->nullable();
              $table->string('mobile_number')->nullable();
              $table->string('address')->nullable();
              $table->string('city')->nullable();
              $table->string('postal_code')->nullable();
              $table->string('country')->nullable();
              $table->string('state')->nullable();
              $table->string('region')->nullable();
              $table->string('enquire_type')->nullable();
              $table->datetime('day_in');
              $table->datetime('day_out');
              $table->string('room_type')->nullable();
              $table->integer('quantity')->default(0);
              $table->integer('adult')->default(0);
              $table->integer('children')->default(0);
              $table->integer('infant')->default(0);
              $table->string('airport_name')->nullable();
              $table->string('airport_location')->nullable();
              $table->string('flight_number')->nullable();
              $table->datetime('arrival_time')->nullable();
              $table->string('other_transport')->nullable();
              $table->text('comment')->nullable();
              $table->string('info_special_check')->default('N');
              $table->string('info_special')->nullable();
              $table->string('how_did_enquire')->nullable();
              $table->string('status')->default('WL');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('mindimedia_enquire_enquiries');
    }

}
