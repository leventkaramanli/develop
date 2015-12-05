<?php
class __USE_STATIC_ACCESS__CDN implements CDNInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	use CallUndefinedMethodTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Image
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function get($configName = '', $name = '')
	{
		if( ! is_string($name) ) 
		{
			return Error::set('Error', 'stringParameter', 'symbolName');
		}
		
		$data = array_change_key_case(Config::get('Cdn', $configName));
		
		$name = strtolower($name);

		if( isset($data[$name]) )
		{ 
			return $data[$name]; 
		}
		else
		{ 
			return $data;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Image
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function image($name = '')
	{
		return $this->get('images', $name);
	}	
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function style($name = '')
	{
		return $this->get('styles', $name);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Script
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function script($name = '')
	{
		return $this->get('scripts', $name);
	}	
	
	//----------------------------------------------------------------------------------------------------
	// Font
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function font($name = '')
	{
		return $this->get('fonts', $name);
	}
	
	//----------------------------------------------------------------------------------------------------
	// File
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function file($name = '')
	{
		return $this->get('files', $name);
	}
}