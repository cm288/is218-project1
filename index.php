<?php

class Singleton
{
	public static function instance()
	{
		static $inst = null;
		if (null === $inst) 
		{
			$inst = new static();
		}
															
		return $inst;
	}

	public function __construct()
	{
		$file = fopen("testcsv.csv","r");
		//$data = fgetcsv($file);
		while(!feof($file))
		{
			 echo fgetcsv($file). "<br />";
		}
		
		fclose($file);
	}

}

$object = new Singleton();



echo "this is a test";

?>
