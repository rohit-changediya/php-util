<?php

class ToolsPhp
{
    public static function getPhpVersion()
    {
        return phpversion();
    }

    public static function answer($msg, $status = false , $data = NULL)
	{
		die(json_encode(array("status" => $status, "msg" => $msg, "data" => $data)));
	}

    
}