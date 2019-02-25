<?php

use Illuminate\Database\Seeder;
use App\Division;
class CondominumsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $condominums = array(
            array('Viñedos', 'Maipo'),
            array('Viñedos', 'Tosacana'),
            array('Viñedos', 'Veneto'),
            array('Sonterra', 'Paseo Natura I'),
            array('Sonterra', 'Paseo Natura II'),
            array('Sonterra', 'Villa Nápoles I'),            
            array('El Refugio', 'Torres Oasis'),            
            array('El Refugio', 'Torres Marbella')
        );

        foreach ($condominums as list($division, $description)) {
            $division = '%' . str_replace(' ', '%', $division) . '%';
            $division_id =  Division::where('description', 'like', $division)
                                    ->first();
            DB::table('condominiums')->insert([
                'division_id' => $division_id->id,
                'description' => $description,
                'created_at' => date('Y-m-d H:m:s'),
           		'updated_at' => date('Y-m-d H:m:s')  
            ]);                                    
        }

    }
}
