<?php

use App\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            [
                'nama_barang' => 'asdasd',
                'harga' => 1000,
                'stok' => 1000,
                'keterangan' => 'asdhasjd',
                'created_at' => now()
            ],
            [
                'nama_barang' => 'asdasd',
                'harga' => 1000,
                'stok' => 1000,
                'keterangan' => 'asdhasjd',
                'created_at' => now()
            ],
        ];

        Barang::insert($barangs);
    }
}
