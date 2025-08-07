<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // disable foreign yang ada di table
        Schema::disableForeignKeyConstraints();
        // reset table user
        User::truncate();
        // enable foreign yang ada di table
        Schema::enableForeignKeyConstraints();
        $data = [
            [
                'nama_lengkap' => 'Super Admin',
                'email' => 'super_admin@gmail.com',
                'password' => Hash::make('admin123'),
                'hak_akses' => 'admin',
            ],
            [
                'nama_lengkap' => 'Andre Law',
                'email' => 'andrelaw.com',
                'password' => Hash::make('andre123'),
                'hak_akses' => 'kasir',
            ]
        ];
        // multiple inser ke table user
        foreach ($data as $value) {
            User::create([
                'nama_lengkap' => $value['nama_lengkap'],
                'email' => $value['email'],
                'password' => $value['password'],
                'hak_akses' => $value['hak_akses'],
            ]);
        }


        // input data ke table user menggunakan Eloquent
        // User::create([
        //     'nama_lengkap' => 'Kevin Sanjaya',
        //     'email' => 'admin3@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'hak_akses' => 'admin',
        // ]);


        //input data ke table user query builder
        // DB::table('users')->insert([
        //     'nama_lengkap' => 'Kevin Sanjaya',
        //     'email' => 'admin2@gmail.com',
        //     'password' => Hash::make('admin'),
        //     'hak_akses' => 'admin',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}