<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->ask('Enter your name: ');
        $email = $this->ask('Enter your email: ');
        $password = $this->ask('Ennter your password: ');

        DB::table('users')->insert(['name' => $name, 'email' => $email, 'password' => Hash::make($password)]);

        $this->info("new user created for $name");
    }
}
