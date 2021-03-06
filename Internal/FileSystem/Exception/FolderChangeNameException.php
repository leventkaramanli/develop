<?php namespace ZN\FileSystem\Exception;

use GeneralException;
use ZN\IndividualStructures\Lang;

class FolderChangeNameException extends GeneralException
{
    public function __construct($folder)
    {
        parent::__construct(Lang::select('Exception', 'folderChangeName', $folder));
    }
}
