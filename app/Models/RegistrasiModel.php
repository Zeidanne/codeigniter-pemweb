<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModel extends Model
{
    public function getSource()
    {
        $source = array(
            array(
                'name' => 'Paijo',
                'email' => 'paijo@gmail.com',
                'status' => 'Active',
                'regdate' => '2222-09-01',
            ),

            array(
                'name' => 'Zidan',
                'email' => 'Zidan@gmail.com',
                'status' => 'Active',
                'regdate' => '2222-01-01',
            ),
        );
        return $source;
    }
}
