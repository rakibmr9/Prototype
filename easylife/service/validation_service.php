<?php
   
    function isValidPersonName($name){
					$isValid = false;
					$flag=0;
					$fflg=0;
					if($flag==0)
					{
						for($i=0;$i<strlen($name)&&!(empty($name));$i++)
						{
							if(!(($name[$i]>='A' && $name[$i]<='Z')||($name[$i]>='a' && $name[$i]<='z')||($name[$i]=='-')||($name[$i]==' ')))
							{
								$flag=1;
								break;
							}
						}
						if(empty($name))
						{
							
							$fflg=1;							
						}
						else if($flag==1)
						{
								
								$fflg=1;
						}
						else if(!(($name[0]>='A' && $name[0]<='Z')||($name[0]>='a' && $name[0]<='z')))
						{
								
								$fflg=1;
						}
						
						else if(str_word_count($name)<2)
						{
								$fflg=1;
						}
					}
					else
					{
						if($fflg==1 || $flag=1 )
						{
							return $isValid; 
						}
						else
						{
							$isValid = true;
							return $isValid;
						
						}
					}
					
					
    }
	
    function isValidPersonUserName($uName){
					$isValid = false;
					$flag=0;
					$fflg=0;
					if($flag==0)
					{
						for($i=0;$i<strlen($uName)&&!(empty($uName));$i++)
						{
							if(!(($uName[$i]>='A' && $uName[$i]<='Z')||($uName[$i]>='a' && $uName[$i]<='z')||($uName[$i]=='-')||($uName[$i]==' ')))
							{
								$flag=1;
								break;
							}
							else if(!($uName[$i]>='@' || $uName[$i]<='$'||$uName[$i]>='#'))
							{
								$flag=1;
								break;
							}
						}
						if(empty($uName))
						{
							
							$fflg=1;							
						}
						else if($flag==1)
						{
								
								$fflg=1;
						}
						else if(!(($uName[0]>='A' && $uName[0]<='Z')||($uName[0]>='a' && $uName[0]<='z')))
						{
								
								$fflg=1;
						}
						
						else if(str_word_count($uName)<1)
						{
								$fflg=1;
						}
					}
					else
					{
						if($fflg==1 || $flag=1 )
						{
							return $isValid; 
						}
						else
						{
							$isValid = true;
							return $isValid;
						
						}
					}
					
					
    }
	
	 function isValidEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
	
	
	
	
	 function isValidPassword($pass)
	{
	 
	
		$isValid = false;
		$fflg=0;
		
		if($fflg==0)
		{
					if(empty($pass))
				{
						$fflg=1;
				}
				else if(strlen($pass)<8)
				{
						$fflg=1;
				}
				
				if(empty($cpass))
				{
						$fflg=1;
				}
				
				if($cpass!=$pass)
				{
						$fflg=1;
				}
		}
		else
		{
			if($fflg==1)
				{
					return $isValid; 
				}
				else
				{
					$isValid = true;
					return $isValid;
				}
		}
			
	}
	function isValidDOB()
	{
		$leap=0;
		$flag=0;
		$flag1=0;
		$isValid = false;
		if
		{
	
			if(empty($date))
			{
				$fflg=1;
				$flag=1;
			}
			else if(empty($month))
			{
				$fflg=1;
				$flag=1;
			}
			else if(empty($year))
			{
				$fflg=1;
				$flag=1;
			}
			
			else if($year%4 == 0)
			{
				if($year%100 == 0)
				{
					if ($year%400 == 0)
						$leap=1;
					else
						$leap=0;
				}
				else
					$leap=1;
			}
			
			if($flag!=1)
			{
				if(($leap==1)&&($month==2))
				{
					if(!(($date<=29)&&($date>=1)))
						$flag1=1;
				}
				else if(($month>=1)&&($month<=12)&&($date>=1)&&($date<=31)&&($year>=1953)&&($year<=1998))
				{
					if(($month==2)&&($date>28))
					{
						$flag1=1;
					}
					else if((($month==2)||($month==4)||($month==6)||($month==9)||($month==11))&&($date>30))
					{
						$flag1=1;
					}	
				}
				else
					$flag1=1;
			}
			if($flag1==1)
			{
					$fflg=1;
			}
		}
		else
		{
			if($flag1==1|| $fflg=1 || $leap==1 )
				{
					return $isValid; 
				}
				else
				{
					$isValid = true;
					return $isValid;
				}
		}
	}
	
	
?>