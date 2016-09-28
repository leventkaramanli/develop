<?php namespace ZN\IndividualStructures\Cache\Drivers;

use ZN\IndividualStructures\Abstracts\CacheDriverMappingAbstract;

class MemcacheDriver extends CacheDriverMappingAbstract
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
    // Construct
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param void
    //
    //--------------------------------------------------------------------------------------------------------
    public function __construct()
    {
        \Support::func('memcache_add_server', 'Memcache');
    }
        
    //--------------------------------------------------------------------------------------------------------
    // Connect
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  array $settings
    //
    //--------------------------------------------------------------------------------------------------------
    public function connect(Array $settings = NULL)
    {   
        $config = \Config::get('IndividualStructures', 'cache')['driverSettings'];
        
        $config = ! empty($settings)
                  ? $settings
                  : $config['memcache'];
            
        $connect = @memcache_add_server($config['host'], $config['port'], $config['weight']);       
        
        if( empty($connect) )
        {
            die(getErrorMessage('IndividualStructures', 'cache:unsupported', 'Memcache'));
        }
        
        return true;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Select
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string $key
    // @param  mixed  $compressed
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function select($key, $compressed = NULL)
    {
        $data = memcache_get($key);
        
        return ( is_array($data) ) 
               ? $data[0] 
               : $data;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Insert
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string   $key
    // @param  variable $var
    // @param  numeric  $time
    // @param  mixed    $compressed
    // @return bool
    //
    //--------------------------------------------------------------------------------------------------------
    public function insert($key, $var, $time, $compressed)
    {
        if( $compressed !== true )
        {
            $var = [$var, time(), $time];
        }
        
        return memcache_set($key, $var, 0, $time);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Delete
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string $key
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function delete($key)
    {
        return memcache_delete($key);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Increment
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string  $key
    // @param  numeric $increment
    // @return void
    //
    //--------------------------------------------------------------------------------------------------------
    public function increment($key, $increment)
    {
        return memcache_increment($key, $increment);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Decrement
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string  $key
    // @param  numeric $decrement
    // @return void
    //
    //--------------------------------------------------------------------------------------------------------
    public function decrement($key, $decrement)
    {
        memcache_decrement($key, $decrement);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Clean
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  void
    // @return void
    //
    //--------------------------------------------------------------------------------------------------------
    public function clean()
    {
        return memcache_flush();
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Info
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  mixed  $info
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function info($type = NULL)
    {
        return memcache_get_stats(true);
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Get Meta Data
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param  string  $key
    // @return mixed
    //
    //--------------------------------------------------------------------------------------------------------
    public function getMetaData($key)
    {
        $stored = memcache_get($key);
        
        if( count($stored) !== 3 )
        {
            return false;
        }
        
        list($data, $time, $expire) = $stored;
        
        return 
        [
            'expire' => $time + $expire,
            'mtime'  => $time,
            'data'   => $data
        ];
    }
}