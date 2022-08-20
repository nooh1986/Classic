<?php

namespace Database\Seeders;

use App\Models\Laborer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaborerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laborers')->delete();

        $laborers = ['مصطفى', 'زهير عجم', 'شاكر ططري', 'عبد الرحمن حيموق'];
        
        foreach($laborers as $laborer)
        {
            Laborer::create(['name' => $laborer]);
        }
    }
}
