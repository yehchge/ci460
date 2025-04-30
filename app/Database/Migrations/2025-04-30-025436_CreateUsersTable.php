<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 100,

            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'city' => [
                'type' => 'varchar',
                'constraint' => 100
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('pagination_users');
    }

    public function down()
    {
        $this->forge->dropTable('pagination_users');
    }
}
