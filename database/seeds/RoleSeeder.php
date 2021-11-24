{<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =  array('Admin','User');
        foreach($roles as $role){
            $Role_added = Role::where('role', '=', $role)->first();
            if(empty($Role_added)){
                $values = ['role' => $role];
                Role::create($values);
            } else {
                echo "Ship Role";
            }
        }
    }
}
