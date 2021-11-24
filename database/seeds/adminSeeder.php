<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Admin;
class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user_added = Admin::first();
            if(empty($user_added)){
                $values = ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin@123'), 'mobile' => 9784384493, 'created_at' => Carbon::now(),'updated_at' => Carbon::now()];
                $user = Admin::create($values);
            } else {
                echo "Ship Admin";
            }

    }
}
