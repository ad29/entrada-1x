<?php
/**
 * Entrada [ http://www.entrada-project.org ]
 *
 * Entrada is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Entrada is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Entrada.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Entrada Authenticator - Server
 *
 * This server portion of the Entrada Authenticatior.
 *
 * @author Organisation: Queen's University
 * @author Unit: School of Medicine
 * @author Developer: Matt Simpson <matt.simpson@queensu.ca>
 * @copyright Copyright 2008 Queen's University. All Rights Reserved.
 *
*/

$config = new Zend_Config(require "config/config.inc.php");

define("AUTH_URL", $config->entrada_url."/authentication");						// Full URL to the directory where authenticate.php lives without a trailing slash.

define("DATABASE_TYPE", $config->database->adapter);							// MySQL is currently only supported.
define("DATABASE_HOST", $config->database->host);								// The host address of your MySQL server.
define("DATABASE_NAME",	$config->database->auth_database);						// The name of the database to connect to.
define("DATABASE_USER",	$config->database->username);							// A username that can access this database.
define("DATABASE_PASS",	$config->database->password);							// The password for the username to connect to the database.

define("LDAP_HOST", "ldap.yourschool.ca");										// The hostname of your LDAP server.
define("LDAP_BASE_DN", "ou=people,dc=queensu,dc=ca");							// The BaseDN of your LDAP server.
define("LDAP_SEARCH_DN", "uid=readonly,ou=people,dc=yourschool,dc=ca");			// The LDAP username that is used to search LDAP tree for the member attribute.
define("LDAP_SEARCH_DN_PASS", "");												// The LDAP password for the SearchDN above. These fields are optional.
define("LDAP_MEMBER_ATTR", "UniUid");											// The member attribute used to identify the users unique LDAP ID.
define("LDAP_USER_QUERY_FIELD", "UniCaPKey");									// The attribute used to identify the users staff / student number. Only used if LDAP_LOCAL_USER_QUERY_FIELD is set to "number".
define("LDAP_LOCAL_USER_QUERY_FIELD", "number");								// username | number : This field allows you to specify which local user_data field is used to search for a valid username.

define("ALLOW_LOCAL", true);													// true | false : whether you want to allow local database authentication or not.
define("ALLOW_LDAP", false);													// true | false : whether you want to allow LDAP authentication or not.
define("ALLOW_CAS", false);														// true | false : whether you want to allow CAS authentication or not.

define("NOTIFY_ADMIN_ON_ERROR",	false);

$AGENT_CONTACTS = array();
$AGENT_CONTACTS["administrator"] = array("name" => $config->admin->firstname." ".$config->admin->lastname, "email" => $config->admin->email);

define("LOG_DIRECTORY",	$config->entrada_storage."/logs");						// Full directory path to the logs directory without a trailing slash.