<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'           => [
				'type'          => 'INT',
				'constraint'    => 11,
				'unsigned'      => TRUE,
				'auto_increment' => TRUE
			],
			'nama'     => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'alamat' => [
				'type'         => 'VARCHAR',
				'constraint'    => '255'
			],
			'created_at' => [
				'type'         => 'DATETIME',
				'null'         => TRUE
			],
			'update_at' => [
				'type'        => 'DATETIME',
				'null'        => TRUE
			]
		]);
		$this->forge->addkey('id', TRUE);
		$this->forge->createTable('orang');
	}

	public function down()
	{
		$this->forge->dropTable('orang');
	}
}
