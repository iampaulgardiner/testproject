<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-21 06:14:13 --- ERROR: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-21 06:14:13 --- STRACE: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(137): Kohana_View->set_filename('test')
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(30): Kohana_View->__construct('test', NULL)
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(33): Kohana_View::factory('test')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Test))
#5 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#8 {main}