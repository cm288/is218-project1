<?php
class Singleton
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
			{
				$schools = fgetcsv($file);
				$unitIds[] = $array[0];
				$array[] = array_combine($data, $schools);
			}
			
			$inst = array_combine($unitIds, $array);
			fclose($file);
		}
															
		//print_r($inst);
		return $inst;
		//var_dump($inst);
	}
}

class Schools
{
	public static function print_schools()
	{
		$CSVarray = Singleton::NewInstance();
		foreach($CSVarray as $key=>$value)
		echo '<a href="?page='.$key.'">'.$value["INSTNM"].'</a><br>';
	}
}

$obj = Schools::print_schools();


//Test Blocks

/*
$file = fopen("testcsv.csv","r");

while(! feof($file))
  {
  print_r(fgetcsv($file));
  }

fclose($file);
*/
	
		
echo "test";
?>
