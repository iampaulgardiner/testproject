<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-23 11:01:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
2011-10-23 11:01:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: menuactive ~ APPPATH/views/template/header.php [ 26 ]
--
#0 /WebServer/indev/application/views/template/header.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 26, Array)
#1 /WebServer/indev/application/views/home.php(1): include_once('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#3 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#4 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#7 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /WebServer/indev/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-23 11:20:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 11:20:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL page was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 11:20:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:20:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:21:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Pages::request() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:21:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Pages::request() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:21:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:21:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:22:15 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$get ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:22:15 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$get ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 /WebServer/indev/application/classes/controller/pages.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 7, Array)
#1 [internal function]: Controller_Pages->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 11:22:20 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$get ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:22:20 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$get ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 /WebServer/indev/application/classes/controller/pages.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 7, Array)
#1 [internal function]: Controller_Pages->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 11:22:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:22:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:22:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:22:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:23:23 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:23:23 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:23:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:23:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:23:52 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_response ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:23:52 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_response ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:23:53 --- ERROR: ErrorException [ 1 ]: Cannot access protected property Request::$_response ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:23:53 --- STRACE: ErrorException [ 1 ]: Cannot access protected property Request::$_response ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:24:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: get ~ APPPATH/classes/controller/pages.php [ 8 ]
2011-10-23 11:24:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: get ~ APPPATH/classes/controller/pages.php [ 8 ]
--
#0 /WebServer/indev/application/classes/controller/pages.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 8, Array)
#1 [internal function]: Controller_Pages->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Pages))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 11:24:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/pages.php [ 8 ]
2011-10-23 11:24:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/pages.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:24:43 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:24:43 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:37:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:37:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 11:37:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
2011-10-23 11:37:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/controller/pages.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:20:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: pathToDb ~ APPPATH/classes/model/sqlite.php [ 15 ]
2011-10-23 12:20:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: pathToDb ~ APPPATH/classes/model/sqlite.php [ 15 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 15, Array)
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 12:21:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: pathToDb ~ APPPATH/classes/model/sqlite.php [ 15 ]
2011-10-23 12:21:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: pathToDb ~ APPPATH/classes/model/sqlite.php [ 15 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 15, Array)
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 12:23:56 --- ERROR: ErrorException [ 8 ]: Use of undefined constant __DOCUMENT_ROOT__ - assumed '__DOCUMENT_ROOT__' ~ APPPATH/classes/model/sqlite.php [ 21 ]
2011-10-23 12:23:56 --- STRACE: ErrorException [ 8 ]: Use of undefined constant __DOCUMENT_ROOT__ - assumed '__DOCUMENT_ROOT__' ~ APPPATH/classes/model/sqlite.php [ 21 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(21): Kohana_Core::error_handler(8, 'Use of undefine...', '/WebServer/inde...', 21, Array)
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 12:24:38 --- ERROR: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 17 ]
2011-10-23 12:24:38 --- STRACE: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 17 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(17): SQLiteDatabase->__construct('/WebServer/inde...')
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 12:25:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 19 ]
2011-10-23 12:25:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:25:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 19 ]
2011-10-23 12:25:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:25:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 19 ]
2011-10-23 12:25:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:25:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 20 ]
2011-10-23 12:25:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/model/sqlite.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:25:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/sqlite.php [ 21 ]
2011-10-23 12:25:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/sqlite.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:25:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: newpath ~ APPPATH/classes/model/sqlite.php [ 16 ]
2011-10-23 12:25:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: newpath ~ APPPATH/classes/model/sqlite.php [ 16 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 16, Array)
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 12:26:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Sqlite::printage() ~ APPPATH/classes/controller/test.php [ 8 ]
2011-10-23 12:26:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Sqlite::printage() ~ APPPATH/classes/controller/test.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:26:40 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/sqlite.php [ 15 ]
2011-10-23 12:26:40 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/model/sqlite.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 12:27:18 --- ERROR: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:27:18 --- STRACE: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(18): SQLiteDatabase->__construct('/WebServer/inde...')
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 12:28:29 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:28:29 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:02 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:02 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:02 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:02 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:03 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:03 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:03 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:03 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:03 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:03 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:03 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:03 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:03 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:03 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:03 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:03 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:04 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:04 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:04 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:04 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:04 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:04 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:04 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:04 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:04 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:04 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:05 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:05 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 12:29:05 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
2011-10-23 12:29:05 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 18 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 18, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(18): sqlite_open('/WebServer/inde...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 13:38:50 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 28 ]
2011-10-23 13:38:50 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 28, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(28): sqlite_open('/WebServer/inde...', 438, 'file is encrypt...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 13:40:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH/classes/model/sqlite.php [ 24 ]
2011-10-23 13:40:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: key ~ APPPATH/classes/model/sqlite.php [ 24 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 24, Array)
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 13:40:17 --- ERROR: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 28 ]
2011-10-23 13:40:17 --- STRACE: ErrorException [ 2 ]: sqlite_open() [function.sqlite-open]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 28 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'sqlite_open() [...', '/WebServer/inde...', 28, Array)
#1 /WebServer/indev/application/classes/model/sqlite.php(28): sqlite_open('/WebServer/inde...', '0666', 'file is encrypt...')
#2 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#3 [internal function]: Controller_Test->action_index()
#4 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#5 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/indev/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 13:41:17 --- ERROR: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/model/sqlite.php [ 12 ]
2011-10-23 13:41:17 --- STRACE: ErrorException [ 1 ]: Call to a member function query() on a non-object ~ APPPATH/classes/model/sqlite.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 13:43:03 --- ERROR: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 33 ]
2011-10-23 13:43:03 --- STRACE: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 33 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(33): SQLiteDatabase->__construct('/WebServer/inde...')
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 13:43:36 --- ERROR: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 33 ]
2011-10-23 13:43:36 --- STRACE: SQLiteException [ 0 ]: SQLiteDatabase::__construct() [sqlitedatabase.--construct]: file is encrypted or is not a database ~ APPPATH/classes/model/sqlite.php [ 33 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(33): SQLiteDatabase->__construct('/WebServer/inde...')
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 13:47:42 --- ERROR: Exception [ 0 ]: Unable to open database: unable to open database file ~ APPPATH/classes/model/sqlite.php [ 33 ]
2011-10-23 13:47:42 --- STRACE: Exception [ 0 ]: Unable to open database: unable to open database file ~ APPPATH/classes/model/sqlite.php [ 33 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(33): SQLite3->__construct('sqlite:/WebServ...')
#1 /WebServer/indev/application/classes/controller/test.php(7): Model_Sqlite->__construct()
#2 [internal function]: Controller_Test->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 14:03:21 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/home.php [ 3 ]
2011-10-23 14:03:21 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/home.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:03:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/views/home.php [ 3 ]
2011-10-23 14:03:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/views/home.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:03:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/views/home.php [ 3 ]
2011-10-23 14:03:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/views/home.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:03:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/views/home.php [ 3 ]
2011-10-23 14:03:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/views/home.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:06:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Test::$session ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:06:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Test::$session ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 /WebServer/indev/application/classes/controller/test.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 12, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 14:06:14 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Test::session() ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:06:14 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Test::session() ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:06:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Test::session() ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:06:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Test::session() ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:06:20 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Test::session() ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:06:20 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Test::session() ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:06:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:06:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:06:43 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Test::$session ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:06:43 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Test::$session ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 /WebServer/indev/application/classes/controller/test.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 12, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 14:07:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:07:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::id() ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:08:05 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Test::$session ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:08:05 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Test::$session ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 /WebServer/indev/application/classes/controller/test.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 12, Array)
#1 [internal function]: Controller_Test->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Test))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 14:08:21 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Test::get() ~ APPPATH/classes/controller/test.php [ 12 ]
2011-10-23 14:08:21 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Test::get() ~ APPPATH/classes/controller/test.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:09:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/test.php [ 14 ]
2011-10-23 14:09:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/test.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:16:59 --- ERROR: ErrorException [ 4096 ]: Object of class Model_Settings could not be converted to string ~ APPPATH/classes/controller/home.php [ 11 ]
2011-10-23 14:16:59 --- STRACE: ErrorException [ 4096 ]: Object of class Model_Settings could not be converted to string ~ APPPATH/classes/controller/home.php [ 11 ]
--
#0 /WebServer/indev/application/classes/controller/home.php(11): Kohana_Core::error_handler(4096, 'Object of class...', '/WebServer/inde...', 11, Array)
#1 [internal function]: Controller_Home->before()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 14:17:15 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:15 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:27 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:27 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:28 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:28 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:29 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:29 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:17:36 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 14:17:36 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:23:14 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Model_Sqlite - assumed 'Model_Sqlite' ~ APPPATH/classes/controller/home.php [ 15 ]
2011-10-23 14:23:14 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Model_Sqlite - assumed 'Model_Sqlite' ~ APPPATH/classes/controller/home.php [ 15 ]
--
#0 /WebServer/indev/application/classes/controller/home.php(15): Kohana_Core::error_handler(8, 'Use of undefine...', '/WebServer/inde...', 15, Array)
#1 [internal function]: Controller_Home->action_index()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 14:23:29 --- ERROR: ErrorException [ 8 ]: Object of class SQLite3 could not be converted to int ~ APPPATH/classes/model/sqlite.php [ 28 ]
2011-10-23 14:23:29 --- STRACE: ErrorException [ 8 ]: Object of class SQLite3 could not be converted to int ~ APPPATH/classes/model/sqlite.php [ 28 ]
--
#0 /WebServer/indev/application/classes/model/sqlite.php(28): Kohana_Core::error_handler(8, 'Object of class...', '/WebServer/inde...', 28, Array)
#1 /WebServer/indev/application/classes/controller/home.php(16): Model_Sqlite->update('UPDATE run SET ...')
#2 [internal function]: Controller_Home->action_index()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 14:26:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/home.php [ 3 ]
2011-10-23 14:26:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/home.php [ 3 ]
--
#0 /WebServer/indev/application/views/home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 3, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 14:28:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL homepage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 14:28:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL homepage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:28:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL homepage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 14:28:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL homepage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:28:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL homepage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 14:28:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL homepage was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:34:14 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Tempalate' not found ~ APPPATH/classes/controller/firstrun.php [ 4 ]
2011-10-23 14:34:14 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Tempalate' not found ~ APPPATH/classes/controller/firstrun.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:34:34 --- ERROR: ErrorException [ 8 ]: Undefined variable: pageTitle ~ APPPATH/views/default.php [ 2 ]
2011-10-23 14:34:34 --- STRACE: ErrorException [ 8 ]: Undefined variable: pageTitle ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/indev/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 2, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Firstrun))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 14:47:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 14:47:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:47:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
2011-10-23 14:47:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/indev/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 2, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Firstrun))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 14:49:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
2011-10-23 14:49:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/indev/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 2, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Firstrun))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 14:49:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/firstrun.php [ 19 ]
2011-10-23 14:49:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/firstrun.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 14:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 14:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:58:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 14:58:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:58:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 14:58:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:58:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 14:58:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 14:58:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 14:58:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:02:36 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 15:02:36 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 15:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:02:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 15:02:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:02:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 15:02:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL firstrun/firstrun/go was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:10:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:10:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:10:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:10:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:11:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:11:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:12:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL connect/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:12:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL connect/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:12:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:12:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL connect/faceboook was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:12:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL connect/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:12:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL connect/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:12:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL social/connect/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 15:12:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL social/connect/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 15:26:46 --- ERROR: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/settings.php [ 4 ]
2011-10-23 15:26:46 --- STRACE: ErrorException [ 1 ]: Class 'Template_Controller' not found ~ APPPATH/classes/controller/settings.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:26:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
2011-10-23 15:26:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/indev/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 2, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:27:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
2011-10-23 15:27:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/indev/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 2, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:27:57 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/settings.php [ 21 ]
2011-10-23 15:27:57 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH/classes/controller/settings.php [ 21 ]
--
#0 /WebServer/indev/application/classes/controller/settings.php(21): Kohana_Core::error_handler(2048, 'Creating defaul...', '/WebServer/inde...', 21, Array)
#1 [internal function]: Controller_Settings->action_add()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 15:47:02 --- ERROR: ErrorException [ 1 ]: Class 'Modal_Twitter' not found ~ APPPATH/classes/controller/settings.php [ 20 ]
2011-10-23 15:47:02 --- STRACE: ErrorException [ 1 ]: Class 'Modal_Twitter' not found ~ APPPATH/classes/controller/settings.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:47:16 --- ERROR: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
2011-10-23 15:47:16 --- STRACE: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:48:23 --- ERROR: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
2011-10-23 15:48:23 --- STRACE: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:48:31 --- ERROR: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
2011-10-23 15:48:31 --- STRACE: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:48:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/model/custom/twitter.php [ 40 ]
2011-10-23 15:48:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_RETURN ~ APPPATH/classes/model/custom/twitter.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:49:07 --- ERROR: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
2011-10-23 15:49:07 --- STRACE: ErrorException [ 1 ]: Call to a member function getAuthenticationUrl() on a non-object ~ APPPATH/classes/model/twitter.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 15:49:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 11 ]
2011-10-23 15:49:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 11 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 11, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:48 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:53 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:53 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:49:54 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
2011-10-23 15:49:54 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 13 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 13, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:50:07 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 12 ]
2011-10-23 15:50:07 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 12 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 12, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:50:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 12 ]
2011-10-23 15:50:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$consumerKey ~ APPPATH/classes/model/twitter.php [ 12 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 12, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 15:51:40 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 15:51:40 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(15): EpiOAuth->getAuthenticateUrl(NULL, Array)
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:51:53 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 15:51:53 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(15): EpiOAuth->getAuthenticateUrl(NULL, Array)
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:52:03 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 15:52:03 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(15): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:52:06 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 15:52:06 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(15): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:52:20 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 15:52:20 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(15): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 15:57:49 --- ERROR: ErrorException [ 1 ]: Class 'Model_Twitter' not found ~ APPPATH/classes/controller/settings.php [ 20 ]
2011-10-23 15:57:49 --- STRACE: ErrorException [ 1 ]: Class 'Model_Twitter' not found ~ APPPATH/classes/controller/settings.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 16:00:05 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'ktwitter' at 'MODPATH/ktwitter' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2011-10-23 16:00:05 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'ktwitter' at 'MODPATH/ktwitter' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /WebServer/indev/application/bootstrap.php(110): Kohana_Core::modules(Array)
#1 /WebServer/indev/index.php(102): require('/WebServer/inde...')
#2 {main}
2011-10-23 16:01:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$twitterObject ~ APPPATH/classes/model/twitter.php [ 15 ]
2011-10-23 16:01:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$twitterObject ~ APPPATH/classes/model/twitter.php [ 15 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 15, Array)
#1 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#2 [internal function]: Controller_Settings->action_add()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 16:03:33 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 16:03:33 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(17): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 16:07:40 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 16:07:40 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(20): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 16:07:58 --- ERROR: EpiTwitterException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 271 ]
2011-10-23 16:07:58 --- STRACE: EpiTwitterException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 271 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(218): EpiTwitterException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(119): EpiTwitterJson->__get('response')
#2 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(36): EpiTwitter->request('GET', '/account/verify...', NULL)
#3 /WebServer/indev/application/classes/model/twitter.php(27): EpiTwitter->get('/account/verify...')
#4 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->verifyCredentials()
#5 [internal function]: Controller_Settings->action_add()
#6 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#7 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /WebServer/indev/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-23 16:14:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
2011-10-23 16:14:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/indev/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 2, Array)
#1 /WebServer/indev/system/classes/kohana/view.php(61): include('/WebServer/inde...')
#2 /WebServer/indev/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/inde...', Array)
#3 /WebServer/indev/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 16:17:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/twitter.php [ 30 ]
2011-10-23 16:17:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/model/twitter.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 16:17:59 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 16:17:59 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(20): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 16:18:01 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 16:18:01 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(20): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 16:18:10 --- ERROR: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
2011-10-23 16:18:10 --- STRACE: EpiOAuthException [ 0 ]:  ~ APPPATH/classes/model/custom/twitter-async/EpiOAuth.php [ 434 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(404): EpiOAuthException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiOAuth.php(45): EpiOAuthResponse->__get('oauth_token')
#2 /WebServer/indev/application/classes/model/twitter.php(20): EpiOAuth->getAuthenticateUrl()
#3 /WebServer/indev/application/classes/controller/settings.php(21): Model_Twitter->getAuthUrl()
#4 [internal function]: Controller_Settings->action_add()
#5 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Settings))
#6 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/indev/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 16:20:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL callback/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 16:20:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL callback/twitter was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/indev/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 16:22:22 --- ERROR: ErrorException [ 1 ]: Class 'Modal_Sqlite' not found ~ APPPATH/classes/controller/callback.php [ 12 ]
2011-10-23 16:22:22 --- STRACE: ErrorException [ 1 ]: Class 'Modal_Sqlite' not found ~ APPPATH/classes/controller/callback.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 16:27:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/callback.php [ 14 ]
2011-10-23 16:27:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/controller/callback.php [ 14 ]
--
#0 /WebServer/indev/application/classes/controller/callback.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/inde...', 14, Array)
#1 [internal function]: Controller_Callback->action_twitter()
#2 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Callback))
#3 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/indev/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 16:39:06 --- ERROR: EpiTwitterNotAuthorizedException [ 401 ]: {"error":"Could not authenticate with OAuth.","request":"\/1\/account\/verify_credentials.json"} ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 255 ]
2011-10-23 16:39:06 --- STRACE: EpiTwitterNotAuthorizedException [ 401 ]: {"error":"Could not authenticate with OAuth.","request":"\/1\/account\/verify_credentials.json"} ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 255 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(218): EpiTwitterException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(119): EpiTwitterJson->__get('response')
#2 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(36): EpiTwitter->request('GET', '/account/verify...', NULL)
#3 /WebServer/indev/application/classes/model/twitter.php(27): EpiTwitter->get('/account/verify...')
#4 /WebServer/indev/application/classes/controller/callback.php(22): Model_Twitter->verifyCredentials()
#5 [internal function]: Controller_Callback->action_twitter()
#6 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Callback))
#7 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /WebServer/indev/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-23 16:39:28 --- ERROR: ErrorException [ 8 ]: Undefined property: Model_Twitter::$accesSecret ~ APPPATH/classes/model/twitter.php [ 26 ]
2011-10-23 16:39:28 --- STRACE: ErrorException [ 8 ]: Undefined property: Model_Twitter::$accesSecret ~ APPPATH/classes/model/twitter.php [ 26 ]
--
#0 /WebServer/indev/application/classes/model/twitter.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/inde...', 26, Array)
#1 /WebServer/indev/application/classes/controller/callback.php(22): Model_Twitter->verifyCredentials()
#2 [internal function]: Controller_Callback->action_twitter()
#3 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Callback))
#4 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/indev/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 16:39:36 --- ERROR: EpiTwitterNotAuthorizedException [ 401 ]: {"error":"Could not authenticate with OAuth.","request":"\/1\/account\/verify_credentials.json"} ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 255 ]
2011-10-23 16:39:36 --- STRACE: EpiTwitterNotAuthorizedException [ 401 ]: {"error":"Could not authenticate with OAuth.","request":"\/1\/account\/verify_credentials.json"} ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 255 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(218): EpiTwitterException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(119): EpiTwitterJson->__get('response')
#2 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(36): EpiTwitter->request('GET', '/account/verify...', NULL)
#3 /WebServer/indev/application/classes/model/twitter.php(27): EpiTwitter->get('/account/verify...')
#4 /WebServer/indev/application/classes/controller/callback.php(22): Model_Twitter->verifyCredentials()
#5 [internal function]: Controller_Callback->action_twitter()
#6 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Callback))
#7 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /WebServer/indev/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-23 16:40:19 --- ERROR: EpiTwitterNotAuthorizedException [ 401 ]: {"error":"Could not authenticate with OAuth.","request":"\/1\/account\/verify_credentials.json"} ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 255 ]
2011-10-23 16:40:19 --- STRACE: EpiTwitterNotAuthorizedException [ 401 ]: {"error":"Could not authenticate with OAuth.","request":"\/1\/account\/verify_credentials.json"} ~ APPPATH/classes/model/custom/twitter-async/EpiTwitter.php [ 255 ]
--
#0 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(218): EpiTwitterException::raise(Object(EpiCurlManager), false)
#1 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(119): EpiTwitterJson->__get('response')
#2 /WebServer/indev/application/classes/model/custom/twitter-async/EpiTwitter.php(36): EpiTwitter->request('GET', '/account/verify...', NULL)
#3 /WebServer/indev/application/classes/model/twitter.php(27): EpiTwitter->get('/account/verify...')
#4 /WebServer/indev/application/classes/controller/callback.php(22): Model_Twitter->verifyCredentials()
#5 [internal function]: Controller_Callback->action_twitter()
#6 /WebServer/indev/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Callback))
#7 /WebServer/indev/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /WebServer/indev/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /WebServer/indev/index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-23 17:10:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadPage.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 17:10:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: loadPage.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/indev/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 17:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 17:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 17:56:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
2011-10-23 17:56:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/default.php [ 2 ]
--
#0 /WebServer/peoples/application/views/default.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 2, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 18:13:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/home.php [ 25 ]
2011-10-23 18:13:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/home.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 18:14:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/home.php [ 3 ]
2011-10-23 18:14:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/home.php [ 3 ]
--
#0 /WebServer/peoples/application/views/home.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 3, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Home))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 18:15:56 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 18:15:56 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 18:16:06 --- ERROR: View_Exception [ 0 ]: The requested view null could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2011-10-23 18:16:06 --- STRACE: View_Exception [ 0 ]: The requested view null could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /WebServer/peoples/system/classes/kohana/view.php(137): Kohana_View->set_filename('null')
#1 /WebServer/peoples/system/classes/kohana/view.php(30): Kohana_View->__construct('null', NULL)
#2 /WebServer/peoples/system/classes/kohana/controller/template.php(33): Kohana_View::factory('null')
#3 [internal function]: Kohana_Controller_Template->before()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Home))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 18:16:13 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 18:16:13 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 18:29:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXTENDS ~ APPPATH/classes/controller/add.php [ 3 ]
2011-10-23 18:29:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXTENDS ~ APPPATH/classes/controller/add.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 18:30:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 18:30:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL pages was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 18:59:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: yy ~ APPPATH/classes/model/add.php [ 43 ]
2011-10-23 18:59:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: yy ~ APPPATH/classes/model/add.php [ 43 ]
--
#0 /WebServer/peoples/application/classes/model/add.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 43, Array)
#1 /WebServer/peoples/application/classes/controller/add.php(44): Model_Add->dob('28', '01', '1985')
#2 [internal function]: Controller_Add->action_test()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 19:01:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL add/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 19:01:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL add/test was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 19:08:18 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:08:18 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:08:41 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:08:41 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:08:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:08:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:08:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:08:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:09:04 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:09:04 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:09:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:09:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:10:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:10:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:11:36 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:11:36 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:11:53 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:11:53 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:12:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:12:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:12:35 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:12:35 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:12:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:12:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:13:19 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:13:19 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:13:33 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:13:33 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:13:46 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:13:46 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:13:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
2011-10-23 19:13:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Add::fname() ~ APPPATH/classes/controller/add.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 19:14:18 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 36 ]
2011-10-23 19:14:18 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 36, Array)
#1 /WebServer/peoples/application/classes/model/add.php(36): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:16:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:16:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:16:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:16:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:17:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:17:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:17:00 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 36 ]
2011-10-23 19:17:00 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 36 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 36, Array)
#1 /WebServer/peoples/application/classes/model/add.php(36): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(16): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:19:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:19:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:19:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:19:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:19:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:19:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:20:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:20:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:20:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:20:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:20:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:20:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:20:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:20:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:20:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:20:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:22:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:22:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:22:16 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:22:16 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:22:26 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:22:26 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, '28', 'mm', '1985')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('28', 'mm', '1985')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:22:29 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:22:29 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, '28', 'mm', '1985')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('28', 'mm', '1985')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:22:29 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:22:29 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, '28', 'mm', '1985')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('28', 'mm', '1985')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:22:29 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:22:29 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, '28', 'mm', '1985')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('28', 'mm', '1985')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:22:31 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:22:31 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 5 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, '28', 'mm', '1985')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('28', 'mm', '1985')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:23:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:23:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:23:07 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:23:07 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:23:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:23:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:23:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:23:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:24:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:24:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:24:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:24:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:25:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:25:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:25:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:25:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:25:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:25:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:25:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:25:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:25:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:25:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:26:01 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:26:01 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:26:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:26:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:26:35 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:26:35 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:26:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:26:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:26:46 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:26:46 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:26:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:26:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:26:58 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:26:58 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:03 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:03 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:03 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:03 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:27:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:12 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:12 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:12 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:12 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:12 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:12 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:12 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:12 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:12 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:12 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:27:14 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:27:14 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:28:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:28:10 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:10 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:10 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:10 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:10 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:10 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:10 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:10 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:11 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:11 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:12 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:12 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:13 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:13 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:28:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:28:29 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:29 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:29 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:29 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:30 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:30 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:30 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:30 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:31 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:31 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:31 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:31 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:32 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:32 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:32 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:32 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:33 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:33 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:33 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:33 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:33 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:33 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:33 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:33 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:34 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:34 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:34 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:34 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:34 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:34 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:34 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:34 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:34 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:34 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:35 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:35 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:35 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:35 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:35 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:35 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:35 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:35 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:36 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:36 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:36 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:36 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:36 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:36 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:36 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:36 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:36 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:36 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:37 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:37 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:37 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:37 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:37 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:37 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:37 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:37 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:37 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:37 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:37 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:37 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:38 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:38 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:38 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:38 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:38 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:38 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:28:38 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:28:38 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:29:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:29:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:29:22 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:29:22 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:29:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:29:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:29:53 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:29:53 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:30:02 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:30:02 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:30:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:30:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:30:17 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:30:17 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:30:19 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:30:19 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:30:20 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:30:20 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:30:20 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:30:20 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:44:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:44:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:44:39 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 6 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:44:39 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 6 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, '28', '01', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('28', '01', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:45:00 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:45:00 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:45:01 --- ERROR: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
2011-10-23 19:45:01 --- STRACE: ErrorException [ 2 ]: mktime() expects parameter 4 to be long, string given ~ APPPATH/classes/model/add.php [ 37 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mktime() expect...', '/WebServer/peop...', 37, Array)
#1 /WebServer/peoples/application/classes/model/add.php(37): mktime(0, 0, 0, 'dd', 'mm', 'yyyy')
#2 /WebServer/peoples/application/classes/controller/add.php(15): Model_Add->dob('dd', 'mm', 'yyyy')
#3 [internal function]: Controller_Add->action_index()
#4 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#5 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-23 19:45:40 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:45:40 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:46:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:46:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:48:45 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:48:45 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:50:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:50:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:55:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:55:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:59:14 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:59:14 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 19:59:26 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 19:59:26 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(18): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 19:59:41 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 19:59:41 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(18): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 19:59:42 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 19:59:42 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(18): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 19:59:42 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 19:59:42 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(18): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 19:59:42 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 19:59:42 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(18): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 19:59:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 19:59:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 20:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 20:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 20:00:35 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 20:00:35 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(19): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 20:00:43 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
2011-10-23 20:00:43 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Can't connect to local MySQL server through socket '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock' (2) ~ MODPATH/database/classes/kohana/database/mysql.php [ 67 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/mysql.php(171): Kohana_Database_MySQL->connect()
#1 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO con...', false, Array)
#2 /WebServer/peoples/application/classes/model/add.php(63): Kohana_Database_Query->execute()
#3 /WebServer/peoples/application/classes/controller/add.php(19): Model_Add->addChoice()
#4 [internal function]: Controller_Add->action_index()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Add))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 20:00:43 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2011-10-23 20:00:43 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-23 20:09:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL overview was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 20:09:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL overview was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 20:13:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL overview was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 20:13:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL overview was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 20:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL overview was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 20:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL overview was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 20:16:46 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/overview.php [ 8 ]
2011-10-23 20:16:46 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH/views/overview.php [ 8 ]
--
#0 /WebServer/peoples/application/views/overview.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 8, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Overview))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 21:46:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ass was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2011-10-23 21:46:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ass was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 22:01:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH/views/overview.php [ 13 ]
2011-10-23 22:01:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH/views/overview.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:02:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH/views/overview.php [ 13 ]
2011-10-23 22:02:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[', expecting ',' or ';' ~ APPPATH/views/overview.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:02:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/overview.php [ 9 ]
2011-10-23 22:02:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/overview.php [ 9 ]
--
#0 /WebServer/peoples/application/views/overview.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 9, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Overview))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 22:03:10 --- ERROR: Database_Exception [ 1146 ]: Table 'choices.results' doesn't exist [ SELECT * FROM `results` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:03:10 --- STRACE: Database_Exception [ 1146 ]: Table 'choices.results' doesn't exist [ SELECT * FROM `results` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:09:10 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'SELECT DISTINCT first_name, last_name, dob, color GROUP BY color' in 'field list' [ SELECT `SELECT DISTINCT first_name, last_name, dob, color GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:09:10 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'SELECT DISTINCT first_name, last_name, dob, color GROUP BY color' in 'field list' [ SELECT `SELECT DISTINCT first_name, last_name, dob, color GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `SELECT ...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:09:41 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'SELECT DISTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color' in 'field list' [ SELECT `SELECT DISTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:09:41 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'SELECT DISTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color' in 'field list' [ SELECT `SELECT DISTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `SELECT ...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:09:56 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'SELECT DISTINCT * FROM consumer_record GROUP BY color' in 'field list' [ SELECT `SELECT DISTINCT * FROM consumer_record GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:09:56 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'SELECT DISTINCT * FROM consumer_record GROUP BY color' in 'field list' [ SELECT `SELECT DISTINCT * FROM consumer_record GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `SELECT ...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:10:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::query() ~ APPPATH/classes/controller/overview.php [ 10 ]
2011-10-23 22:10:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::query() ~ APPPATH/classes/controller/overview.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:10:27 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'DISTINCT * FROM consumer_record GROUP BY color' in 'field list' [ SELECT `DISTINCT * FROM consumer_record GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:10:27 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'DISTINCT * FROM consumer_record GROUP BY color' in 'field list' [ SELECT `DISTINCT * FROM consumer_record GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `DISTINC...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:10:46 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'DISTINCT * GROUP BY color' in 'field list' [ SELECT `DISTINCT * GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:10:46 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'DISTINCT * GROUP BY color' in 'field list' [ SELECT `DISTINCT * GROUP BY color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `DISTINC...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:17:31 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'Query' ~ APPPATH/classes/controller/overview.php [ 15 ]
2011-10-23 22:17:31 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'Query' ~ APPPATH/classes/controller/overview.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:17:58 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'instance' ~ APPPATH/classes/controller/overview.php [ 15 ]
2011-10-23 22:17:58 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'instance' ~ APPPATH/classes/controller/overview.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:18:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'DISCTINCT' in 'field list' [ SELECT DISCTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:18:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'DISCTINCT' in 'field list' [ SELECT DISCTINCT first_name, last_name, dob, color FROM consumer_record GROUP BY color ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(Object(Database_MySQL), 'SELECT DISCTINC...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(16): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:19:12 --- ERROR: Database_Exception [ 1146 ]: Table 'choices.posts' doesn't exist [ SELECT DISTINCT `first_name` FROM `posts` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:19:12 --- STRACE: Database_Exception [ 1146 ]: Table 'choices.posts' doesn't exist [ SELECT DISTINCT `first_name` FROM `posts` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:19:25 --- ERROR: ErrorException [ 8 ]: Undefined index: last_name ~ APPPATH/views/overview.php [ 11 ]
2011-10-23 22:19:25 --- STRACE: ErrorException [ 8 ]: Undefined index: last_name ~ APPPATH/views/overview.php [ 11 ]
--
#0 /WebServer/peoples/application/views/overview.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 11, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Overview))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 22:19:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'first_name, last_name, dob, color' in 'field list' [ SELECT DISTINCT `first_name, last_name, dob, color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:19:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'first_name, last_name, dob, color' in 'field list' [ SELECT DISTINCT `first_name, last_name, dob, color` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(11): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_index()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:23:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL overview/unique was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2011-10-23 22:23:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL overview/unique was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-23 22:27:06 --- ERROR: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
2011-10-23 22:27:06 --- STRACE: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH/classes/kohana/controller/template.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:35:57 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT *) FROM consumer_record WHERE color = "red"' at line 1 [ (COUNT *) FROM consumer_record WHERE color = "red" ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:35:57 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT *) FROM consumer_record WHERE color = "red"' at line 1 [ (COUNT *) FROM consumer_record WHERE color = "red" ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, '(COUNT *) FROM ...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(25): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_stats()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:42:02 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/overview.php [ 26 ]
2011-10-23 22:42:02 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH/classes/controller/overview.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 22:42:40 --- ERROR: ErrorException [ 2 ]: Missing argument 3 for Kohana_Database_Query_Builder_Where::where(), called in /WebServer/peoples/application/classes/controller/overview.php on line 25 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
2011-10-23 22:42:40 --- STRACE: ErrorException [ 2 ]: Missing argument 3 for Kohana_Database_Query_Builder_Where::where(), called in /WebServer/peoples/application/classes/controller/overview.php on line 25 and defined ~ MODPATH/database/classes/kohana/database/query/builder/where.php [ 30 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query/builder/where.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', '/WebServer/peop...', 30, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(25): Kohana_Database_Query_Builder_Where->where('color', 'red')
#2 [internal function]: Controller_Overview->action_stats()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:51:17 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'COUNT(*)' in 'field list' [ SELECT `color`, `COUNT(*)` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:51:17 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'COUNT(*)' in 'field list' [ SELECT `color`, `COUNT(*)` FROM `consumer_record` ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `color`,...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(26): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_stats()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:53:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$execute ~ APPPATH/classes/controller/overview.php [ 27 ]
2011-10-23 22:53:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$execute ~ APPPATH/classes/controller/overview.php [ 27 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/peop...', 27, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 22:54:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: amountRedA ~ APPPATH/classes/controller/overview.php [ 26 ]
2011-10-23 22:54:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: amountRedA ~ APPPATH/classes/controller/overview.php [ 26 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 26, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 22:55:09 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(*) FROM consumer_record WHERE color = "red"' at line 1 [ COUNT(*) FROM consumer_record WHERE color = "red" ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 22:55:09 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(*) FROM consumer_record WHERE color = "red"' at line 1 [ COUNT(*) FROM consumer_record WHERE color = "red" ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'COUNT(*) FROM c...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(26): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_stats()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 22:59:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/overview.php [ 23 ]
2011-10-23 22:59:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/controller/overview.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:00:18 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 3962881 bytes) ~ APPPATH/classes/controller/overview.php [ 27 ]
2011-10-23 23:00:18 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 3962881 bytes) ~ APPPATH/classes/controller/overview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:00:24 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 3962881 bytes) ~ APPPATH/classes/controller/overview.php [ 27 ]
2011-10-23 23:00:24 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 3962881 bytes) ~ APPPATH/classes/controller/overview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:00:41 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 14981121 bytes) ~ APPPATH/classes/controller/overview.php [ 27 ]
2011-10-23 23:00:41 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 14981121 bytes) ~ APPPATH/classes/controller/overview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:05:27 --- ERROR: ErrorException [ 8 ]: Undefined variable: amountR ~ APPPATH/classes/controller/overview.php [ 34 ]
2011-10-23 23:05:27 --- STRACE: ErrorException [ 8 ]: Undefined variable: amountR ~ APPPATH/classes/controller/overview.php [ 34 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 34, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:06:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: armountR ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:06:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: armountR ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 35, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:06:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: armountR ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:06:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: armountR ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/WebServer/peop...', 35, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:07:29 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/classes/controller/overview.php [ 31 ]
2011-10-23 23:07:29 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/classes/controller/overview.php [ 31 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:08:20 --- ERROR: ErrorException [ 8 ]: Undefined index: COUNT(*) ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:08:20 --- STRACE: ErrorException [ 8 ]: Undefined index: COUNT(*) ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 35, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:08:25 --- ERROR: ErrorException [ 8 ]: Undefined index: COUNT ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:08:25 --- STRACE: ErrorException [ 8 ]: Undefined index: COUNT ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 35, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:08:26 --- ERROR: ErrorException [ 8 ]: Undefined index: COUNT ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:08:26 --- STRACE: ErrorException [ 8 ]: Undefined index: COUNT ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 35, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:08:27 --- ERROR: ErrorException [ 8 ]: Undefined index: COUNT ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:08:27 --- STRACE: ErrorException [ 8 ]: Undefined index: COUNT ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(35): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 35, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:09:12 --- ERROR: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/classes/controller/overview.php [ 34 ]
2011-10-23 23:09:12 --- STRACE: ErrorException [ 8 ]: Undefined index: count ~ APPPATH/classes/controller/overview.php [ 34 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 34, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:09:21 --- ERROR: ErrorException [ 8 ]: Undefined index: COUNT (*) ~ APPPATH/classes/controller/overview.php [ 34 ]
2011-10-23 23:09:21 --- STRACE: ErrorException [ 8 ]: Undefined index: COUNT (*) ~ APPPATH/classes/controller/overview.php [ 34 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 34, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:09:38 --- ERROR: ErrorException [ 1 ]: Call to undefined function var_dumo() ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:09:38 --- STRACE: ErrorException [ 1 ]: Call to undefined function var_dumo() ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:09:46 --- ERROR: ErrorException [ 1 ]: Call to undefined function var_dumo() ~ APPPATH/classes/controller/overview.php [ 35 ]
2011-10-23 23:09:46 --- STRACE: ErrorException [ 1 ]: Call to undefined function var_dumo() ~ APPPATH/classes/controller/overview.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-23 23:10:09 --- ERROR: ErrorException [ 8 ]: Undefined index: COUNT(*) ~ APPPATH/classes/controller/overview.php [ 34 ]
2011-10-23 23:10:09 --- STRACE: ErrorException [ 8 ]: Undefined index: COUNT(*) ~ APPPATH/classes/controller/overview.php [ 34 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(34): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 34, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:12:20 --- ERROR: ErrorException [ 8 ]: Undefined index: users ~ APPPATH/views/overview.php [ 23 ]
2011-10-23 23:12:20 --- STRACE: ErrorException [ 8 ]: Undefined index: users ~ APPPATH/views/overview.php [ 23 ]
--
#0 /WebServer/peoples/application/views/overview.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 23, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Overview))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 23:15:41 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH/classes/controller/overview.php [ 28 ]
2011-10-23 23:15:41 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH/classes/controller/overview.php [ 28 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/peop...', 28, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:16:24 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH/classes/controller/overview.php [ 28 ]
2011-10-23 23:16:24 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_Query::$execute ~ APPPATH/classes/controller/overview.php [ 28 ]
--
#0 /WebServer/peoples/application/classes/controller/overview.php(28): Kohana_Core::error_handler(8, 'Undefined prope...', '/WebServer/peop...', 28, Array)
#1 [internal function]: Controller_Overview->action_stats()
#2 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#3 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-23 23:16:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(*) FROM consumer_record' at line 1 [ SELECT DISTINCT first_name, last_name COUNT(*) FROM consumer_record ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
2011-10-23 23:16:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'COUNT(*) FROM consumer_record' at line 1 [ SELECT DISTINCT first_name, last_name COUNT(*) FROM consumer_record ] ~ MODPATH/database/classes/kohana/database/mysql.php [ 194 ]
--
#0 /WebServer/peoples/modules/database/classes/kohana/database/query.php(245): Kohana_Database_MySQL->query(1, 'SELECT DISTINCT...', false, Array)
#1 /WebServer/peoples/application/classes/controller/overview.php(28): Kohana_Database_Query->execute()
#2 [internal function]: Controller_Overview->action_stats()
#3 /WebServer/peoples/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Overview))
#4 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-23 23:16:42 --- ERROR: ErrorException [ 8 ]: Undefined index: amountBlue ~ APPPATH/views/overview.php [ 27 ]
2011-10-23 23:16:42 --- STRACE: ErrorException [ 8 ]: Undefined index: amountBlue ~ APPPATH/views/overview.php [ 27 ]
--
#0 /WebServer/peoples/application/views/overview.php(27): Kohana_Core::error_handler(8, 'Undefined index...', '/WebServer/peop...', 27, Array)
#1 /WebServer/peoples/system/classes/kohana/view.php(61): include('/WebServer/peop...')
#2 /WebServer/peoples/system/classes/kohana/view.php(343): Kohana_View::capture('/WebServer/peop...', Array)
#3 /WebServer/peoples/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 /WebServer/peoples/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Overview))
#6 /WebServer/peoples/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /WebServer/peoples/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /WebServer/peoples/index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-23 23:27:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/overview.php [ 51 ]
2011-10-23 23:27:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/controller/overview.php [ 51 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}