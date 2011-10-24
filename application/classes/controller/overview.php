<?php

	class Controller_Overview extends Controller_Template
	{
		public $template = "overview";
				
		private function percentage($count, $total)
		{
			$counta = $count / $total;
			$countb = $counta * 100;
			$countc = number_format($countb, 0);
			return $countc;
		}
		
		public function action_index()
		{
			$results = DB::select()->from('consumer_record');
			$query   = $results->select("*");
			$this->template->data = $query->execute()->as_array();
		}
		
		public function action_unique()
		{
			$query = DB::query(Database::SELECT, 'SELECT DISTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color');

			$this->template->data = $query->execute()->as_array();
		}
		
		public function action_stats()
		{
			$stats  = array();
			$colors = DB::select('color')->distinct(TRUE)->from('consumer_record');
			$colorA = $colors->execute()->as_array();
			
			$users  = DB::query(Database::SELECT, "SELECT DISTINCT COUNT(*) FROM consumer_record");
			$usera  = $users->execute()->as_array();
			
			$totalUsers = $usera[0]['COUNT(*)'];
			
			$stats['users'] = $totalUsers;
			
			
			$stats['color'] = array();
			
			foreach($colorA as $row)
			{
				$color = $row['color'];	
				$amountQ = DB::query(Database::SELECT, "SELECT COUNT(*) FROM consumer_record WHERE color = '$color'");
				$amountR = $amountQ->execute()->as_array();
				$count = $amountR[0]['COUNT(*)'];
				$stats['color'][$row['color']]['name']  = $row['color'];
				$stats['color'][$row['color']]['count'] = $count;
				$stats['color'][$row['color']]['percentage'] = $this->percentage($count, $totalUsers);
				
			}
			
			
			$this->template->stats = $stats;
		}
		
	}