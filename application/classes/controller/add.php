<?php

	class Controller_Add extends Controller
	{
		public function action_index()
		{
			$post = $this->request->post();
			
			$json = array();
			
			if(!empty($post))
			{
				$add = new Model_Add;
				$fname = $add->firstname($post['fname']);
				$lname = $add->lastname($post['lname']);
				$dob   = $add->dob($post['dd'],$post['mm'],$post['yy']);
				$color = $add->color($post['color']);
				
				if($dob)
				{
					$addChoice = $add->addChoice();
	
					if($addChoice)
					{
						$json['status']['code'] = "200";
						$json['status']['text'] = "Data Saved";
					}
					else
					{
						$json['status']['code'] = "2001";
						$json['status']['text'] = "Data Not Saved";
					}
				}
				else
				{
					$json['status']['code'] = "2003";
					$json['status']['text'] = "date of birth is in the future";
				}
			}
			else
			{
				$json['status']['code'] = "2002";
				$json['status']['text'] = "Error No Post Received";
			}
			
			$encode = json_encode($json);
			print $encode;
		}
		
	}