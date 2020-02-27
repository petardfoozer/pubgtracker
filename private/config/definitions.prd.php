<?php
use \App as App;
use \sb\Gateway as Gateway;

//These setting are used when the site runs in production

//Set debugging with display errors and tracing on
\sb\Application\Debugger::init(E_ALL, false, true);

//make files created by PHP group writable
umask(002);

//set the server
App::$server = 'prd';

define('API_KEY', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOiIyYzliOTFiMC02NGRjLTAxMzYtNTc1OC01M2I5NzlmYzY3NjciLCJpc3MiOiJnYW1lbG9ja2VyIiwiaWF0IjoxNTMxMDU0NTU0LCJwdWIiOiJibHVlaG9sZSIsInRpdGxlIjoicHViZyIsImFwcCI6InRlc3RhcHAtYzRlNmVlZGEtOGUzNy00MjllLTkxNjctZmE1MWM2YTU1MzYzIn0.W9uXTUU7KNfoo6FOiFtg2pJOUcmhPmcM4epoM74e00Q');


