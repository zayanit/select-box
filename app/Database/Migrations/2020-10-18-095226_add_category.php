<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategory extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],
			'parent_id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'default' => 0
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'sub_level' => [
				'type' => 'INT',
				'unsigned' => true,
				'default' => 0
			],
			'created_at datetime default current_timestamp',
    		'updated_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('categories');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('categories');
	}
}
