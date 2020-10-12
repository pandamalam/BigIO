<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StuffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stuffArr = [
            'Ayam',
            'Ikan',
            'Udang',
            'Cabai',
            'Kepiting',
            'Bayam',
            'Bawang',
            'Kangkung',
            'Jahe',
            'Kunyit',
        ];
        foreach($stuffArr as $stuff) { 
            DB::table('stuffs')->insert([
                'stuff_name' => $stuff,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente maxime cumque quod impedit ipsum fugiat provident iure, explicabo assumenda delectus recusandae asperiores dolorum, pariatur odit nihil eos atque voluptate ipsa.',
            ]);
        }
    }
}
