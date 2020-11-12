<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addFiled([
			'nim'			=> [
					'type'				=> 'VARCHAR',
					'constraint'		=> '9',			
			],
			'nama'			=> [
					'type'				=> 'VARCHAR',
					'constraint'		=> '100',	
			],
			'jenis_kelamin'	=> [
					'type'				=> 'ENUM', //UNTUK PILIHAN LANGSUNG DIJELASIN PILIHANNYA APA
					'constraint'		=> ['Pria','wanita'],	
					'default'			=> 'Pria',
			],
			'agama'			=> [
					'type'				=> 'INT',
					'constraint'		=> 11,
					'unsigned'			=> TRUE,
			],
			'alamat'		=> [
					'type'				=> 'TEXT',
			],
			'foto'			=> [
					'type'				=> 'TEXT',
			],
			'tempat_lahir'	=> [
					'type'				=> 'VARCHAR',
					'constraint'		=> '100',
			],
			'tanggal_lahir'	=> [
					'type'				=> 'date'
					//migrate untuk mengulangi refresh untuk menghapus ulang 

			]
					
		]);
		$this->forge->addKey('kode_nim',true);
		$this->forge->addForeignKey('kode_agama','agama','kode_agama','CASCADE','CASCADE');
		$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('prodi');
	}
}
