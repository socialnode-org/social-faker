<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',15)->unique()->index();
            $table->string('screenname')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique(); // unique email address for password recovery etc.
            $table->string('password');
            $table->enum('role', [
                'unconfirmed', // default role for members that have not confirmed email address
                'suspended', // no read/write access for any member data, for banned members 
                'restricted', // no write access until X, for members that abuse ToS
                'private', // no public read access, for confirmed members that want private profiles
                'member', // default confirmed role
                'developer', // a confirmed member that has oauth apps
                'moderator', // community moderator that can restrict members (only admins can suspend)
                'admin' // the operator(s) of the instance, can confirm, restrict, suspend members
            ])->default('unconfirmed');
            $table->tinyInteger('username_change_count')->default(0)->comment('admins can restrict username changes');
            $table->string('incoming_email')->nullable()->comment('email address for post-by-email');
            $table->boolean('email_notify_sub')->default(true)->comment('Notify by email of subscriptions');
            $table->boolean('email_notify_like')->default(false)->comment('Notify by email of likes');
            $table->boolean('email_notify_nudge')->default(false)->nullable()->comment('legacy/unused');
            $table->boolean('email_notify_dm')->default(true)->comment('Notify by email of new direct messages');
            $table->boolean('email_notify_attn')->default(true)->comment('Notify by email of @user mentions');
            $table->string('language')->default('en')->comment('user language in ISO 639-1 format ');
            $table->string('timezone')->default('+00:00')->comment('UTC offset, greenwich is default'); 
            $table->boolean('email_microid')->default(false)->comment('0 = dont show email microid; 1 = show email microid');
            $table->boolean('auto_subscribe')->default(false)->comment('automatically subscribe to users who subscribe to us');
            $table->boolean('subscribe_policy')->default(false)->comment('0 = anybody can subscribe; 1 = require approval');
            $table->boolean('email_post')->default(false)->comment('legacy/unused');
            $table->string('sms', 64)->nullable()->comment('legacy/unused');
            $table->timestamp('restricted_until')->nullable();
            $table->timestamp('banned_until')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('password_updated_at')->nullable();
            $table->timestamp('username_updated_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
