<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;

use League\Glide\Signatures\SignatureFactory;
use League\Glide\Signatures\SignatureException;


class AvatarController extends Controller
{
    public function show(Filesystem $filesystem, $path)
    {
		try {
		    // Set complicated sign key
		    $signkey = config('app.key');

		    // Validate HTTP signature
		    SignatureFactory::create($signkey)->validateRequest($path, $_GET);

		} catch (SignatureException $e) {
		    // Handle error
		}

	    $server = ServerFactory::create([
	        'response' => new LaravelResponseFactory(app('request')),
	        'source' => $filesystem->getDriver(),
	        'cache' => $filesystem->getDriver(),
	        'max_image_size' => 400*400,
	        'cache_path_prefix' => '.cache',
	        'base_url' => 'asset',
	    ]);

	    return $server->getImageResponse($path, request()->all());
    }
}
