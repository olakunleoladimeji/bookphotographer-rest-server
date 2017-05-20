<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BookPhotographerRestServerMigrations;

use Phinx\Migration\AbstractMigration;
/**
 * Description of UsersMigration
 *
 * @author admin
 */
class UsersMigration extends AbstractMigration  {
    function change() {
        $table = $this->table("users");
        $table->addColumn("username", "string", array("limit" => 20));
        $table->addColumn("user_type", "integer")->addForeignKey("user_type", "user_types", "id");
        $table->addColumn("email", "string");
        $table->addColumn("password", "md5");
        $table->addColumn("created_at", "datetime", array('default' => 'CURRENT_TIMESTAMP'));
        $table->addColumn("last_login", "datetime");
        $table->addColumn("updated_at", "datetime");
    }
    
    
}
