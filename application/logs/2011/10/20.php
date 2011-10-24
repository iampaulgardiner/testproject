<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-20 14:58:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-20 14:58:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-20 14:58:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-20 14:58:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: install.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-20 15:21:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:21:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL userguide was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:25:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:25:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:29:59 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/home.php [ 9 ]
2011-10-20 15:29:59 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/classes/controller/home.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-20 15:30:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-20 15:30:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:30:36 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/home.php [ 9 ]
2011-10-20 15:30:36 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/classes/controller/home.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-20 15:31:37 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/home.php [ 9 ]
2011-10-20 15:31:37 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/home.php [ 9 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/classes/controller/home.php(9): Kohana_Core::error_handler()
#1 [internal function]: Controller_Home->action_index(Object(Controller_Home))
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Request))
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#5 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-20 15:32:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:32:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:34:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:34:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:34:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:34:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 15:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hello was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:35:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-20 15:35:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:36:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL about/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-20 15:36:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL about/home was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 15:37:46 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/home.php [ 5 ]
2011-10-20 15:37:46 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/home.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('controller_home')
#1 {main}
2011-10-20 15:45:16 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-20 15:45:16 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(137): Kohana_View->set_filename('template')
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(30): Kohana_View->__construct('template', NULL)
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-20 15:45:35 --- ERROR: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-20 15:45:35 --- STRACE: View_Exception [ 0 ]: The requested view site could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(137): Kohana_View->set_filename('site')
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(30): Kohana_View->__construct('site', NULL)
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(33): Kohana_View::factory('site')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-20 15:49:12 --- ERROR: View_Exception [ 0 ]: The requested view template/homepage could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-20 15:49:12 --- STRACE: View_Exception [ 0 ]: The requested view template/homepage could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(137): Kohana_View->set_filename('template/homepa...')
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(30): Kohana_View->__construct('template/homepa...', NULL)
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(33): Kohana_View::factory('template/homepa...')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-20 15:49:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/homepage.php [ 2 ]
2011-10-20 15:49:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/homepage.php [ 2 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/views/homepage.php(2): Kohana_Core::error_handler('/Users/Develope...', Array)
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(61): include('/Users/Develope...')
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Home))
#5 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-20 16:05:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL what was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 16:05:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL what was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 16:11:50 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/header.php [ 26 ]
2011-10-20 16:11:50 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/template/header.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler('/Users/Develope...', Array)
#1 {main}
2011-10-20 16:13:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
2011-10-20 16:13:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/views/template/header.php(26): Kohana_Core::error_handler('/Users/Develope...', Array)
#1 /Users/Developer/Desktop/indev_website/server/application/views/homepage.php(1): include_once('/Users/Develope...')
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(61): include('/Users/Develope...')
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after(Object(Controller_Home))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-20 16:14:02 --- ERROR: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
2011-10-20 16:14:02 --- STRACE: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/views/template/header.php(26): Kohana_Core::error_handler('/Users/Develope...', Array)
#1 /Users/Developer/Desktop/indev_website/server/application/views/homepage.php(1): include_once('/Users/Develope...')
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(61): include('/Users/Develope...')
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after(Object(Controller_Home))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-20 16:14:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
2011-10-20 16:14:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/views/template/header.php(26): Kohana_Core::error_handler('/Users/Develope...', Array)
#1 /Users/Developer/Desktop/indev_website/server/application/views/homepage.php(1): include_once('/Users/Develope...')
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(61): include('/Users/Develope...')
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(343): Kohana_View::capture()
#4 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after(Object(Controller_Home))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#9 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-20 16:17:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/default.php [ 5 ]
2011-10-20 16:17:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/default.php [ 5 ]
--
#0 /Users/Developer/Desktop/indev_website/server/application/views/default.php(5): Kohana_Core::error_handler('/Users/Develope...', Array)
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(61): include('/Users/Develope...')
#2 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/view.php(343): Kohana_View::capture()
#3 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after(Object(Controller_Contact))
#5 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Request))
#6 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute()
#8 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-20 16:18:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL what was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 16:18:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL what was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-20 16:18:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL what was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-20 16:18:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL what was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Developer/Desktop/indev_website/server/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Developer/Desktop/indev_website/server/index.php(109): Kohana_Request->execute()
#3 {main}