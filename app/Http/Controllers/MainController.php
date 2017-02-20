<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	const nyi = ['error' => 404, 'msg' => 'Not yet implemented'];

	/**
	 * Redirect /main to /main/all
	 *
	 **/
    public function baseRedirect() { return redirect('/main/all'); }
    
    public function notYetImplemented() { return response()->json(self::nyi); }

    public function otp() { return response()->json(self::nyi); }
    public function registerConfirmation() { return response()->json(self::nyi); }
    public function emailAddressConfirmation() { return response()->json(self::nyi); }
    public function recoverPasswordConfirmation() { return response()->json(self::nyi); }
    public function blockProfileConfirmation() { return response()->json(self::nyi); }
    
    public function supSeconds() { return response()->json(self::nyi); }
    public function login() { return response()->json(self::nyi); }
    public function logout() { return response()->json(self::nyi); }
    public function register() { return response()->json(self::nyi); }
    public function subscribe() { return response()->json(self::nyi); }
    public function unsubscribe() { return response()->json(self::nyi); }
    public function cancelsubscription() { return response()->json(self::nyi); }
    public function approvesub() { return response()->json(self::nyi); }
    public function confirmaddress() { return response()->json(self::nyi); }
    public function recoverpassword() { return response()->json(self::nyi); }
    public function invite() { return response()->json(self::nyi); }
    public function sup() { return response()->json(self::nyi); }
    public function block() { return response()->json(self::nyi); }
    public function unblock() { return response()->json(self::nyi); }
    public function subedit() { return response()->json(self::nyi); }
    public function groupblock() { return response()->json(self::nyi); }
    public function groupunblock() { return response()->json(self::nyi); }
    public function sandbox() { return response()->json(self::nyi); }
    public function unsandbox() { return response()->json(self::nyi); }
    public function silence() { return response()->json(self::nyi); }
    public function unsilence() { return response()->json(self::nyi); }
    public function grantrole() { return response()->json(self::nyi); }
    public function revokerole() { return response()->json(self::nyi); }
    public function deleteuser() { return response()->json(self::nyi); }
    public function geocode() { return response()->json(self::nyi); }
    public function version() { return response()->json(self::nyi); }
    public function backupaccount() { return response()->json(self::nyi); }
    public function deleteaccount() { return response()->json(self::nyi); }
    public function restoreaccount() { return response()->json(self::nyi); }
    public function top() { return response()->json(self::nyi); }
    public function publicFeed() { return response()->json(self::nyi); }
    public function all() { return response()->json(self::nyi); }
    public function tagProfileId() { return response()->json(self::nyi); }
    public function tagprofile() { return response()->json(self::nyi); }

    /**
     * Return xml response of site xrds
     *
     * @return xml
     * @author 
     **/
    public function xrds()
    { 
		$content = view('main.xrds');

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}
