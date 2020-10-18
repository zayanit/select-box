<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Category A'], 
            ['name' => 'Category B']
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}