<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("password")
        ]);

        $supplier = User::create([
            "name" => "Supplier 1",
            "email" => "supplier1@gmail.com",
            "password" => bcrypt("password")
        ]);

        $owner = User::create([
            "name" => "Owner 1",
            "email" => "owner1@gmail.com",
            "password" => bcrypt("password")
        ]);

        $admin->assignRole("Admin");
        $supplier->assignRole("Supplier");
        $owner->assignRole("Pemilik Usaha");
    }
}
