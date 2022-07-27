<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $data = [
            'descricao' => 'Computador',
            'valor'    => 100.00,
        ];

        // Simple Queries
        $this->db->query('INSERT INTO produtos (descricao, valor) VALUES(:descricao:, :valor:)', $data);

    }
}