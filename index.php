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


	public static function Dict()
	{
		if (null===$inst)
		{
			$file = fopen("dict.csv","r");
		
			while(!feof($file))
			{
				$data[] = fgets($file);
			}
		
			fclose($file);
		}
	
		return $data;
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

class SchoolData
{
	public static function attributes()
	{
		$unitid = $_REQUEST["page"];
		return Singleton::NewInstance()[$unitid];
	}
}

















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