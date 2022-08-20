<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MachineSeeder extends Seeder
{
    public function run()
    {
        DB::table('machines')->delete();

        $machines = ['1', '2', '3', '4', '5', '6', '7', '8' , '9', '10', '11', '12', '13', '14', '15', '16' , '17' , '18' , '19' , '20'];
        
        foreach($machines as $machine)
        {
            Machine::create(['name' => $machine]);
        }
    }
}
