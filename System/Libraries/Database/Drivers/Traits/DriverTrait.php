<?php
trait DatabaseDriverTrait
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
	// Config
	//----------------------------------------------------------------------------------------------------
	// 
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	private $config;
	
	//----------------------------------------------------------------------------------------------------
	// Connect
	//----------------------------------------------------------------------------------------------------
	// 
	// @var callable
	//
	//----------------------------------------------------------------------------------------------------
	private $connect;
	
	//----------------------------------------------------------------------------------------------------
	// Query
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	private $query;

	//----------------------------------------------------------------------------------------------------
	// Variable Types
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  void
	// @return array
	//
	//----------------------------------------------------------------------------------------------------
	public function vartypes()
	{
		return $this->variableTypes;
	}
	
	/******************************************************************************************
	* RESULT                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü için sorgu sonucu kayıtlar bilgisini verir.                	  | 
	|          																				  |
	******************************************************************************************/
	public function result($type = 'object')
	{
		if( empty($this->query) ) 
		{
			return false;
		}
		
		$rows = [];
		
		while( $data = $this->fetchAssoc() )
		{
 			if( $type === 'object' )
 			{
 				$data = (object)$data;
 			}
 			
 			$rows[] = $data;
		}
		
		return $rows;
	}
	
	/******************************************************************************************
	* RESULT ARRAY                                                                            *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü için sorgu sonucu kayıtlar bilgisini dizi olarak verir.       | 
	|          																				  |
	******************************************************************************************/
	public function resultArray()
	{
		return $this->result('array');
	}
	
	
	/******************************************************************************************
	* ROW                                                                                     *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü için sorgu sonucu tek bir kayıt bilgisini verir.              | 
	|          																				  |
	******************************************************************************************/
	public function row()
	{
		if( ! empty($this->query) )
		{
			$data = $this->fetchAssoc();
			
			return (object)$data;
		}
		else
		{
			return false;
		}
	}
	
	/******************************************************************************************
	* LIST DATABASES                                                                          *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü için bu yöntem desteklenmemektedir.                 		  | 
	|          																				  |
	******************************************************************************************/
	public function listDatabases()
	{
		// Ön tanımlı sorgu kullanıyor.
		return false;
	}
	
	/******************************************************************************************
	* LIST TABLES                                                                             *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü için bu yöntem desteklenmemektedir.                 		  | 
	|          																				  |
	******************************************************************************************/
	public function listTables()
	{
		// Ön tanımlı sorgu kullanıyor.
		return false;
	}
	
	/******************************************************************************************
	* INSERT ID                                                                               *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir.                				  | 
	|          																				  |
	******************************************************************************************/
	public function insertId()
	{
		// Desteklenmiyor. 
		return false; 
	}
	
	/******************************************************************************************
	* BACKUP                                                                                  *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir.                				  | 
	|          																				  |
	******************************************************************************************/
	public function backup($filename = '')
	{ 
		// Ön tanımlı sorgu kullanıyor.
		return false; 
	}
	
	/******************************************************************************************
	* TRUNCATE                                                                                *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir.                				  | 
	|          																				  |
	******************************************************************************************/
	public function truncate($table = '')
	{ 
		// Ön tanımlı sorgu kullanıyor.
		return false; 
	}
	
	/******************************************************************************************
	* ADD COLUMN                                                                              *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir.                				  | 
	|          																				  |
	******************************************************************************************/
	public function addColumn()
	{
		// Ön tanımlı sorgu kullanıyor. 
		return false; 
	}
	
	/******************************************************************************************
	* DROP COLUMN                                                                             *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir.                				  | 
	|          																				  |
	******************************************************************************************/
	public function dropColumn()
	{ 
		// Ön tanımlı sorgu kullanıyor.
		return false; 
	}
	
	/******************************************************************************************
	* RENAME COLUMN                                                                           *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir. 				  				  | 
	|          																				  |
	******************************************************************************************/
	public function renameColumn()
	{
		// Ön tanımlı sorgu kullanıyor. 
		return false; 
	}
	
	/******************************************************************************************
	* MODIFY COLUMN                                                                           *
	*******************************************************************************************
	| Genel Kullanım: Bu sürücü bu yöntemi desteklememektedir.			    				  | 
	|          																				  |
	******************************************************************************************/
	public function modifyColumn()
	{
		// Ön tanımlı sorgu kullanıyor. 
		return false; 
	}
	 
	//----------------------------------------------------------------------------------------------------
	// Var Type
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $type
	// @param mixed  $len
	// @param bool   $output: true -> $len(id), false -> $len id  
	//
	//----------------------------------------------------------------------------------------------------
	private function cvartype($type = '', $len = '', $output = true)
	{
	 	if( $len === '' )
		{
			return " $type ";	
		}
		elseif( $output === true )
		{
			return " $type($len) ";	
		}
		else
		{
			return " $type $len ";		
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Operator
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $operator
	//
	//----------------------------------------------------------------------------------------------------
	public function operator($operator = 'like')
	{
		return isset( $this->operators[$operator] )
		       ? $this->operators[$operator]
			   : false;
	}

	//----------------------------------------------------------------------------------------------------
	// Statements
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $state
	// @param mixed  $len
	// @param bool   $output: true -> $len(id), false -> $len id  
	//
	//----------------------------------------------------------------------------------------------------
	public function statements($state = '', $len = '', $type = true)
	{
		if( isset( $this->statements[$state] ) )
		{
			if( strstr($this->statements[$state], '%') )
			{
				$vartype = str_replace('%', $len, $this->statements[$state]);
				
				return $this->cvartype($vartype);
			}
			
			return $this->cvartype($this->statements[$state], $len, $type);
		}
		else
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Var Type
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $vartype
	// @param mixed  $len
	// @param bool   $output: true -> $len(id), false -> $len id  
	//
	//----------------------------------------------------------------------------------------------------
	public function variableTypes($vartype = '', $len = '', $type = true)
	{
		return isset( $this->variableTypes[$vartype] )
		       ? $this->cvartype($this->variableTypes[$vartype], $len, $type)
			   : false;
	}
}