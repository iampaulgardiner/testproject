<?php

	class Model_Add extends Model
	{
		private $fname;
		private $lname;
		private $dob;
		private $color;
		private $hasAdded;
		
		
		private function formatname($value)
		{
			$tolower = strtolower($value);
			$ucfirst = ucfirst($tolower);
			return $ucfirst;
		}
		
		public function firstName($value)
		{
			$this->fname = $this->formatname($value);
			return TRUE;	
		}
		
		public function lastName($value)
		{
			$this->lname = $this->formatname($value);
			return TRUE;
		}
		
		public function dob($dd,$mm,$yyyy)
		{
			$today = array();
			$today['dd'] = date('d');
			$today['mm'] = date('m');
			$today['yy'] = date('y');
			
			$checkGivenDate    = mktime(0,0,0,$dd,$mm,$yyyy);
			$againstTodaysDate = mktime(0,0,0,$today['dd'],$today['mm'],$today['yy']);
			
			if($checkGivenDate > $againstTodaysDate)
				return FALSE;
			else
			{
				$this->dob = "{$dd}/{$mm}/{$yyyy}";
				return TRUE;
			}
		}
		
		public function color($value)
		{
			$this->color = strtolower($value);
			return TRUE;
		}
		
		
		
		public function addChoice()
		{
			$insert = DB::query(Database::INSERT, "INSERT INTO consumer_record (first_name, last_name, dob, color) VALUES('$this->fname', '$this->lname', '$this->dob', '$this->color')");
			$execute = $insert->execute();
			return TRUE;
			
		}
	}