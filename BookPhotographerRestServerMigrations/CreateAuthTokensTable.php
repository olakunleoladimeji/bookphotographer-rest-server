<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BookPhotographerRestServerMigrations;
use Phinx\Migration\AbstractMigration;
/**
 * Description of CreateAuthTokensTable
 *
 * @author admin
 */
class CreateAuthTokensTable extends AbstractMigration {
    function change() {
        $table = $this->table("auth_tokens");
        $table->addColumn("user_id", "integer");
        $table->addColumn("token", "string");
        $table->addColumn("created_at", "datetime", array("default" => 'CURRENT_TIMESTAMP'));
        $table->addForeignKey("user_id", "users", "id", array("delete" => 'NO_ACTION', "update" => 'NO_ACTION'));
    }
}
