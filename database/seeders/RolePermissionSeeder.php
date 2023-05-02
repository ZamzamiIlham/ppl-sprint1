<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(["name" => "Admin"]);
        $supplier = Role::create(["name" => "Supplier"]);
        $owner = Role::create(["name" => "Pemilik Usaha"]);

        $create_raw_product = Permission::create(["name" => "Membuat Bahan Baku"]);
        $read_raw_product = Permission::create(["name" => "Melihat Bahan Baku"]);
        $update_raw_product = Permission::create(["name" => "Mengubah Bahan Baku"]);
        $delete_raw_product = Permission::create(["name" => "Menghapus Bahan Baku"]);

        $owner->givePermissionTo([$create_raw_product, $read_raw_product, $update_raw_product, $delete_raw_product]);
    }
}
