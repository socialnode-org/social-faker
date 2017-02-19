<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\{Avatar,User};
use Storage;
use \Identicon\Identicon;

class AvatarGeneratorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:avatars';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate missing avatars';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::doesntHave('avatars')->take(200)->get();

        foreach($users as $user) {
            $identicon = new Identicon();
            $original = $identicon->getImageData($user->email, 512);
            $path = storage_path('app/public/avatar/' . $user->id . '/' . date('y'));
            $storage_path = 'public/avatar/' . $user->id . '/' . date('y') . '/';
            if( false == is_dir($path) ) {
                if( false == is_dir( storage_path('app/public/avatar/'.$user->id) ) ) {
                    mkdir(storage_path('app/public/avatar/'.$user->id));
                    
                    if( false == is_dir($path) ) {
                        mkdir($path);
                    }
                }
            }
            $name = str_random(8) . '_' . str_random(18) . '.png';

            Storage::put($storage_path . $name, $original);

            $avatar = new Avatar;
            $avatar->profile_id = $user->id;
            $avatar->original = true;
            $avatar->width = 512;
            $avatar->height = 512;
            $avatar->mediatype = 'image/png';
            $avatar->filename = $storage_path . $name;
            $avatar->save();

        }
    }
}
