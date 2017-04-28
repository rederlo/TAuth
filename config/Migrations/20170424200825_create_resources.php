<?php

use Phinx\Migration\AbstractMigration;

class CreateResources extends AbstractMigration
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
        $table = $this->table('resources');

        $table->addColumn('name', 'string', [
            'limit' => 255
        ]);
        
        $table->addColumn('description', 'text');

        $table->addColumn('plugin', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('controller', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('action', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('params', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('slug', 'string', [
            'limit' => 255
        ]);
        
        $table->addColumn('status', 'integer');

        $table->addColumn('order', 'integer');

        $table->addColumn('parent_id', 'integer', [
            'null' => true
        ]);

        $table->addColumn('created', 'datetime');

        $table->addColumn('modified', 'datetime');

        $table->addForeignKey('parent_id', 'resources', 'id');
        $table->create();
    }
    
    public function down()
    {
        $this->dropTable('resources');
    }
}
