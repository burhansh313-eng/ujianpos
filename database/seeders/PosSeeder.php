<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat 100 Data Supplier
        for ($i = 1; $i <= 100; $i++) {
            DB::table('suppliers')->insert([
                'name' => "Supplier Jaya $i",
                'address' => "Jalan Industri No. $i, Kota POS",
                'phone' => "081234567$i",
                'email' => "kontak$i@supplier.com",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 2. Buat 200 Data Sales
        for ($i = 1; $i <= 200; $i++) {
            DB::table('sales')->insert([
                'supplier_id' => rand(1, 100), // Mengambil ID supplier secara acak
                'total' => rand(50000, 1000000), // Total belanja acak antara 50rb - 1jt
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
