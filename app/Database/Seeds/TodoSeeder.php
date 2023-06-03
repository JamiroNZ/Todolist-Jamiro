<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'judul' => 'web',
            'description'    => 'belajar web dari awal',
            'status' => 'in progres',
        ];

        // Simple Queries
        $this->db->table('todos')->insert($data);
        
        $data = [
            'judul' => 'web',
            'description'    => 'belajar web sekarang di miigrate',
            'status' => 'in progres',
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);
    }
}
