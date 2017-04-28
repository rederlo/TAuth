# TAuth
## in config/bootstrap.php
```php

//Enable Cors

DispatcherFactory::add('TAuth.Cors', ['priority' => 1]);
//Enable plugin

Plugin::load('TAuth', ['bootstrap' => false, 'routes' => false]);
```


## in src/AppController.php
```php
use \TAuth\Controller\AuthTrait;
```


```php
    public function initialize()
    {
        parent::initialize();
        $auth = new \TAuth\Controller\AuthBuilder([
            'model' => 'peoples',
            'scope_auth' => ['username' => 'email'],
            'scope_jwt' => ['username' => 'id']
        ]);
        
        $this->loadComponent('Auth', $auth->getConfig());
    }
```

## is get user id
```php
    public function getUserId()
    {
        return $this->getUser();
    }
```

## Generate database
```php
bin/cake migrations migrate --plugin TAuth
```

## Generate data in tables
```php
bin/cake migrations seed --seed <fileSeed> --plugin TAuth
```

New User
--------

```php
public function add()
{
    $users = $this->Users->newEntity();
    if($this->request->is('post')){
        $users = $this->Users->patchEntity($users, $this->request->data());
        if ($this->Users->save($users)) {
            $auth = new AuthFactory();
            //Expected Type Entity
            $auth->create($users);
            $token = $auth->build();
        }
    }
    $this->set(compact('token'));
    $this->set('_serialize', ['token']);
}
```

Login 
-----

```php
public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Usernamme or password ínvalid, try again.'));
    }
}
    
```

Authorized 
----------
```php
/**
* @param $user
* @return bool
*/
public function isAuthorized($user)
{
    return (new Authorize($this, $user['id']))->exec();
}
```


Params token
------------

```php
$auth = new AuthFactory();
$auth->create($users, ['group_id' => $group_id]);
```

GetParamsToken
--------------

```php
/**
* @return Array
*/
$this->getParamsHeader();
```