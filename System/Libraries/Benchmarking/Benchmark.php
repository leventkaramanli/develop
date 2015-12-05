<?php 
class __USE_STATIC_ACCESS__Benchmark implements BenchmarkInterface
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
	// Protected Test
	//----------------------------------------------------------------------------------------------------
	//
	// Test isimleri bilgisi 
	//
	// @var  array
	//
	//----------------------------------------------------------------------------------------------------
	protected $tests = array();
	
	//----------------------------------------------------------------------------------------------------
	// Protected Memtests
	//----------------------------------------------------------------------------------------------------
	//
	// Bellek test isimleri bilgisi 
	//
	// @var  array
	//
	//----------------------------------------------------------------------------------------------------
	protected $memtests = array();
	
	//----------------------------------------------------------------------------------------------------
	// Protected Memtests
	//----------------------------------------------------------------------------------------------------
	//
	// Bellek test isimleri bilgisi 
	//
	// @var  array
	//
	//----------------------------------------------------------------------------------------------------
	protected $usedtests = array();
	
	//----------------------------------------------------------------------------------------------------
	// Protected Test Count
	//----------------------------------------------------------------------------------------------------
	//
	// Test sayısı bilgisi 
	//
	// @var  numeric
	//
	//----------------------------------------------------------------------------------------------------
	protected $testCount = 0;
	
	//----------------------------------------------------------------------------------------------------
	// Call Method
	//----------------------------------------------------------------------------------------------------
	// 
	// __call()
	//
	//----------------------------------------------------------------------------------------------------
	use CallUndefinedMethodTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Test Methods Başlangıç
	//----------------------------------------------------------------------------------------------------

	//----------------------------------------------------------------------------------------------------
	// Test Start
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $test
	// @return void
	//
	//----------------------------------------------------------------------------------------------------
	public function start($test = '')
	{
		if( ! is_string($test)) 
		{
			return Error::set('Error', 'stringParameter', 'test');
		}
		
		// Kaç test kullanıldığını hesaplamak için
		// test count değişkeni birer birer artırılıyor.
		$this->testCount++;
		
		// Yöntem içinden tanımlanan kodlardan kaynaklı
		// fazlalık hesaplanıyor.
		$legancy = ( $this->testCount === 1 ) 
				   ? $legancy = 136 
				   : 48;
	
		$test = $test."_start";
		
		// Mikrotime yöntemi başlatılıyor.
		$this->tests[$test]     = microtime();
		
		// Mikrotime yöntemi başlatılıyor.
		$this->usedtests[$test] = get_required_files();
		
		// Bu satıra kadar olan bellek miktarı hesaplanıyor.
		$this->memtests[$test]  = memory_get_usage() + $legancy;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Test End
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $test
	// @return void
	//
	//----------------------------------------------------------------------------------------------------
	public function end($test = '')
	{
		if( ! is_string($test) ) 
		{
			return Error::set('Error', 'stringParameter', 'test');
		}
		
		$test = $test."_end";
		
		$this->memtests[$test]  = memory_get_usage();
		
		$this->usedtests[$test] = get_required_files();	
		
		$this->tests[$test]     = microtime();		
	}
	
	//----------------------------------------------------------------------------------------------------
	// Test Methods Bitiş
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Result Methods Başlangıç
	//----------------------------------------------------------------------------------------------------

	//----------------------------------------------------------------------------------------------------
	// Elapsed Time
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $result
	// @param  numeric $decimal
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function elapsedTime($result = '', $decimal = 4)
	{   
		if( ! is_string($result) ) 
		{
			return Error::set('Error', 'stringParameter', 'result');
		}
		if( ! is_numeric($decimal) ) 
		{
			$decimal = 4;
		}
		
		$resend  = $result."_end";
		$restart = $result."_start";
		
		if( isset($this->tests[$resend]) && isset($this->tests[$restart]) )
		{
			return round(($this->tests[$resend] - $this->tests[$restart]), $decimal);
		}
		else
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Used Files
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $result
	// @return numeric
	//
	//----------------------------------------------------------------------------------------------------
	public function usedFiles($result = '')
	{
		if( ! is_string($result) ) 
		{
			return Error::set('Error', 'stringParameter', 'result');
		}
		
		if( empty($result) )
		{
			return get_required_files();
		}
		
		$resend  = $result."_end";
		$restart = $result."_start";
		
		if( isset($this->usedtests[$resend]) && isset($this->usedtests[$restart]) )
		{
			return array_diff($this->usedtests[$resend], $this->usedtests[$restart]);
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Used File Count
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $result
	// @return numeric
	//
	//----------------------------------------------------------------------------------------------------
	public function usedFileCount($result = '')
	{
		if( ! is_string($result) ) 
		{
			return Error::set('Error', 'stringParameter', 'result');
		}
		
		if( empty($result) )
		{
			return get_required_files();
		}
		
		$resend  = $result."_end";
		$restart = $result."_start";
		
		if( isset($this->usedtests[$resend]) && isset($this->usedtests[$restart]) )
		{
			return count($this->usedtests[$resend]) - count($this->usedtests[$restart]);
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Calculated Memory
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $result
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function calculatedMemory($result = '')
	{
		if( ! is_string($result) ) 
		{
			return Error::set('Error', 'stringParameter', 'result');
		}
		
		$resend  = $result."_end";
		$restart = $result."_start";

		if( isset($this->memtests[$resend]) && isset($this->memtests[$restart]) )
		{
			$calc = $this->memtests[$resend] - $this->memtests[$restart];
		
			return $calc;
		}
		else
		{
			return false;
		}
	}
	
	//----------------------------------------------------------------------------------------------------
	// Result Methods Bitiş
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Memory Methods Başlangıç
	//----------------------------------------------------------------------------------------------------

	//----------------------------------------------------------------------------------------------------
	// Memory Usage
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  bool $realMemory
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function memoryUsage($realMemory = false)
	{
		if( ! is_bool($realMemory) ) 
		{
			$realMemory = false;
		}
		
		return  memory_get_usage($realMemory);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Max Memory Usage
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  bool $realMemory
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function maxMemoryUsage($realMemory = false)
	{
		if( ! is_bool($realMemory) ) 
		{
			$realMemory = false;
		}
		
		return  memory_get_peak_usage($realMemory);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Memory Methods Bitiş
	//----------------------------------------------------------------------------------------------------
}