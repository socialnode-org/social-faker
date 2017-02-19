<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// public endpoints
Route::get('robots.txt', function() { abort(404); });
Route::get('opensearch/people', function() { abort(404); });
Route::get('opensearch/notice', function() { abort(404); });

// docs
Route::get('doc/{title}', function() { abort(404); });

// main stuff is repetitive
Route::group(['prefix'=>'main'], function() {

    // otp
    Route::get('otp/{user_id}/{token}', 'MainController@otp');

    // these take a code; before the main part
    Route::get('register/{code}', 'MainController@registerConfirmation');
    Route::get('confirmaddress/{code}', 'MainController@emailAddressConfirmation');
    Route::get('recoverpassword/{code}', 'MainController@recoverPasswordConfirmation');

    // Also need a block variant accepting ID on URL for mail links
    Route::get('block/{profile_id}', 'MainController@blockProfileConfirmation');

    Route::get('sup/{seconds}', 'MainController@supSeconds');
    Route::get('login', 'MainController@login');
    Route::get('logout','MainController@logout');
    Route::get('register','MainController@register');
    Route::get('subscribe','MainController@subscribe');
    Route::get('unsubscribe','MainController@unsubscribe');
    Route::get('cancelsubscription','MainController@cancelsubscription');
    Route::get('approvesub','MainController@approvesub');
    Route::get('confirmaddress','MainController@confirmaddress');
    Route::get('recoverpassword','MainController@recoverpassword');
    Route::get('invite','MainController@invite');
    Route::get('sup','MainController@sup');
    Route::get('block','MainController@block');
    Route::get('unblock','MainController@unblock');
    Route::get('subedit','MainController@subedit');
    Route::get('groupblock','MainController@groupblock');
    Route::get('groupunblock','MainController@groupunblock');
    Route::get('sandbox','MainController@sandbox');
    Route::get('unsandbox','MainController@unsandbox');
    Route::get('silence','MainController@silence');
    Route::get('unsilence','MainController@unsilence');
    Route::get('grantrole','MainController@grantrole');
    Route::get('revokerole','MainController@revokerole');
    Route::get('deleteuser','MainController@deleteuser');
    Route::get('geocode','MainController@geocode');
    Route::get('version','MainController@version');
    Route::get('backupaccount','MainController@backupaccount');
    Route::get('deleteaccount','MainController@deleteaccount');
    Route::get('restoreaccount','MainController@restoreaccount');
    Route::get('top','MainController@top');
    Route::get('public','MainController@publicFeed');
    Route::get('all','MainController@all');
    Route::get('tagprofile/{id}','MainController@tagProfileId');
    Route::get('tagprofile','MainController@tagprofile');
    Route::get('xrds','MainController@xrds');
});

Route::group(['prefix'=>'settings'], function() {
    Route::get('profile', function() { abort(404); });
    Route::get('avatar', function() { abort(404); });
    Route::get('password', function() { abort(404); });
    Route::get('im', function() { abort(404); });
    Route::get('oauthconnections', function() { abort(404); });
    Route::get('email', function() { abort(404); });
    Route::get('sms', function() { abort(404); });
    Route::get('url', function() { abort(404); });
    Route::get('oldschool', function() { abort(404); });

    Route::group(['prefix'=>'oauthapps'], function() {
        Route::get('/', function() { abort(404); });
        Route::get('show/{id}', function() { abort(404); });
        Route::get('new', function() { abort(404); });
        Route::get('edit/{id}', function() { abort(404); });
        Route::get('delete/{id}', function() { abort(404); });

    });
});

Route::group(['prefix'=>'search'], function() {
    Route::get('group', function() { abort(404); });
    Route::get('people', function() { abort(404); });
    Route::get('notice', function() { abort(404); });
    Route::get('notice/rss', function() { abort(404); });
});

Route::group(['prefix'=>'attachment'], function() {
    Route::get('{id}/thumbnail', function() { abort(404); });
    Route::get('{id}', function() { abort(404); });
});

Route::group(['prefix'=>'notice'], function() {
    Route::get('/', function() { abort(404); });
    Route::get('new', function() { abort(404); });
    Route::get('{id}/delete', function() { abort(404); });
    Route::get('{id}', function() { abort(404); });
});

Route::get('conversation/{id}', function() { abort(404); });

Route::get('user/{id}', function() { abort(404); });

Route::get('tag', function() { abort(404); });
Route::get('tags', function() { abort(404); });
Route::get('tag/{hashtag}/rss', function() { abort(404); });
Route::get('tag/{hashtag}', function() { abort(404); });

Route::group(['prefix'=>'group'], function() {
    Route::get('{id}/new', function () { abort(404); });
    Route::get('{id}/edit', function () { abort(404); });
    Route::get('{id}/join', function () { abort(404); });
    Route::get('{id}/leave', function () { abort(404); });
    Route::get('{id}/delete', function () { abort(404); });
    Route::get('{id}/cancel', function () { abort(404); });
    Route::get('{id}/approve', function () { abort(404); });
    Route::get('{id}/members', function () { abort(404); });
    Route::get('{id}/logo', function () { abort(404); });
    Route::get('{id}/rss', function () { abort(404); });
    Route::get('{id}/foaf', function () { abort(404); });
    Route::get('{id}/blocked', function () { abort(404); });
    Route::get('{id}/makeadmin', function () { abort(404); });
    Route::get('{id}/members/pending', function () { abort(404); });
    Route::get('{id}/id', function () { abort(404); });
});

Route::group(['prefix'=>'api'], function() {
    Route::get('/', function() { abort(404); });
    
    Route::get('statuses/public_timeline.{fmt}', 'ApiController@publicTimeline');

    // this is not part of the Twitter API. Also may require authentication depending on server config!
    Route::get('statuses/networkpublic_timeline.{fmt}', 'ApiController@networkTimeline');

    Route::get('statuses/friends_timeline/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/friends_timeline.{fmt}', function() { abort(404); });
    Route::get('statuses/home_timeline/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/home_timeline.{fmt}', function() { abort(404); });
    Route::get('statuses/user_timeline/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/user_timeline.{fmt}', function() { abort(404); });
    Route::get('statuses/mentions/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/mentions.{fmt}', function() { abort(404); });
    Route::get('statuses/replies/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/replies.{fmt}', function() { abort(404); });
    Route::get('statuses/mentions_timeline/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/mentions_timeline.{fmt}', function() { abort(404); });
    Route::get('statuses/friends/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/friends.{fmt}', function() { abort(404); });
    Route::get('statuses/followers/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/followers.{fmt}', function() { abort(404); });
    Route::get('statuses/show/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/show.{fmt}', function() { abort(404); });
    Route::get('statuses/update.{fmt}', function() { abort(404); });
    Route::get('statuses/destroy/{id}.{fmt}', function() { abort(404); });
    Route::get('statuses/destroy.{fmt}', function() { abort(404); });

    // START qvitter API additions
    Route::get('attachment/{id}.{fmt}', function() { abort(404); });
    Route::get('attachment/checkhub.{fmt}', function() { abort(404); });
    Route::get('externalprofile/show.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/admins/{id}.{fmt}', function() { abort(404); });
    Route::get('account/update_link_color.{fmt}', function() { abort(404); });
    Route::get('account/update_background_color.{fmt}', function() { abort(404); });
    Route::get('account/register.{fmt}', function() { abort(404); });
    Route::get('check_nickname.{fmt}', function() { abort(404); });
    
    // users
    Route::get('users/show/{id}.{fmt}', function() { abort(404); });
    Route::get('users/show.{fmt}', function() { abort(404); });
    Route::get('users/profile_image/{screen_name}.{fmt}', function() { abort(404); });
    
    // friendships
    Route::get('friendships/show.{fmt}', function() { abort(404); });
    Route::get('friendships/exists.{fmt}', function() { abort(404); });
    Route::get('friendships/create/{id}.{fmt}', function() { abort(404); });
    Route::get('friendships/create.{fmt}', function() { abort(404); });
    Route::get('friendships/destroy/{id}.{fmt}', function() { abort(404); });
    Route::get('friendships/destroy.{fmt}', function() { abort(404); });

    // Social graph
    Route::get('friends/ids/{id}.{fmt}', function() { abort(404); });
    Route::get('followers/ids/{id}.{fmt}', function() { abort(404); });
    Route::get('friends/{ids}.{fmt}', function() { abort(404); });
    Route::get('followers/{ids}.{fmt}', function() { abort(404); });

    // account
    Route::get('account/verify_credentials.{fmt}', function() { abort(404); });
    Route::get('account/update_profile.{fmt}', function() { abort(404); });
    Route::get('account/update_profile_image.{fmt}', function() { abort(404); });
    Route::get('account/update_delivery_device.{fmt}', function() { abort(404); });

    // special case where verify_credentials is called w/out a format
    Route::get('account/verify_credentials', function() { abort(404); });

    Route::get('account/rate_limit_status.{fmt}', function() { abort(404); });
    Route::get('blocks/create/{id}.{fmt}', function() { abort(404); });
    Route::get('blocks/create.{fmt}', function() { abort(404); });
    Route::get('blocks/destroy/{id}.{fmt}', function() { abort(404); });
    Route::get('blocks/destroy.{fmt}', function() { abort(404); });
    Route::get('help/test.{fmt}', function() { abort(404); });
    Route::get('statusnet/version.{fmt}', function() { abort(404); });
    Route::get('statusnet/config.{fmt}', function() { abort(404); });
    Route::get('gnusocial/version.{fmt}', function() { abort(404); });
    Route::get('gnusocial/config.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/timeline/{id}.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/show/{id}.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/show.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/join/{id}.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/join.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/leave/{id}.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/leave.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/is_member.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/list/{id}.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/list.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/list_all.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/membership/{id}.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/create.{fmt}', function() { abort(404); });
    Route::get('statusnet/groups/update/{id}.{fmt}', function() { abort(404); });

    // conversation (aka threaded status)
    Route::get('statusnet/conversation/{id}.{fmt}', function() { abort(404); });

    // Lists (people tags)
    Route::get('lists/list.{fmt}', function() { abort(404); });
    Route::get('lists/memberships.{fmt}', function() { abort(404); });
    Route::get('{user}/lists/memberships.{fmt}', function() { abort(404); });
    Route::get('lists/subscriptions.{fmt}', function() { abort(404); });
    Route::get('{user}/lists/subscriptions.{fmt}', function() { abort(404); });
    Route::get('lists.{fmt}', function() { abort(404); });
    Route::get('{user}/lists/{id}.{fmt}', function() { abort(404); });
    Route::get('{user}/lists.{fmt}', function() { abort(404); });
    Route::get('{user}/lists/{id}/statuses.{fmt}', function() { abort(404); });
    Route::get('{user}/{list_id}/members/{id}.{fmt}', function() { abort(404); });
    Route::get('{user}/{list_id}/members.{fmt}', function() { abort(404); });
    Route::get('{user}/{list_id}/subscribers/{id}.{fmt}', function() { abort(404); });
    Route::get('{user}/{list_id}/subscribers.{fmt}', function() { abort(404); });

    // Tags
    Route::get('statusnet/tags/timeline/{tag}.{fmt}', function() { abort(404); });

    // media related
    Route::get('statusnet/media/upload', function() { abort(404); });
    Route::get('statuses/update_with_media.json', function() { abort(404); });

    // Twitter Media upload API v1.1
    Route::get('media/upload.{fmt}', function() { abort(404); });

    // search
    Route::get('search.atom', function() { abort(404); });
    Route::get('search.json', function() { abort(404); });
    Route::get('trends.json', function() { abort(404); });

    // oauth stuff
    Route::get('oauth/request_token', function() { abort(404); });
    Route::get('oauth/access_token', function() { abort(404); });
    Route::get('oauth/authorize', function() { abort(404); });
});

// admin
Route::get('panel/site', function() { abort(404); });
Route::get('panel/user', function() { abort(404); });
Route::get('panel/access', function() { abort(404); });
Route::get('panel/paths', function() { abort(404); });
Route::get('panel/sessions', function() { abort(404); });
Route::get('panel/sitenotice', function() { abort(404); });
Route::get('panel/licence', function() { abort(404); });