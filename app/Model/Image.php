<?php
	class Image extends AppModel{
		public $actsAs = array('Upload.Upload'=>array('path'=>array('fields'=>array('dir'=>'path_dir'))));
	}
?>