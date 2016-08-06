<?php
namespace ZN\Services;

class InternalCookie extends \Requirements implements CookieInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Const CONFIG_NAME
	//----------------------------------------------------------------------------------------------------
	// 
	// @const string
	//
	//----------------------------------------------------------------------------------------------------
	const CONFIG_NAME  = 'Services:cookie';
	
	//----------------------------------------------------------------------------------------------------
	// Time
	//----------------------------------------------------------------------------------------------------
	// 
	// @var int
	//
	//----------------------------------------------------------------------------------------------------
	protected $time;
	
	//----------------------------------------------------------------------------------------------------
	// Path
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $path;
	
	//----------------------------------------------------------------------------------------------------
	// Domain
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $domain;
	
	//----------------------------------------------------------------------------------------------------
	// Secure
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $secure;
	
	//----------------------------------------------------------------------------------------------------
	// httpOnly
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $httpOnly;
	
	//----------------------------------------------------------------------------------------------------
	// Construct
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  void
	// @return bool
	//
	//----------------------------------------------------------------------------------------------------
	public function __construct()
	{
		\Session::start();

		parent::__construct();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Session Cookie Common
	//----------------------------------------------------------------------------------------------------
	// 
	// @methods
	//
	//----------------------------------------------------------------------------------------------------
	use SessionTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Time
	//----------------------------------------------------------------------------------------------------
	// 
	// @param int $time
	//
	//----------------------------------------------------------------------------------------------------
	public function time(Int $time)
	{
		$this->time = $time;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Path 
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $path
	//
	//----------------------------------------------------------------------------------------------------
	public function path(String $path)
	{
		$this->path = $path;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Domain 
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $domain
	//
	//----------------------------------------------------------------------------------------------------
	public function domain(String $domain)
	{
		$this->domain = $domain;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Secure 
	//----------------------------------------------------------------------------------------------------
	// 
	// @param bool $secure
	//
	//----------------------------------------------------------------------------------------------------
	public function secure(Bool $secure = false)
	{
		$this->secure = $secure;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Http Only 
	//----------------------------------------------------------------------------------------------------
	// 
	// @param bool $httpOnly
	//
	//----------------------------------------------------------------------------------------------------
	public function httpOnly(Bool $httpOnly = true)
	{
		$this->httpOnly = $httpOnly;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Insert
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name
	// @param mixed  $value
	// @param int    $time
	//
	//----------------------------------------------------------------------------------------------------
	public function insert(String $name = NULL, $value = NULL, Int $time = NULL)
	{
		if( ! empty($name) ) 
		{	
			$this->name($name);
		}
		
		if( ! empty($value) ) $this->value($value);	
		if( ! empty($time) )  $this->time($time);				
		
		if( ! empty($this->encode) )
		{
			if( isset($this->encode['name']) )
			{
				if( isHash($this->encode['name']) )
				{
					$this->name = hash($this->encode['name'], $this->name);		
				}		
			}
			
			if( isset($this->encode['value']) )
			{
				if( isHash($this->encode['value']) )
				{
					$this->value = hash($this->encode['value'], $this->value);	
				}
			}
		}
		
		$cookieConfig = $this->config;
		
		if( empty($this->time) ) 		$this->time 	= $cookieConfig['time'];
		if( empty($this->path) ) 		$this->path 	= $cookieConfig['path'];
		if( empty($this->domain) ) 		$this->domain 	= $cookieConfig['domain'];
		if( empty($this->secure) ) 		$this->secure 	= $cookieConfig['secure'];
		if( empty($this->httpOnly) ) 	$this->httpOnly = $cookieConfig['httpOnly'];
		
		if( ! isset($this->encode['name']) )
		{
			$encode = $cookieConfig["encode"];
			
			if( $encode === true )
			{
				$this->name = md5($this->name);
			}
			elseif( is_string($encode) )
			{
				if( isHash($encode) )
				{
					$this->name = hash($encode, $this->name);		
				}	
			}
		}
		
		if( setcookie($this->name, $this->value, time() + $this->time, $this->path, $this->domain, $this->secure, $this->httpOnly) )
		{
			if( $this->regenerate === true )
			{
				session_regenerate_id();	
			}
			
			$this->defaultVariable();
			$this->cookieDefaultVariable();
			
			return true;	
		}
		else
		{
			return \Exceptions::throws('Cookie', 'setError');
		}
	} 
	
	//----------------------------------------------------------------------------------------------------
	// Select
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function select(String $name)
	{
		if( isset($this->encode['name']) )
		{
			if(isHash($this->encode['name']))
			{
				$name = hash($this->encode['name'], $name);		
				$this->encode = [];	
			}		
		}
		else
		{
			$encode = $this->config['encode'];
			
			if( $encode === true )
			{
				$name = md5($name);
			}
			elseif( is_string($encode) )
			{
				if( isHash($encode) )
				{
					$name = hash($encode, $name);		
				}	
			}
		}
		
		if( ! empty($this->decode) )
		{
			$this->decode = NULL;	
		}
		
		if( isset($_COOKIE[$name]) )
		{
			return $_COOKIE[$name];
		}
		else
		{
			return false;	
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Select All
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function selectAll()
	{
		if( ! empty($_COOKIE) ) 
		{
			return $_COOKIE;
		}
		else 
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Delete
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function delete(String $name, String $path = NULL)
	{
		$cookieConfig = $this->config;
		
		if( ! empty($path) )
		{
			$this->path = $path;
		}
		
		if( empty($this->path) )
		{	
			$this->path = $cookieConfig["path"];
		}
		
		if( isset($this->encode['name']) )
		{
			if( isHash($this->encode['name']) )
			{
				$name = hash($this->encode['name'], $name);	
				$this->encode = [];	
			}		
		}
		else
		{
			$encode = $cookieConfig["encode"];
			
			if( $encode === true )
			{
				$name = md5($name);
			}
			elseif( is_string($encode) )
			{
				if( isHash($encode) )
				{
					$name = hash($encode, $name);		
				}	
			}
		}
		
		if( isset($_COOKIE[$name]) )
		{ 	
			setcookie($name, '', (time() - 1), $this->path); 
			$this->path = NULL;
		}
		else
		{ 
			return false;		
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Delete All
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function deleteAll()
	{	
		$path = $this->config['path'];
		
		if( ! empty($_COOKIE) ) foreach( $_COOKIE as $key => $val )
		{			
			setcookie($key, '', time() - 1, $path);
		}
		else 
		{
			return false;
		}
	}

	//----------------------------------------------------------------------------------------------------
	// Protected Methods
	//----------------------------------------------------------------------------------------------------
	// 
	// cookieDefaultVariable()
	//
	//----------------------------------------------------------------------------------------------------
	protected function cookieDefaultVariable()
	{
		$this->time 	  = NULL;
		$this->path 	  = NULL;
		$this->domain     = NULL;
		$this->secure     = NULL;
		$this->httpOnly   = NULL;
	}
}