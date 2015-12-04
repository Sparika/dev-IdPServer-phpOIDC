<?php
/**
 * Copyright 2013 Nomura Research Institute, Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0

 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

 
/**
 * MySQL db settings
 */
$wgDBserver         = $_ENV['OPENSHIFT_MYSQL_DB_HOST'];
$wgDBport 			= $_ENV['OPENSHIFT_MYSQL_DB_PORT'];
$wgDBname           = $_ENV['OPENSHIFT_APP_NAME'];
$wgDBuser           = $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'];
$wgDBpassword       = $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'];

define('DB_TYPE',               'mysql');
define('DB_USER',               $wgDBuser);
define('DB_PASSWORD',           $wgDBpassword);
define('DB_HOST',               $wgDBserver);
define('DB_PORT',               $wgDBport);
define('DB_DATABASE',           $wgDBname);
define('DB_CONNECTION_NAME',    'phpoidc_connection');

define("DSN", DB_TYPE . '://' . DB_USER . ':' . DB_PASSWORD . '@' . DB_HOST . ':' . DB_PORT . '/' . DB_DATABASE );
define('DB_CONNECTION',    Doctrine_Manager::connection(DSN, DB_CONNECTION_NAME));
?>