<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jadwal extends Migration
{
	public function up()
	{
		# MASING-MASING KOLOM PADA TABEL Jadwal
		$this->forge->addField([
			'id_imamjumat'          => [
				'type'           => 'INT',
				'constraint'     => '100',
				'unsigned'       => true
			],
			'namaimam'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			],
			'tanggal'      => [
				'type'           => 'DATE'
			],
			'userid'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '50'
			]
		]);

		# MENAMBAHKAN PRIMARY KEY --> id
		$this->forge->addKey('id', TRUE);

		# MEMBUAT TABEL Jadwal
		$this->forge->createTable('Jadwal', TRUE);
	}

	public function down()
	{
		# MENGHAPUS TABEL Jadwal
		$this->forge->dropTable('Jadwal');
	}
}
