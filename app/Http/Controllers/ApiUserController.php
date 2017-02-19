<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use App\{Notice,User};
use App\Social\Transformers\{UserProfileTransformer};

class ApiUserController extends Controller
{
    public function showId($id, $fmt = 'json')
    {
    	$user = User::findOrFail($id);
		$manager = new Manager();
		$resource = new Item($user, new UserProfileTransformer());
		$res = $manager->createData($resource)->toArray();

		return response()->json($res['data'], 200, [], JSON_PRETTY_PRINT);
    }

    public function show(Request $request, $fmt = 'json')
    {
    	$user = User::whereUsername($request->username)->firstOrFail();
		$manager = new Manager();
		$resource = new Item($user, new UserProfileTransformer());
		$res = $manager->createData($resource)->toArray();
		
		return response()->json($res['data'], 200, [], JSON_PRETTY_PRINT);
    }
}
