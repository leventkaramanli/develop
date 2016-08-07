<?php
namespace ZN\FileSystem;

interface GenerateInterface
{
	public function settings(Array $settings);

	//----------------------------------------------------------------------------------------------------
	// Model
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name: empty
	// @param array  $settings: empty
	//
	//----------------------------------------------------------------------------------------------------
	public function model(String $name, Array $settings);
	
	//----------------------------------------------------------------------------------------------------
	// Controller
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name: empty
	// @param array  $settings: empty
	//
	//----------------------------------------------------------------------------------------------------
	public function controller(String $name, Array $settings);
	
	//----------------------------------------------------------------------------------------------------
	// Library
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name: empty
	// @param array  $settings: empty
	// @param string $app : empty
	//
	//----------------------------------------------------------------------------------------------------
	public function library(String $name, Array $settings);
	
	//----------------------------------------------------------------------------------------------------
	// Delete
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $name: empty
	// @param string $type: 'controller', 'model', 'library'
	//
	//----------------------------------------------------------------------------------------------------
	public function delete(String $name, String $type, String $app);
}