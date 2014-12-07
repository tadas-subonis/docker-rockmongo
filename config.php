<?php
/**
 * RockMongo configuration
 *
 * Defining default options and server configuration
 * @package rockmongo
 */
 
$MONGO = array();
$MONGO["features"]["log_query"] = "on";//log queries
$MONGO["features"]["theme"] = "default";//theme
$MONGO["features"]["plugins"] = "on";//plugins

$i = 0;

/**
* Configuration of MongoDB servers
* 
* @see more details at http://rockmongo.com/wiki/configuration?lang=en_us
*/
$mongo_name = getenv("mongo_name");
if(!$mongo_name) $mongo_name = "Localhost";
$MONGO["servers"][$i]["mongo_name"] = $mongo_name;//mongo server name

//$MONGO["servers"][$i]["mongo_sock"] = "/var/run/mongo.sock";//mongo socket path (instead of host and port)

$mongo_host = getenv("mongo_host");
if(!$mongo_host) $mongo_host = "127.0.0.1";
$MONGO["servers"][$i]["mongo_host"] = $mongo_host;//mongo host

$mongo_port = getenv("mongo_port");
if(!$mongo_port) $mongo_port = "27017";
$MONGO["servers"][$i]["mongo_port"] = $mongo_port;//mongo port

$mongo_timeout = getenv("mongo_timeout");
if(!$mongo_timeout) $mongo_timeout = 0; 
$MONGO["servers"][$i]["mongo_timeout"] = $mongo_timeout;//mongo connection timeout

$mongo_db = getenv("mongo_db");
if(!$mongo_db) $mongo_db = "MONGO_DATABASE";
$MONGO["servers"][$i]["mongo_db"] = $mongo_db;//default mongo db to connect, works only if mongo_auth=false

$mongo_user = getenv("mongo_user");
if(!$mongo_user) $mongo_user = "MONGO_USERNAME";
$MONGO["servers"][$i]["mongo_user"] = $mongo_user;//mongo authentication user name, works only if mongo_auth=false

$mongo_pass = getenv("mongo_pass");
if(!$mongo_pass) $mongo_pass = "MONGO_PASSWORD";
$MONGO["servers"][$i]["mongo_pass"] = $mongo_pass;//mongo authentication password, works only if mongo_auth=false

$mongo_auth = getenv("mongo_auth");
$mongo_auth = ($mongo_auth === "true");
$MONGO["servers"][$i]["mongo_auth"] = $mongo_auth;//enable mongo authentication?

$control_auth = getenv("control_auth");
$control_auth = ($control_auth === "true");
$MONGO["servers"][$i]["control_auth"] = $control_auth;//enable control users, works only if mongo_auth=false

$control_users_password = getenv("control_users_password");
if(!$control_users_password) $control_users_password = "admin";
$MONGO["servers"][$i]["control_users"]["admin"] = $control_users_password;//one of control users ["USERNAME"]=PASSWORD, works only if mongo_auth=false

$MONGO["servers"][$i]["ui_only_dbs"] = "";//databases to display
$MONGO["servers"][$i]["ui_hide_dbs"] = "";//databases to hide
$MONGO["servers"][$i]["ui_hide_collections"] = "";//collections to hide
$MONGO["servers"][$i]["ui_hide_system_collections"] = false;//whether hide the system collections

//$MONGO["servers"][$i]["docs_nature_order"] = false;//whether show documents by nature order, default is by _id field
//$MONGO["servers"][$i]["docs_render"] = "default";//document highlight render, can be "default" or "plain"

$i ++;

/**
 * mini configuration for another mongo server
 */
/**
$MONGO["servers"][$i]["mongo_name"] = "Localhost2";
$MONGO["servers"][$i]["mongo_host"] = "127.0.0.1";
$MONGO["servers"][$i]["mongo_port"] = "27017";
$MONGO["servers"][$i]["control_users"]["admin"] = "password";
$i ++;
**/

?>