<?php

use Phinx\Migration\AbstractMigration;

class CreatePeoplesStatuses extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('peoples_statuses');
        $table->addColumn('name','string', [
            'limit' => 255
        ]);
        
        $table->addColumn('created','datetime');
        
        $table->addColumn('modified','datetime');
        
        $table->addColumn('status','integer', [
            'default' => 1
        ]);
        
        $table->addColumn('slug','string', [
            'limit' => 80
        ]);
        $table->create();
    }
    
    public function down()
    {
        $this->dropTable('peoples_statuses');
    }
}
