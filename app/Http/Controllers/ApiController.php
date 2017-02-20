<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function redirectToSubdomain(Request $request)
    {
      $path = substr($request->path(), 4);
      $domain = config('app.api_subdomain');
      $redirect = "http://$domain/v1/$path";
      return redirect($redirect);
    }

}
