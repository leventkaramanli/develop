<?php namespace ZN\Services\Remote;

use Support, Converter, Exceptions;

class InternalCURL extends \CallController implements CURLInterface
{
    //--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Telif Hakkı: Copyright (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------
    
    //--------------------------------------------------------------------------------------------------------
    // Init
    //--------------------------------------------------------------------------------------------------------
    // 
    // @var resource
    //
    //--------------------------------------------------------------------------------------------------------
    protected $init;
     
    //--------------------------------------------------------------------------------------------------------
    // Options
    //--------------------------------------------------------------------------------------------------------
    // 
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $options = [];

    //--------------------------------------------------------------------------------------------------------
    // Construct
    //--------------------------------------------------------------------------------------------------------
    // 
    // @var void
    //
    //--------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        Support::func('curl_exec', 'CURL');
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Init
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $url
    //
    //--------------------------------------------------------------------------------------------------------
    public function init(String $url = NULL) : InternalCURL
    {   
        $this->init = curl_init($url);
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Exec
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function exec() : Bool
    {
        if( ! is_resource($this->init) )
        {
            return false;
        }
        
        curl_setopt_array($this->init, $this->options);

        $this->options = [];
        
        if( is_resource($this->init) )
        {
            return curl_exec($this->init);
        }
        
        return false;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Escape
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $url
    //
    //--------------------------------------------------------------------------------------------------------
    public function escape(String $str) : String
    {
        if( ! is_resource($this->init) )
        {
            return Exceptions::throws('Error', 'resourceParameter', '1.(ch)');
        }
        
        return curl_escape($this->init, $str);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Unescape
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $url
    //
    //--------------------------------------------------------------------------------------------------------
    public function unescape(String $str) : String
    {
        if( ! is_resource($this->init) )
        {
            return Exceptions::throws('Error', 'resourceParameter', '1.(ch)');
        }
        
        return curl_unescape($this->init, $str);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Info
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $opt
    //
    //--------------------------------------------------------------------------------------------------------
    public function info(String $opt)
    {
        if( ! is_resource($this->init) )
        {
            return Exceptions::throws('Error', 'resourceParameter', '1.(ch)');
        }
        
        return curl_getinfo($this->init, Converter::toConstant($opt, 'CURLINFO_'));
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Error
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function error() : String
    {
        if( ! is_resource($this->init) )
        {
            return Exceptions::throws('Error', 'resourceParameter', '1.(ch)');
        }
        
        return curl_error($this->init);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Errno
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function errno() : Int
    {
        if( ! is_resource($this->init) )
        {
            return Exceptions::throws('Error', 'resourceParameter', '1.(ch)');
        }
        
        return curl_errno($this->init);
    }

    //--------------------------------------------------------------------------------------------------------
    // Pause
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param int $bitmask
    //
    //--------------------------------------------------------------------------------------------------------
    public function pause(Int $bitmask = 0) : Int
    {
        if( ! empty($this->init) )
        {
            return curl_pause($this->init, $bitmask);
        }

        return false;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Reset
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function reset() : Bool
    {
        if( ! empty($this->init) )
        {
            curl_reset($this->init);

            return true;
        }

        return false;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Option
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $options
    // @param mixed  $value
    //
    //--------------------------------------------------------------------------------------------------------
    public function option(String $options, $value) : InternalCURL
    {       
        $this->options[Converter::toConstant($options, 'CURLOPT_')] = $value;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Close
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function close() : Bool
    {
        $init = $this->init;
        
        if( is_resource($init) )
        {
            $this->init = NULL;
            
            curl_close($init);

            return true;
        }

        return false;
    }

    //--------------------------------------------------------------------------------------------------------
    // Errval
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param int $errno
    //
    //--------------------------------------------------------------------------------------------------------
    public function errval(Int $errno = 0) : String
    {
        return curl_strerror($errno);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Version
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param int $errno
    //
    //--------------------------------------------------------------------------------------------------------
    public function version($data = NULL)
    {
        $version = curl_version();
        
        if( $data === NULL )
        {
            return $version;    
        }
        else
        {
            if( isset($version[$data]) )
            {
                return $version[$data];
            }   
            else
            {
                return false;   
            }
        }
    }
    
    //--------------------------------------------------------------------------------------------------------
    // __destruct()
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function __destruct()
    {
        $this->close(); 
    }
}