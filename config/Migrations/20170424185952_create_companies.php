<?php

use Phinx\Migration\AbstractMigration;

class CreateCompanies extends AbstractMigration
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
        $table = $this->table('companies');
        $table->addColumn('name', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('fantasy', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('address', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('city', 'string', [
            'limit' => 45
        ]);

        $table->addColumn('state', 'string', [
            'limit' => 45
        ]);

        $table->addColumn('zipcode', 'string', [
            'limit' => 8
        ]);

        $table->addColumn('cnpj', 'string', [
            'limit' => 14
        ]);

        $table->addColumn('cpf', 'string', [
            'limit' => 11
        ]);

        $table->addColumn('state_registration', 'string', [
            'limit' => 12
        ]);

        $table->addColumn('logo', 'string', [
            'limit' => 255
        ]);

        $table->addColumn('status', 'integer', [
            'default' => 1
        ]);

        $table->addColumn('email', 'string', [
            'limit' => 80
        ]);

        $table->addColumn('people_id', 'integer');
        $table->addForeignKey('people_id', 'peoples','id');

        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
    
    public function down()
    {
        $this->dropTable('companies');
    }
}
