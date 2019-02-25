<?php

use Illuminate\Database\Seeder;

class DivisionsSeed extends Seeder
{    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $divisions = array(
            array('Viñedos', 'Libramiento Norponiente'),
            array('Sonterra', 'Libramiento Norponiente'),
            array('El Refugio', 'Anillo Vial Fray Junipero Serra')
        );

        foreach ($divisions as list($description, $address)) {
            DB::table('divisions')->insert([
                'description' => $description,
                'address' => $address,
                'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s')            
            ]);
        }
    }
}
