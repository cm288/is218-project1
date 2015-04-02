<?php


class Singleton
{
	public static function tInstance()
        {
		static $inst = null;
		if (null === $inst) 
		{
			$inst = new static();
		}
		
		return $inst;
		
	}

}



?>
