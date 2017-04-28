<?php

use Phinx\Migration\AbstractMigration;

class CreatePeoples extends AbstractMigration
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
        $table = $this->table('peoples');
        $table->addColumn('name', 'string',[
            'limit' => 255
        ]);
        
        $table->addColumn('email', 'string',[
            'limit' => 80
        ]);
        
        $table->addColumn('password', 'string',[
            'limit' => 255
        ]);
        
        $table->addColumn('cpf', 'string',[
            'limit' => 11
        ]);
        
        $table->addColumn('cnpj', 'string',[
            'limit' => 14
        ]);
        
        $table->addColumn('phone', 'string',[
            'limit' => 11
        ]);
        
        $table->addColumn('cell_phone', 'string',[
            'limit' => 11
        ]);
        
        $table->addColumn('birthdate', 'date');
        
        $table->addColumn('city', 'string',[
            'limit' => 45
        ]);
        
        $table->addColumn('state', 'string',[
            'limit' => 45
        ]);

        $table->addColumn('zipcode', 'string',[
            'limit' => 8
        ]);
        
        $table->addColumn('created', 'datetime');
        
        $table->addColumn('modified', 'datetime');
        
        $table->addColumn('avatar', 'string',[
            'limit' => 255
        ]);
        $table->create();
    }
    
    public function down()
    {
        $this->dropTable('peoples');
    }
}
