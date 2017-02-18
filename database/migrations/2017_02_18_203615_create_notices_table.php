<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('username',15)->nullable()->index();
            $table->text('content');
            $table->text('rendered');
            $table->integer('reply_to')->unsigned()->nullable();
            $table->boolean('is_local')->default(true);
            $table->string('source')->default('web');
            $table->integer('conversation')->unsigned()->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->decimal('lon', 10, 7)->nullable();
            $table->integer('location_id')->unsigned()->nullable();
            $table->integer('location_ns')->unsigned()->nullable();
            $table->integer('repeat_of')->unsigned()->nullable();
            $table->string('object_type')->nullable();
            $table->string('verb')->nullable();
            $table->string('scope')->nullable();
            $table->boolean('has_card')->default(false);
            $table->text('entities');
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
        Schema::drop('notices');
    }
}
