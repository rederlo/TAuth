<?php
use Cake\Auth\DefaultPasswordHasher;
use Migrations\AbstractSeed;

/**
 * Peoples seed.
 */
class PeoplesSeed extends AbstractSeed
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
            'name' => 'Rodrigo',
            'email' => 'rodrigo@personaliza.com.br',
            'password' => (new DefaultPasswordHasher)->hash('123465'),
        ];

        $table = $this->table('peoples');
        $table->insert($data)->save();
    }
}
