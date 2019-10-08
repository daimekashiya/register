<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'ADMIN WEBMASTER',
                'email' => 'admin@2enapps.my',
                'password' => Hash::make('admin'),
                'phone'=>'031313131',
                'address'=>'ABC STREET',
                'fax'=>'1352544'

            ],

        ]);
    }
}
