<?php
namespace source\UserData\Accounts;

class UserAdmin extends User
{
    private $password;
    
    
    public function __construct($email, $password, $nome = null)
    {
        parent::__construct($email, $nome);
        $this->password = $password;
    }
    
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

}

