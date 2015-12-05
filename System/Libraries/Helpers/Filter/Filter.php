<?php
class __USE_STATIC_ACCESS__Filter implements FilterInterface
{
	/***********************************************************************************/
	/* FILTER LIBRARY						                   	                       */
	/***********************************************************************************/
	/* Yazar: Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	/* Site: www.zntr.net
	/* Lisans: The MIT License
	/* Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	/*
	/* Sınıf Adı: Filter
	/* Versiyon: 1.4
	/* Tanımlanma: Statik
	/* Dahil Edilme: Gerektirmez
	/* Erişim: Filter::, $this->Filter, zn::$use->Filter, uselib('Filter')
	/* Not: Büyük-küçük harf duyarlılığı yoktur.
	/***********************************************************************************/
	
	use CallUndefinedMethodTrait;
	
	/******************************************************************************************
	* WORD                                                                                    *
	*******************************************************************************************
	| Genel Kullanım: Metin içinde istenilmeyen kelimelerin izole edilmesi için kullanılır.   |
	|          																				  |
	******************************************************************************************/
	public function word($string = '', $badWords = '', $changeChar = '[badwords]')
	{
		if( ! is_scalar($string) ) 
		{
			return Error::set('Error', 'valueParameter', 'string');
		}
		
		return str_ireplace($badWords, $changeChar, $string);
	}	
	
	/******************************************************************************************
	* DATA                                                                                    *
	*******************************************************************************************
	| Genel Kullanım: Filter::word() yöntemi ile aynı işlevi görür.     			          |
	|          																				  |
	******************************************************************************************/
	public function data($string = '', $badWords = '', $changeChar = '[badwords]')
	{
		return self::word($string, $badWords, $changeChar);
	}
}