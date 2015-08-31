<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('company_email')->nullable();
            $table->string('company_website')->nullable();
            $table->string('company_contact_person')->nullable();
            $table->string('company_contact_person_designation')->nullable();
            $table->string('business_card_path')->nullable();
            $table->enum('region', ['chennai','bangalore','tirippur','coimbatore']);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('status_lead')->default('1');
            $table->boolean('status_phone_introduction')->default('0');
            $table->boolean('status_demo')->default('0');
            $table->boolean('status_negotiation')->default('0');
            $table->boolean('status_closed')->default('0');
            $table->boolean('status_not_interested')->default('0');
            $table->float('sale_amount')->nullable();
            $table->integer('sale_quantity')->nullable();
            $table->timestamp('last_contacted_date')->nullable();
            $table->timestamp('due_contact_date')->nullable();
            $table->text('comments')->nullable();
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
        Schema::drop('prospects');
    }
}
