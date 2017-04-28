<?php

use Migrations\AbstractSeed;

/**
 * PoplesStatuses seed.
 */
class PeoplesStatusesSeed extends AbstractSeed
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
                'name' => 'Ativo',
                'status' => 1,
                'slug' => 'AT'
            ],
            [
                'id' => 2,
                'name' => 'Bloqueado',
                'status' => 1,
                'slug' => 'BL'
            ],
            [
                'id' => 3,
                'name' => 'Cancelado',
                'status' => 1,
                'slug' => 'CA'
            ],
            [
                'id' => 4,
                'name' => 'Excluido',
                'status' => 1,
                'slug' => 'EX'
            ]
        ];

        $table = $this->table('peoples_statuses');
        $table->insert($data)->save();
    }
}
