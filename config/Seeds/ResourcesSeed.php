<?php
use Migrations\AbstractSeed;

/**
 * Resources seed.
 */
class ResourcesSeed extends AbstractSeed
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
                'name' => 'Login',
                'description' => 'Login',
                'controller' => 'Peoples',
                'action' => 'login',
                'status' => 1,
                'order' => 1,
                'plugin' => 'General'
            ],
            [
                'id' => 2,
                'name' => 'Logout',
                'description' => 'Logout',
                'controller' => 'Peoples',
                'action' => 'logout',
                'status' => 1,
                'order' => 2,
                'plugin' => 'General'
            ],
            [
                'id' => 3,
                'name' => 'Trocar senha',
                'description' => 'Trocar Senha',
                'controller' => 'Peoples',
                'action' => 'changePassword',
                'status' => 1,
                'order' => 3,
                'plugin' => 'General'
            ],
            [
                'id' => 4,
                'name' => 'Solicitar nova senha',
                'description' => 'Solicitar nova senha',
                'controller' => 'Peoples',
                'action' => 'passwordReset',
                'status' => 1,
                'order' => 4,
                'plugin' => 'General'
            ],
            [
                'id' => 5,
                'name' => 'Nova Pessoa',
                'description' => '',
                'controller' => 'Peoples',
                'action' => 'add',
                'status' => 1,
                'order' => 5,
                'plugin' => 'General'
            ],
            [
                'id' => 6,
                'name' => 'Permite visualizar empresas vinculadas a pessoa',
                'description' => 'Permite visualizar empresas vinculadas a pessoa',
                'controller' => 'Peoples',
                'action' => 'getCompanies',
                'status' => 1,
                'order' => 6,
                'plugin' => 'General'
            ],
            [
                'id' => 7,
                'name' => 'Permite Trocar de Empresa',
                'description' => 'Permite que a pessoa acessando o sistema troque de empresa',
                'controller' => 'Peoples',
                'action' => 'changeCompany',
                'status' => 1,
                'order' => 7,
                'plugin' => 'General'
            ],
            [
                'id' => 8,
                'name' => 'Permite editar cadastro de pessoa.',
                'description' => 'Permite que a pessoa acessando o sistema troque de empresa',
                'controller' => 'Peoples',
                'action' => 'changeCompany',
                'status' => 1,
                'order' => 8,
                'plugin' => 'General'
            ],
            [
                'id' => 9,
                'name' => 'Permite editar cadastro de pessoa.',
                'description' => 'Permite que a pessoa acessando o sistema troque de empresa',
                'controller' => 'Peoples',
                'action' => 'edit',
                'status' => 1,
                'order' => 9,
                'plugin' => 'General'
            ],
            [
                'id' => 10,
                'name' => 'Permite visualizar pessoas.',
                'description' => 'Permite visualizar pessoas por paramentros, tipo, id, perfil, status e nome',
                'controller' => 'Peoples',
                'action' => 'get',
                'status' => 1,
                'order' => 10,
                'plugin' => 'General'
            ],
            [
                'id' => 11,
                'name' => 'Permite excluir pessoas.',
                'description' => 'Permite excluir pessoas',
                'controller' => 'Peoples',
                'action' => 'delete',
                'status' => 1,
                'order' => 11,
                'plugin' => 'General'
            ],
            [
                'id' => 12,
                'name' => 'Permite Visualizar Produtos.',
                'description' => 'Permite visualizar Produtos',
                'controller' => 'Companies',
                'action' => 'get',
                'status' => 1,
                'order' => 12,
                'plugin' => 'Business'
            ],
            [
                'id' => 13,
                'name' => 'Permite adicionar Produtos.',
                'description' => 'Permite adicionar Produtos',
                'controller' => 'Products',
                'action' => 'add',
                'status' => 1,
                'order' => 13,
                'plugin' => 'Business'
            ],
            [
                'id' => 14,
                'name' => 'Permite editar Produtos.',
                'description' => 'Permite editar Produtos',
                'controller' => 'Products',
                'action' => 'edit',
                'status' => 1,
                'order' => 14,
                'plugin' => 'Business'
            ],
            [
                'id' => 15,
                'name' => 'Permite deleter Produtos.',
                'description' => 'Permite editar Produtos',
                'controller' => 'Products',
                'action' => 'delete',
                'status' => 1,
                'order' => 15,
                'plugin' => 'Business'
            ],
            [
                'id' => 16,
                'name' => 'Permite visualizar empresas.',
                'description' => 'Permite visualizar empresas',
                'controller' => 'Companies',
                'action' => 'get',
                'status' => 1,
                'order' => 16,
                'plugin' => 'General'
            ],
            [
                'id' => 17,
                'name' => 'Permite editar empresas.',
                'description' => 'Permite editar empresas',
                'controller' => 'Companies',
                'action' => 'edit',
                'status' => 1,
                'order' => 17,
                'plugin' => 'General'
            ],
            [
                'id' => 18,
                'name' => 'Permite add empresas.',
                'description' => 'Permite add empresas',
                'controller' => 'Companies',
                'action' => 'add',
                'status' => 1,
                'order' => 18,
                'plugin' => 'General'
            ],
            [
                'id' => 19,
                'name' => 'Permite excluir empresas.',
                'description' => 'Permite excluir empresas',
                'controller' => 'Companies',
                'action' => 'delete',
                'status' => 1,
                'order' => 19,
                'plugin' => 'General'
            ],
            [
                'id' => 20,
                'name' => 'Permite dar entrada em stock',
                'description' => 'Permite dar entrada em stock',
                'controller' => 'Products',
                'action' => 'stockIn',
                'status' => 1,
                'order' => 20,
                'plugin' => 'Business'
            ],
            [
                'id' => 21,
                'name' => 'Permite dar saída em stock',
                'description' => 'Permite dar saída em stock',
                'controller' => 'Products',
                'action' => 'stockOut',
                'status' => 1,
                'order' => 21,
                'plugin' => 'Business'
            ],
            [
                'id' => 22,
                'name' => 'Permite visualizar produtos',
                'description' => 'Permite visualizar produtos',
                'controller' => 'Products',
                'action' => 'get',
                'status' => 1,
                'order' => 22,
                'plugin' => 'Business'
            ],
        ];

        $table = $this->table('resources');
        $table->insert($data)->save();
    }
}
