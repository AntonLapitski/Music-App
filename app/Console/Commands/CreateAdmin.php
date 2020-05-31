<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $users = User::where([
            'email' => config('app.email'),
        ])->get();

        if ($users->count() === 0) {
            echo 'inside';
            $user = new User();
            $user->name = config('app.username');
            $user->email = config('app.email');
            $user->password = Hash::make(config('app.password'));
            $user->save();
        }

        if ($users->count() > 0){
            echo "User is already created!!! \n";
        }

        echo "Operation was successful. \n";
    }
}
