<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate record
        DB::table('contacts')->truncate();

        $akuns = [
            ['id' => 1, 'name' => '1', 'email' => 'ASET','address' => 'malang','number' => '0002'],
            ['id' => 2, 'name' => '2', 'email' => 'KEWAJIBAN','address' => 'malang','address' => 'malang','number' => '0222'],
           ['id' => 3, 'name' => '1', 'email' => 'Ok','address' => 'malang','number' => '0002'],
            ['id' => 4, 'name' => '1', 'email' => 'oy','address' => 'malang','number' => '0002']
        ];

        // insert batch
        DB::table('contacts')->insert($akuns);
    }
}