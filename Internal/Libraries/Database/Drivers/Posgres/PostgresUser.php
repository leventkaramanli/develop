<?php namespace ZN\Database\Drivers;

use ZN\Database\DriverUser;

class PostgresUser extends DriverUser
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Copyright  : (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Protected Postgre Quote Options
    //--------------------------------------------------------------------------------------------------------
    // 
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $postgreQuoteOptions = 
    [
        'PASSWORD',
        'VALID UNTIL'
    ];
    
    //--------------------------------------------------------------------------------------------------------
    // name()
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $name: USER()
    //
    //--------------------------------------------------------------------------------------------------------
    public function name($name)
    {
        $this->name = $name;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // option()
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $name
    // @param string $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function option($option, $value)
    {
        if( ! empty($this->postgreQuoteOptions[strtoupper($option)]) )
        {
            $value = presuffix($value, '\'');   
        }
        
        $this->parameters['option'] = $option.' '.$value;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // create()
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $user
    // @param array  $parameters
    //
    //--------------------------------------------------------------------------------------------------------
    public function create($user)
    {
        $query = 'CREATE USER '.
                 $user.
                 ( ! empty($this->parameters['option']) ? ' '.$this->parameters['option'] : '' );

        $this->_resetQuery();

        return $query;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // drop()
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $user
    //
    //--------------------------------------------------------------------------------------------------------
    public function drop($user)
    {
        $query = 'DROP USER '.$user;

        $this->_resetQuery();

        return $query;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // alter()
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $user
    // @param array  $parameters
    //
    //--------------------------------------------------------------------------------------------------------
    public function alter($user)
    {
        $query = 'ALTER USER '.
                 $user.
                 ( ! empty($this->parameters['option']) ? ' '.$this->parameters['option'] : '' );

        $this->_resetQuery();

        return $query;
    }
}