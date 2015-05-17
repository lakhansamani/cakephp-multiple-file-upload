<?php
echo $this->Form->create('Image',array('type'=>'file','multiple','controller'=>'images','action'=>'index'));
echo $this->Form->input('path.',array(
	'type'=>'file',
	'multiple'
));
echo $this->Form->end('Submit');
?>