<?php
namespace TAuth\Controller;

class AuthBuilder
{
    private $_config = [];
    
    public function __construct(array $config)
    {
        $this->_config = [
            'storage' => 'Memory',
            'authenticate' => [
                'Form' => [
                    'userModel' => $config['model'],
                    'fields' => $config['scope_auth']
                ],
                'ADmad/JwtAuth.Jwt' => [
                    'header' => 'authorization',
                    'userModel' => $config['model'],
                    'fields' => $config['scope_jwt'],
                    'parameter' => 'token',
                    'queryDatasource' => true,
                ]
            ],
            'unauthorizedRedirect' => false,
            'checkAuthIn' => 'Controller.initialize',
            'loginAction' => false,
            'authorize' => ['Controller'],
        ];
    }
    
    public function getConfig(){
        return $this->_config;
    }
}
