<?php
	class ImagesController extends AppController{
		
		public function index(){
			if($this->request->is('post')){
				$a=array(); 
				//pr($this->data);
				$path=$this->data['Image']['path'];
				for($i=0;$i<count($path);$i++){
					$a[$i]['path']['name']=$path[$i]['name'];
					$a[$i]['path']['type']=$path[$i]['type'];
					$a[$i]['path']['tmp_name']=$path[$i]['tmp_name'];
					$a[$i]['path']['error']=$path[$i]['error'];
					$a[$i]['path']['size']=$path[$i]['size'];
					
				}
				//pr($a);
				$this->Image->saveMany($a);
				
			}
		}
	}
?>