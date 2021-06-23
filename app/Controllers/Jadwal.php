<?php

namespace App\Controllers;

use App\Models\Jadwalmodel;

class Jadwal extends BaseController
{
    public function index()
    {
        $Jadwal = new Jadwalmodel();

        $data = [
            'title' => 'Daftar Jadwal',
            'Jadwal'  => $Jadwal->findAll(),
        ];
        return view('Jadwal/index', $data);
    }

    public function create()
    {
        $model = new Jadwalmodel();

        $data = array(
            'title'     => 'Tambah Data Jadwal',
        );
        echo view('Jadwal/create', $data);
    }


    public function edit($id = null)
    {
        $model = new Jadwalmodel();
        $data = array(
            'title'     => 'Ubah Data Jadwal',
            'edit'      => $model->where('id', $id)->first()
        );
        echo view('Jadwal/edit', $data);
    }

    public function delete($id = null)
    {
        $model = new Jadwalmodel();
        $status = $model->where('id', $id)->delete($id);

        if ($status) {
            session()->setFlashdata('message_success', 'Data berhasil dihapus!');
        } else {
            session()->setFlashdata('message_danger', 'Data gagal dihapus!');
        }

        return redirect()->to(base_url('jadwal_imam_jumat'));
    }
}
