<?php

define("APP_SITE_PATH_FRONT", "http://".$_SERVER['HTTP_HOST']."/siemens/elecrama/");

define("APP_SITE_PATH", APP_SITE_PATH_FRONT."datacheck/");
define("APP_SITE_PATH_CSS", APP_SITE_PATH."css/");
define("APP_SITE_PATH_JS", APP_SITE_PATH."js/");
define("APP_SITE_PATH_IMAGES", APP_SITE_PATH."images/");



/**Module Path**/
define("PATH_REGISTER", APP_SITE_PATH."register/");
define("USER_DOC", APP_SITE_PATH_FRONT."media/doc/");

define('TITLE_TAG', 'Siemens - Admin');

define('LIMIT', '20');
define ("FILEREPOSITORY","media/doc");
define("FILESIZE","5124");
?>