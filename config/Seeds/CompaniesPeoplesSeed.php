<?php
use Migrations\AbstractSeed;

/**
 * CompaniesPeoples seed.
 */
class CompaniesPeoplesSeed extends AbstractSeed
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
                'company_id' => 1,
                'people_id' => 1,
                'people_status_id' => 1,
                'profile_id' => 1,
                'people_type_id' => 1
            ]
        ];

        $table = $this->table('companies_peoples');
        $table->insert($data)->save();
    }
}
