<?php
/******************************************************************************
 * Konstanten die innerhalb Admidios benoetigt werden
 *
 * Copyright    : (c) 2004 - 2007 The Admidio Team
 * Homepage     : http://www.admidio.org
 * Module-Owner : Markus Fassbender
 * License      : GNU Public License 2 http://www.gnu.org/licenses/gpl-2.0.html
 *
 *****************************************************************************/

if ('constants.php' == basename($_SERVER['SCRIPT_FILENAME']))
{
    die('Diese Seite darf nicht direkt aufgerufen werden !');
}

// Admidio-Versionsnummer bitte nicht aendern !!!
define('ADMIDIO_VERSION', '2.0 Beta');  


// verschiedene Pfade
define('SERVER_PATH', substr(__FILE__, 0, strpos(__FILE__, "adm_program")-1));
define('CURRENT_URL', "http://". $_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI']);


// Defines fuer alle Datenbanktabellen
define("TBL_ANNOUNCEMENTS",     $g_tbl_praefix. "_announcements");
define("TBL_AUTO_LOGIN",        $g_tbl_praefix. "_auto_login");
define("TBL_CATEGORIES",        $g_tbl_praefix. "_categories");
define("TBL_DATES",             $g_tbl_praefix. "_dates");
define("TBL_FILES",             $g_tbl_praefix. "_files");
define("TBL_FOLDERS",           $g_tbl_praefix. "_folders");
define("TBL_FOLDER_ROLES",      $g_tbl_praefix. "_folder_roles");
define("TBL_GUESTBOOK",         $g_tbl_praefix. "_guestbook");
define("TBL_GUESTBOOK_COMMENTS",$g_tbl_praefix. "_guestbook_comments");
define("TBL_LINKS",             $g_tbl_praefix. "_links");
define("TBL_MEMBERS",           $g_tbl_praefix. "_members");
define("TBL_ORGANIZATIONS",     $g_tbl_praefix. "_organizations");
define("TBL_PHOTOS",            $g_tbl_praefix. "_photos");
define("TBL_PREFERENCES",       $g_tbl_praefix. "_preferences");
define("TBL_ROLE_DEPENDENCIES", $g_tbl_praefix. "_role_dependencies");
define("TBL_ROLES",             $g_tbl_praefix. "_roles");
define("TBL_SESSIONS",          $g_tbl_praefix. "_sessions");
define("TBL_TEXTS",             $g_tbl_praefix. "_texts");
define("TBL_USERS",             $g_tbl_praefix. "_users");
define("TBL_USER_DATA",         $g_tbl_praefix. "_user_data");
define("TBL_USER_FIELDS",       $g_tbl_praefix. "_user_fields");

?>
