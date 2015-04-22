<?php
/*class Singleton
{
	public static function NewInstance()
	{
		static $inst = null;
		if (null === $inst) 
		{
			$inst = new static();
			
			$file = fopen("testcsv.csv","r");
			$data = fgetcsv($file);
			
			while(!feof($file))
			[
				$schools = fgetcsv($file);
				$unitIds[] = $array[0];
				$array[] = array_combine($data, $schools);
			]
			
			$inst = array_combine($unitIds, $array);
			fclose($file);
		}
															
		print_r($inst);
		//return $inst;
	}
}*/


	
$file = fopen("testcsv.csv","r");

while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);
	
	
	
	
	
	
	

?>
