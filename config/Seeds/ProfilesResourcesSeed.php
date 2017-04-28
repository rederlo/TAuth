<?php
use Migrations\AbstractSeed;

/**
 * ProfilesResources seed.
 */
class ProfilesResourcesSeed extends AbstractSeed
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
                'profile_id' => 1,
                'resource_id' => 1,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 2,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 3,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 4,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 5,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 6,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 7,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 8,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 9,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 10,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 11,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 12,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 13,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 14,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 15,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 16,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 17,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 18,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 19,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 20,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 21,
            ],
            [
                'profile_id' => 1,
                'resource_id' => 22,
            ],
        ];

        $table = $this->table('profiles_resources');
        $table->insert($data)->save();
    }
}
