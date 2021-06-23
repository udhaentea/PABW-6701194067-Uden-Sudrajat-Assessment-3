<?php

namespace App\Models;

use CodeIgniter\Model;

class Jadwalmodel extends Model
{
    protected $table = 'jadwal_imam_jumat';
    protected $allowedFields = ['id_imamjumat', 'namaimam', 'tanggal', 'userid'];

    public function getRandomId()
    {
        $query = $this->db->table('arsitek');
        $query->select('Jadwal.id_imamjumat');
        $query->orderBy('Jadwal.id_imamjumat', 'RANDOM');
        $query->limit(1);

        $result = $query->get()->getRow();

        if (isset($result)) {
            $id = $result->id;
        } else {
            $id = 0;
        }
        return $id;
    }
}
