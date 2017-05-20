<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BookPhotographerRestServerMigrations;
use Phinx\Migration\AbstractMigration;
/**
 * Description of CreatePhotographerGalleryTable
 *
 * @author admin
 */
class CreatePhotographerGalleryTable extends AbstractMigration {
    function change() {
        $table = $this->table("photographer_gallery");
    }
}
