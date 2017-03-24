<?php
//--------------------------------------------------------------------------------------------------
// Directory Paths
//--------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//--------------------------------------------------------------------------------------------------

//--------------------------------------------------------------------------------------------------
// CONFIG_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Config/
//
//--------------------------------------------------------------------------------------------------
define('CONFIG_DIR', internalProjectContainerDir('Config'));

//--------------------------------------------------------------------------------------------------
// STORAGE_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Storage/
//
//--------------------------------------------------------------------------------------------------
define('STORAGE_DIR', PROJECT_DIR.'Storage'.DS);

//--------------------------------------------------------------------------------------------------
// RESOURCES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/
//
//--------------------------------------------------------------------------------------------------
define('RESOURCES_DIR', internalProjectContainerDir('Resources'));

//--------------------------------------------------------------------------------------------------
// EXTERNAL_RESOURCES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_RESOURCES_DIR', EXTERNAL_DIR.'Resources'.DS);

//--------------------------------------------------------------------------------------------------
// STARTING_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Starting/
//
//--------------------------------------------------------------------------------------------------
define('STARTING_DIR', internalProjectContainerDir('Starting'));

//--------------------------------------------------------------------------------------------------
// EXTERNAL_STARTING_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Starting/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_STARTING_DIR', EXTERNAL_DIR.'Starting'.DS);

//--------------------------------------------------------------------------------------------------
// AUTOLOAD_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Starting/Autoload/
//
//--------------------------------------------------------------------------------------------------
define('AUTOLOAD_DIR', STARTING_DIR.'Autoload'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_AUTOLOAD_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Starting/Autoload/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_AUTOLOAD_DIR', EXTERNAL_STARTING_DIR.'Autoload'.DS);

//--------------------------------------------------------------------------------------------------
// HANDLOAD_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Starting/Handload/
//
//--------------------------------------------------------------------------------------------------
define('HANDLOAD_DIR', STARTING_DIR.'Handload'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_HANDLOAD_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Starting/Handload/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_HANDLOAD_DIR', EXTERNAL_STARTING_DIR.'Handload'.DS);

//--------------------------------------------------------------------------------------------------
// INTERNAL_LANGUAGES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Languages/
//
//--------------------------------------------------------------------------------------------------
define('INTERNAL_LANGUAGES_DIR', INTERNAL_DIR.'Languages'.DS);

//--------------------------------------------------------------------------------------------------
// LANGUAGES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Languages/
//
//--------------------------------------------------------------------------------------------------
define('LANGUAGES_DIR', internalProjectContainerDir('Languages'));

//--------------------------------------------------------------------------------------------------
// EXTERNAL_LANGUAGES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Languages/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_LANGUAGES_DIR', EXTERNAL_DIR.'Languages'.DS);

//--------------------------------------------------------------------------------------------------
// INTERNAL_LIBRARIES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Libraries/
//
//--------------------------------------------------------------------------------------------------
define('INTERNAL_LIBRARIES_DIR', INTERNAL_DIR.'Libraries'.DS);

//--------------------------------------------------------------------------------------------------
// LIBRARIES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Libraries/
//
//--------------------------------------------------------------------------------------------------
define('LIBRARIES_DIR', internalProjectContainerDir('Libraries'));

//--------------------------------------------------------------------------------------------------
// EXTERNAL_LIBRARIES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Libraries/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_LIBRARIES_DIR', EXTERNAL_DIR.'Libraries'.DS);

//--------------------------------------------------------------------------------------------------
// CONTROLLERS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Controllers/
//
//--------------------------------------------------------------------------------------------------
define('CONTROLLERS_DIR', PROJECT_DIR.'Controllers'.DS);

//--------------------------------------------------------------------------------------------------
// MODELS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Models/
//
//--------------------------------------------------------------------------------------------------
define('MODELS_DIR', internalProjectContainerDir('Models'));

//--------------------------------------------------------------------------------------------------
// EXTERNAL_MODELS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Models/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_MODELS_DIR', EXTERNAL_DIR.'Models'.DS);

//--------------------------------------------------------------------------------------------------
// VIEWS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Views/
//
//--------------------------------------------------------------------------------------------------
define('VIEWS_DIR', PROJECT_DIR.'Views'.DS);

//--------------------------------------------------------------------------------------------------
// PAGES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Views/
//
//--------------------------------------------------------------------------------------------------
define('PAGES_DIR', VIEWS_DIR);

//--------------------------------------------------------------------------------------------------
// PROCESSOR_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Processor/
//
//--------------------------------------------------------------------------------------------------
define('PROCESSOR_DIR', RESOURCES_DIR.'Processor'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_PROCESSOR_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Processor/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_PROCESSOR_DIR', EXTERNAL_RESOURCES_DIR.'Processor'.DS);

//--------------------------------------------------------------------------------------------------
// FILES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Files/
//
//--------------------------------------------------------------------------------------------------
define('FILES_DIR', RESOURCES_DIR.'Files'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_FILES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Files/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_FILES_DIR', EXTERNAL_RESOURCES_DIR.'Files'.DS);

//--------------------------------------------------------------------------------------------------
// FONTS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Fonts/
//
//--------------------------------------------------------------------------------------------------
define('FONTS_DIR', RESOURCES_DIR.'Fonts'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_FONTS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Fonts/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_FONTS_DIR', EXTERNAL_RESOURCES_DIR.'Fonts'.DS);

//--------------------------------------------------------------------------------------------------
// SCRIPTS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Scripts/
//
//--------------------------------------------------------------------------------------------------
define('SCRIPTS_DIR', RESOURCES_DIR.'Scripts'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_SCRIPTS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Scripts/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_SCRIPTS_DIR', EXTERNAL_RESOURCES_DIR.'Scripts'.DS);

//--------------------------------------------------------------------------------------------------
// SCRIPTS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Scripts/
//
//--------------------------------------------------------------------------------------------------
define('STYLES_DIR', RESOURCES_DIR.'Styles'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_STYLES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Styles/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_STYLES_DIR', EXTERNAL_RESOURCES_DIR.'Styles'.DS);

//--------------------------------------------------------------------------------------------------
// TEMPLATES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Templates/
//
//--------------------------------------------------------------------------------------------------
define('TEMPLATES_DIR', RESOURCES_DIR.'Templates'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_TEMPLATES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Templates/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_TEMPLATES_DIR', EXTERNAL_RESOURCES_DIR.'Templates'.DS);

//--------------------------------------------------------------------------------------------------
// THEMES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Themes/
//
//--------------------------------------------------------------------------------------------------
define('THEMES_DIR', RESOURCES_DIR.'Themes'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_THEMES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Themes/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_THEMES_DIR', EXTERNAL_RESOURCES_DIR.'Themes'.DS);

//--------------------------------------------------------------------------------------------------
// PLUGINS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Plugins/
//
//--------------------------------------------------------------------------------------------------
define('PLUGINS_DIR', RESOURCES_DIR.'Plugins'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_PLUGINS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Plugins/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_PLUGINS_DIR', EXTERNAL_RESOURCES_DIR.'Plugins'.DS);

//--------------------------------------------------------------------------------------------------
// UPLOADS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Projects/Resources/Uploads/
//
//--------------------------------------------------------------------------------------------------
define('UPLOADS_DIR', RESOURCES_DIR.'Uploads'.DS);

//--------------------------------------------------------------------------------------------------
// EXTERNAL_UPLOADS_DIR
//--------------------------------------------------------------------------------------------------
//
// @return External/Resources/Uploads/
//
//--------------------------------------------------------------------------------------------------
define('EXTERNAL_UPLOADS_DIR', EXTERNAL_RESOURCES_DIR.'Uploads'.DS);

//--------------------------------------------------------------------------------------------------
// INTERNAL_TEMPLATES_DIR
//--------------------------------------------------------------------------------------------------
//
// @return Internal/Templates/
//
//--------------------------------------------------------------------------------------------------
define('INTERNAL_TEMPLATES_DIR', INTERNAL_DIR.'Templates'.DS);
