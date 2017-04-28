<?php
use Migrations\AbstractSeed;

/**
 * Profiles seed.
 */
class ProfilesSeed extends AbstractSeed
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
            'id' => 1,
            'name' => 'Administrador',
            'color' => '#cecece',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'status' => 1,
            'company_id' => 1,
            'slug' => 'AD'
        ];

        $table = $this->table('profiles');
        $table->insert($data)->save();
    }
}
