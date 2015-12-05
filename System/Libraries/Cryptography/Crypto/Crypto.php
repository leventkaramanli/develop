<?php
class __USE_STATIC_ACCESS__Crypto implements CryptoInterface
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
	// Protected Crypto
	//----------------------------------------------------------------------------------------------------
	//
	// Sürücü bilgisi 
	//
	// @var  string
	//
	//----------------------------------------------------------------------------------------------------
	protected $crypto;
	
	//----------------------------------------------------------------------------------------------------
	// Construct
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $driver
	// @return bool
	//
	//----------------------------------------------------------------------------------------------------
	public function __construct($driver = '')
	{
		$this->crypto = Driver::run('Encode', $driver);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Call Method
	//----------------------------------------------------------------------------------------------------
	// 
	// __call()
	//
	//----------------------------------------------------------------------------------------------------
	use CallUndefinedMethodTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Driver Method
	//----------------------------------------------------------------------------------------------------
	// 
	// driver()
	//
	//----------------------------------------------------------------------------------------------------
	use DriverMethodTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Encrypt Method Başlangıç
	//----------------------------------------------------------------------------------------------------

	/******************************************************************************************
	* ENCRYPT                                                                                 *
	*******************************************************************************************
	| Genel Kullanım: Dizgeyi şifreler.										 		          |
	
	  @param string $data
	  @param array  $settings -> cipher, key, mode, iv
	  
	  @return string
	|          																				  |
	******************************************************************************************/
	public function encrypt($data = '',  $settings = array())
	{
		if( ! is_scalar($data) )
		{
			return Error::set('Error', 'scalarParameter', '1.(data)');	
		}
		
		if( ! is_array($settings) )
		{
			return Error::set('Error', 'arrayParameter', '2.(settings)');	
		}
		
		return $this->crypto->encrypt($data,  $settings);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Encrypt Method Bitiş
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Decrypt Method Başlangıç
	//----------------------------------------------------------------------------------------------------

	/******************************************************************************************
	* DECRYPT                                                                                 *
	*******************************************************************************************
	| Genel Kullanım: Şifrelenmiş dizgeyi çözer.							 		          |
	
	  @param string $data
	  @param array  $settings -> cipher, key, mode, iv
	  
	  @return string
	|          																				  |
	******************************************************************************************/
	public function decrypt($data = '', $settings = array())
	{
		if( ! is_scalar($data) )
		{
			return Error::set('Error', 'scalarParameter', '1.(data)');	
		}
		
		if( ! is_array($settings) )
		{
			return Error::set('Error', 'arrayParameter', '2.(settings)');	
		}
		
		return $this->crypto->decrypt($data,  $settings);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Decrypt Method Bitiş
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Keygen Method Başlangıç
	//----------------------------------------------------------------------------------------------------

	/******************************************************************************************
	* KEYGEN                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Belirtilen uzunlukta anahtar oluşturur.				 		          |
	
	  @param string $length = 8
	  
	  @return string
	|          																				  |
	******************************************************************************************/
	public function keygen($length = 8)
	{
		if( ! is_numeric($length) )
		{
			return Error::set('Error', 'numericParameter', '1.(length)');	
		}
		
		return $this->crypto->keygen($length);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Keygen Method Bitiş
	//----------------------------------------------------------------------------------------------------
}