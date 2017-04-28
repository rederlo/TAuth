<?php
use Migrations\AbstractSeed;

/**
 * Companies seed.
 */
class CompaniesSeed extends AbstractSeed
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
                'name' => 'Personaliza',
                'fantasy' => 'Personaliza Marketing',
                'address' => 'Av. Joao gualberto',
                'people_id' => 1
            ]
        ];

        $table = $this->table('companies');
        $table->insert($data)->save();
    }
}
