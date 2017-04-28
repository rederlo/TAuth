<?php
use Migrations\AbstractSeed;

/**
 * PeopleTypes seed.
 */
class PeoplesTypesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Cliente',
                'code' => 'CL'
            ],
            [
                'id' => 2,
                'name' => 'Funcionario',
                'code' => 'FU'
            ],
            [
                'id' => 3,
                'name' => 'Fornecedor',
                'code' => 'FO'
            ],
            [
                'id' => 5,
                'name' => 'Administrador',
                'code' => 'ADA'
            ],
        ];

        $table = $this->table('peoples_types');
        $table->insert($data)->save();
    }
}
