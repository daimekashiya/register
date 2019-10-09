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
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'phone'=>'031313131',
                'address'=>'ABC STREET',
                'fax'=>'1352544'
            ],
            [
                'name' => 'SAMPLE USER',
                'email' => 'user@user.com',
                'password' => Hash::make('user'),
                'phone'=>'031313131',
                'address'=>'ABC STREET',
                'fax'=>'1352544'
            ],




        ]);
    }
}
