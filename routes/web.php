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
Route::group(['domain' => config('app.app_domain')], function () {

  Route::auth();

  // public endpoints
  Route::get('robots.txt','MainController@notYetImplemented');
  Route::get('opensearch/people','MainController@notYetImplemented');
  Route::get('opensearch/notice','MainController@notYetImplemented');

  // docs
  Route::get('doc/{title}','MainController@notYetImplemented');

  // otp
  Route::get('main/otp/{user_id}/{token}', 'MainController@otp');

  // these take a code; before the main part
  Route::get('main/register/{code}', 'MainController@registerConfirmation');
  Route::get('main/confirmaddress/{code}', 'MainController@emailAddressConfirmation');
  Route::get('main/recoverpassword/{code}', 'MainController@recoverPasswordConfirmation');

  // Also need a block variant accepting ID on URL for mail links
  Route::get('main/block/{profile_id}', 'MainController@blockProfileConfirmation');

  Route::get('main/sup/{seconds}', 'MainController@supSeconds');
  Route::get('main/login', 'MainController@login');
  Route::get('main/logout','MainController@logout');
  Route::get('main/register','MainController@register');
  Route::get('main/subscribe','MainController@subscribe');
  Route::get('main/unsubscribe','MainController@unsubscribe');
  Route::get('main/cancelsubscription','MainController@cancelsubscription');
  Route::get('main/approvesub','MainController@approvesub');
  Route::get('main/confirmaddress','MainController@confirmaddress');
  Route::get('main/recoverpassword','MainController@recoverpassword');
  Route::get('main/invite','MainController@invite');
  Route::get('main/sup','MainController@sup');
  Route::get('main/block','MainController@block');
  Route::get('main/unblock','MainController@unblock');
  Route::get('main/subedit','MainController@subedit');
  Route::get('main/groupblock','MainController@groupblock');
  Route::get('main/groupunblock','MainController@groupunblock');
  Route::get('main/sandbox','MainController@sandbox');
  Route::get('main/unsandbox','MainController@unsandbox');
  Route::get('main/silence','MainController@silence');
  Route::get('main/unsilence','MainController@unsilence');
  Route::get('main/grantrole','MainController@grantrole');
  Route::get('main/revokerole','MainController@revokerole');
  Route::get('main/deleteuser','MainController@deleteuser');
  Route::get('main/geocode','MainController@geocode');
  Route::get('main/version','MainController@version');
  Route::get('main/backupaccount','MainController@backupaccount');
  Route::get('main/deleteaccount','MainController@deleteaccount');
  Route::get('main/restoreaccount','MainController@restoreaccount');
  Route::get('main/top','MainController@top');
  Route::get('main/public','MainController@publicFeed');
  Route::get('main/all','MainController@all');
  Route::get('main/tagprofile/{id}','MainController@tagProfileId');
  Route::get('main/tagprofile','MainController@tagprofile');
  Route::get('main/xrds','MainController@xrds');

  Route::get('settings/profile','MainController@notYetImplemented');
  Route::get('settings/avatar','MainController@notYetImplemented');
  Route::get('settings/password','MainController@notYetImplemented');
  Route::get('settings/im','MainController@notYetImplemented');
  Route::get('settings/oauthconnections','MainController@notYetImplemented');
  Route::get('settings/email','MainController@notYetImplemented');
  Route::get('settings/sms','MainController@notYetImplemented');
  Route::get('settings/url','MainController@notYetImplemented');
  Route::get('settings/oldschool','MainController@notYetImplemented');

  Route::get('settings/oauthapps/','MainController@notYetImplemented');
  Route::get('settings/oauthapps/show/{id}','MainController@notYetImplemented');
  Route::get('settings/oauthapps/new','MainController@notYetImplemented');
  Route::get('settings/oauthapps/edit/{id}','MainController@notYetImplemented');
  Route::get('settings/oauthapps/delete/{id}','MainController@notYetImplemented');

  Route::get('search/group','MainController@notYetImplemented');
  Route::get('search/people','MainController@notYetImplemented');
  Route::get('search/notice','MainController@notYetImplemented');
  Route::get('search/notice/rss','MainController@notYetImplemented');

  Route::get('attachment/{id}/thumbnail','MainController@notYetImplemented');
  Route::get('attachment/{id}','MainController@notYetImplemented');

  Route::get('notice/','MainController@notYetImplemented');
  Route::get('noticenew','MainController@notYetImplemented');
  Route::get('notice{id}/delete','MainController@notYetImplemented');
  Route::get('notice{id}','MainController@notYetImplemented');

  Route::get('conversation/{id}','MainController@notYetImplemented');

  Route::get('user/{id}','MainController@notYetImplemented');

  Route::get('tag','MainController@notYetImplemented');
  Route::get('tags','MainController@notYetImplemented');
  Route::get('tag/{hashtag}/rss','MainController@notYetImplemented');
  Route::get('tag/{hashtag}','MainController@notYetImplemented');

  Route::get('group/{id}/new','MainController@notYetImplemented');
  Route::get('group/{id}/edit','MainController@notYetImplemented');
  Route::get('group/{id}/join','MainController@notYetImplemented');
  Route::get('group/{id}/leave','MainController@notYetImplemented');
  Route::get('group/{id}/delete','MainController@notYetImplemented');
  Route::get('group/{id}/cancel','MainController@notYetImplemented');
  Route::get('group/{id}/approve','MainController@notYetImplemented');
  Route::get('group/{id}/members','MainController@notYetImplemented');
  Route::get('group/{id}/logo','MainController@notYetImplemented');
  Route::get('group/{id}/rss','MainController@notYetImplemented');
  Route::get('group/{id}/foaf','MainController@notYetImplemented');
  Route::get('group/{id}/blocked','MainController@notYetImplemented');
  Route::get('group/{id}/makeadmin','MainController@notYetImplemented');
  Route::get('group/{id}/members/pending','MainController@notYetImplemented');
  Route::get('group/{id}/id','MainController@notYetImplemented');

  // api redirects
  Route::get('api/{base}', 'ApiController@redirectToSubdomain');
  Route::get('api/{base}/{sub}', 'ApiController@redirectToSubdomain');
  Route::get('api/{base}/{sub}/{child}', 'ApiController@redirectToSubdomain');
  Route::get('api/{base}/{sub}/{child}/{grandchild}', 'ApiController@redirectToSubdomain');
  Route::get('api/{base}/{sub}/{child}/{grandchild}/{weirdo}', 'ApiController@redirectToSubdomain');

  // admin
  Route::get('panel/site','MainController@notYetImplemented');
  Route::get('panel/user','MainController@notYetImplemented');
  Route::get('panel/access','MainController@notYetImplemented');
  Route::get('panel/paths','MainController@notYetImplemented');
  Route::get('panel/sessions','MainController@notYetImplemented');
  Route::get('panel/sitenotice','MainController@notYetImplemented');
  Route::get('panel/licence','MainController@notYetImplemented');
  Auth::routes();


  Route::get('/asset/{path}', 'AvatarController@show')->where('path', '.*');

});

Route::get('/home', 'HomeController@index')->domain(config('app.app_domain'));

Route::group(['domain' => config('app.dev_subdomain'), 'middleware' => 'web'], function () {
  Route::get('/', 'DeveloperController@home');
  Route::get('home', 'DeveloperController@home');

  Route::get('style-guide', 'DeveloperController@styleGuideHome');
  Route::get('style-guide/status', 'DeveloperController@styleGuideStatus');
});

Route::group(['domain' => config('app.api_subdomain'), 'middleware' => 'web'], function () {

  Route::get('v0/statuses/public_timeline.{fmt}', 'ApiStatusController@publicTimeline');

  // this is not part of the Twitter API. Also may require authentication depending on server config!
  Route::get('v0/statuses/networkpublic_timeline.{fmt}', 'ApiStatusController@networkTimeline');

  Route::get('v0/statuses/friends_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/friends_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/home_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/home_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/user_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/user_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/mentions/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/mentions.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/replies/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/replies.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/mentions_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/mentions_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/friends/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/friends.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/followers/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/followers.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/show/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/show.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/update.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/destroy/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statuses/destroy.{fmt}','MainController@notYetImplemented');

  // START qvitter API additions
  Route::get('v0/attachment/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/attachment/checkhub.{fmt}','MainController@notYetImplemented');
  Route::get('v0/externalprofile/show.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/admins/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/account/update_link_color.{fmt}','MainController@notYetImplemented');
  Route::get('v0/account/update_background_color.{fmt}','MainController@notYetImplemented');
  Route::get('v0/account/register.{fmt}','MainController@notYetImplemented');
  Route::get('v0/check_nickname.{fmt}','MainController@notYetImplemented');

  // users
  Route::get('v0/users/show/{id}.{fmt}', 'ApiUserController@showId');
  Route::get('v0/users/show.{fmt}', 'ApiUserController@show');
  Route::get('v0/users/profile_image/{screen_name}.{fmt}','MainController@notYetImplemented');

  // friendships
  Route::get('v0/friendships/show.{fmt}','MainController@notYetImplemented');
  Route::get('v0/friendships/exists.{fmt}','MainController@notYetImplemented');
  Route::get('v0/friendships/create/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/friendships/create.{fmt}','MainController@notYetImplemented');
  Route::get('v0/friendships/destroy/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/friendships/destroy.{fmt}','MainController@notYetImplemented');

  // Social graph
  Route::get('v0/friends/ids/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/followers/ids/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/friends/{ids}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/followers/{ids}.{fmt}','MainController@notYetImplemented');

  // account
  Route::get('v0/account/verify_credentials.{fmt}','MainController@notYetImplemented');
  Route::get('v0/account/update_profile.{fmt}','MainController@notYetImplemented');
  Route::get('v0/account/update_profile_image.{fmt}','MainController@notYetImplemented');
  Route::get('v0/account/update_delivery_device.{fmt}','MainController@notYetImplemented');

  // special case where verify_credentials is called w/out a format
  Route::get('v0/account/verify_credentials','MainController@notYetImplemented');

  Route::get('v0/account/rate_limit_status.{fmt}','MainController@notYetImplemented');
  Route::get('v0/blocks/create/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/blocks/create.{fmt}','MainController@notYetImplemented');
  Route::get('v0/blocks/destroy/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/blocks/destroy.{fmt}','MainController@notYetImplemented');
  Route::get('v0/help/test.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/version.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/config.{fmt}','MainController@notYetImplemented');
  Route::get('v0/gnusocial/version.{fmt}','MainController@notYetImplemented');
  Route::get('v0/gnusocial/config.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/show/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/show.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/join/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/join.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/leave/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/leave.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/is_member.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/list/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/list.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/list_all.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/membership/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/create.{fmt}','MainController@notYetImplemented');
  Route::get('v0/statusnet/groups/update/{id}.{fmt}','MainController@notYetImplemented');

  // conversation (aka threaded status)
  Route::get('v0/statusnet/conversation/{id}.{fmt}','MainController@notYetImplemented');

  // Lists (people tags)
  Route::get('v0/lists/list.{fmt}','MainController@notYetImplemented');
  Route::get('v0/lists/memberships.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/lists/memberships.{fmt}','MainController@notYetImplemented');
  Route::get('v0/lists/subscriptions.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/lists/subscriptions.{fmt}','MainController@notYetImplemented');
  Route::get('v0/lists.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/lists/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/lists.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/lists/{id}/statuses.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/{list_id}/members/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/{list_id}/members.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/{list_id}/subscribers/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v0/{user}/{list_id}/subscribers.{fmt}','MainController@notYetImplemented');

  // Tags
  Route::get('v0/statusnet/tags/timeline/{tag}.{fmt}','MainController@notYetImplemented');

  // media related
  Route::get('v0/statusnet/media/upload','MainController@notYetImplemented');
  Route::get('v0/statuses/update_with_media.json','MainController@notYetImplemented');

  // Twitter Media upload API v1.1
  Route::get('v0/media/upload.{fmt}','MainController@notYetImplemented');

  // search
  Route::get('v0/search.atom','MainController@notYetImplemented');
  Route::get('v0/search.json','MainController@notYetImplemented');
  Route::get('v0/trends.json','MainController@notYetImplemented');

  // oauth stuff
  Route::get('v0/oauth/request_token','MainController@notYetImplemented');
  Route::get('v0/oauth/access_token','MainController@notYetImplemented');
  Route::get('v0/oauth/authorize','MainController@notYetImplemented');

  Route::get('v1/statuses/public_timeline.{fmt}', 'ApiStatusController@publicTimeline');

  // this is not part of the Twitter API. Also may require authentication depending on server config!
  Route::get('v1/statuses/networkpublic_timeline.{fmt}', 'ApiStatusController@networkTimeline');

  Route::get('v1/statuses/friends_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/friends_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/home_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/home_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/user_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/user_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/mentions/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/mentions.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/replies/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/replies.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/mentions_timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/mentions_timeline.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/friends/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/friends.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/followers/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/followers.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/show/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/show.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/update.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/destroy/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statuses/destroy.{fmt}','MainController@notYetImplemented');

  // START qvitter API additions
  Route::get('v1/attachment/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/attachment/checkhub.{fmt}','MainController@notYetImplemented');
  Route::get('v1/externalprofile/show.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/admins/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/account/update_link_color.{fmt}','MainController@notYetImplemented');
  Route::get('v1/account/update_background_color.{fmt}','MainController@notYetImplemented');
  Route::get('v1/account/register.{fmt}','MainController@notYetImplemented');
  Route::get('v1/check_nickname.{fmt}','MainController@notYetImplemented');

  // users
  Route::get('v1/users/show/{id}.{fmt}', 'ApiUserController@showId');
  Route::get('v1/users/show.{fmt}', 'ApiUserController@show');
  Route::get('v1/users/profile_image/{screen_name}.{fmt}','MainController@notYetImplemented');

  // friendships
  Route::get('v1/friendships/show.{fmt}','MainController@notYetImplemented');
  Route::get('v1/friendships/exists.{fmt}','MainController@notYetImplemented');
  Route::get('v1/friendships/create/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/friendships/create.{fmt}','MainController@notYetImplemented');
  Route::get('v1/friendships/destroy/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/friendships/destroy.{fmt}','MainController@notYetImplemented');

  // Social graph
  Route::get('v1/friends/ids/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/followers/ids/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/friends/{ids}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/followers/{ids}.{fmt}','MainController@notYetImplemented');

  // account
  Route::get('v1/account/verify_credentials.{fmt}','MainController@notYetImplemented');
  Route::get('v1/account/update_profile.{fmt}','MainController@notYetImplemented');
  Route::get('v1/account/update_profile_image.{fmt}','MainController@notYetImplemented');
  Route::get('v1/account/update_delivery_device.{fmt}','MainController@notYetImplemented');

  // special case where verify_credentials is called w/out a format
  Route::get('v1/account/verify_credentials','MainController@notYetImplemented');

  Route::get('v1/account/rate_limit_status.{fmt}','MainController@notYetImplemented');
  Route::get('v1/blocks/create/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/blocks/create.{fmt}','MainController@notYetImplemented');
  Route::get('v1/blocks/destroy/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/blocks/destroy.{fmt}','MainController@notYetImplemented');
  Route::get('v1/help/test.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/version.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/config.{fmt}','MainController@notYetImplemented');
  Route::get('v1/gnusocial/version.{fmt}','MainController@notYetImplemented');
  Route::get('v1/gnusocial/config.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/timeline/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/show/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/show.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/join/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/join.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/leave/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/leave.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/is_member.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/list/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/list.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/list_all.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/membership/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/create.{fmt}','MainController@notYetImplemented');
  Route::get('v1/statusnet/groups/update/{id}.{fmt}','MainController@notYetImplemented');

  // conversation (aka threaded status)
  Route::get('v1/statusnet/conversation/{id}.{fmt}','MainController@notYetImplemented');

  // Lists (people tags)
  Route::get('v1/lists/list.{fmt}','MainController@notYetImplemented');
  Route::get('v1/lists/memberships.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/lists/memberships.{fmt}','MainController@notYetImplemented');
  Route::get('v1/lists/subscriptions.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/lists/subscriptions.{fmt}','MainController@notYetImplemented');
  Route::get('v1/lists.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/lists/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/lists.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/lists/{id}/statuses.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/{list_id}/members/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/{list_id}/members.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/{list_id}/subscribers/{id}.{fmt}','MainController@notYetImplemented');
  Route::get('v1/{user}/{list_id}/subscribers.{fmt}','MainController@notYetImplemented');

  // Tags
  Route::get('v1/statusnet/tags/timeline/{tag}.{fmt}','MainController@notYetImplemented');

  // media related
  Route::get('v1/statusnet/media/upload','MainController@notYetImplemented');
  Route::get('v1/statuses/update_with_media.json','MainController@notYetImplemented');

  // Twitter Media upload API v1.1
  Route::get('v1/media/upload.{fmt}','MainController@notYetImplemented');

  // search
  Route::get('v1/search.atom','MainController@notYetImplemented');
  Route::get('v1/search.json','MainController@notYetImplemented');
  Route::get('v1/trends.json','MainController@notYetImplemented');

  // oauth stuff
  Route::get('v1/oauth/request_token','MainController@notYetImplemented');
  Route::get('v1/oauth/access_token','MainController@notYetImplemented');
  Route::get('v1/oauth/authorize','MainController@notYetImplemented');
});
