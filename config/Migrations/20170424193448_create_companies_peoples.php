<?php

use Phinx\Migration\AbstractMigration;

class CreateCompaniesPeoples extends AbstractMigration
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
        $table = $this->table('companies_peoples');
        $table->addColumn('company_id','integer');
        $table->addColumn('people_id','integer');
        $table->addColumn('people_status_id','integer');
        $table->addColumn('profile_id','integer');
        $table->addColumn('people_type_id','integer');
        
        $table->addForeignKey('company_id', 'companies', 'id');
        $table->addForeignKey('people_id', 'peoples', 'id');
        $table->addForeignKey('people_status_id', 'peoples_statuses', 'id');
        $table->addForeignKey('profile_id', 'profiles', 'id');
        $table->addForeignKey('people_type_id', 'peoples_types', 'id');
        $table->create();
    }
    
    public function down()
    {
        $this->dropTable('companies_peoples');
    }
}
