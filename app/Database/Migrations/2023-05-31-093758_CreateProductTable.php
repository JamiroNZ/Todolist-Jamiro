<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTodoTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "nama" => [
                "type"=> "VARCHAR",
                "constraint" => "100",
            ],
            "judul" => [
                "type"=> "VARCHAR",
                "constraint" => "100",
            ],
            "description" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "status" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('todos', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('todos', true); //If Exists drop table products
    }
}