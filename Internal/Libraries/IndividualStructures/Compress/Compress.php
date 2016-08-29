<?php namespace ZN\IndividualStructures;

use Support, Exceptions;

class InternalCompress extends \Requirements implements CompressInterface
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
    // Drivers
    //--------------------------------------------------------------------------------------------------------
    //
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $drivers =
    [
        'bz',
        'gz',
        'lzf',
        'rar',
        'zip',
        'zlib'
    ];
    
    //--------------------------------------------------------------------------------------------------------
    // Protected Compress
    //--------------------------------------------------------------------------------------------------------
    //
    // Sürücü bilgisi 
    //
    // @var  string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $compress;
    
    //--------------------------------------------------------------------------------------------------------
    // Construct
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string $driver
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function __construct(String $driver = NULL)
    {   
        $this->config = config('IndividualStructures', 'compress');

        nullCoalesce($driver, $this->config['driver']);
        
        Support::driver($this->drivers, $driver);

        $this->compress = $this->_drvlib($driver);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Extract
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string $source
    // @param  string $target
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function extract(String $source, String $target = NULL, String $password = NULL) : Bool
    {
        if( ! is_file($source) )
        {
            return Exceptions::throws('Error', 'fileParameter', '1.(source)');
        }

        return $this->compress->extract($source, $target, $password);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Write
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string $file
    // @param string $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function write(String $file, String $data) : Bool
    {
        if( ! is_scalar($data) )
        {
            return Exceptions::throws('Error', 'valueParameter', '2.(data)');  
        }

        return $this->compress->write($file, $data);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Read
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $file
    //
    //--------------------------------------------------------------------------------------------------------
    public function read(String $file) : String
    {
        return $this->compress->read($file);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Do
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function do(String $data) : String
    {
        return $this->compress->do($data);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Undo
    //--------------------------------------------------------------------------------------------------------
    //
    // @param string  $data
    //
    //--------------------------------------------------------------------------------------------------------
    public function undo(String $data) : String
    {
        return $this->compress->undo($data);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Driver                                                                       
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $driver
    // @return object                                    
    //                                                                                           
    //--------------------------------------------------------------------------------------------------------
    public function driver(String $driver) : InternalCompress
    {
        return new self($driver);
    }

    //--------------------------------------------------------------------------------------------------------
    // Protected Drvlib                                                                       
    //--------------------------------------------------------------------------------------------------------
    //
    // @param  string $driver
    // @return object                                    
    //                                                                                           
    //--------------------------------------------------------------------------------------------------------
    protected function _drvlib($driver)
    {
        return uselib('ZN\IndividualStructures\Compress\Drivers\\'.$driver.'Driver');
    }
}