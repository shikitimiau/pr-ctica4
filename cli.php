#!php

<?php
# php can be used from command line, but I don't know how to toggle it in windows.

function make_me_a_controller(array $args):void{
	//remember the 1st argument is always the name
	//lets receive a name for the controller file

	if(isset($args[1])){
		echo $args[1];
	}else
		echo "Dude I need a name for the file";
}

make_me_a_controller($argv);
