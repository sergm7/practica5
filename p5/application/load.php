<?php
	
	class Load{
		function __construct(){
		}
		function view($filename,$data=null){
			if(is_array($data)){
				extract($data);
			}
			include 'views/'.$filename;
		}
	}
?>