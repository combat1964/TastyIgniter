<?php
/**
 * TastyIgniter
 *
 * An open source online ordering, reservation and management system for restaurants.
 *
 * @package Igniter
 * @author Samuel Adepoyigi
 * @copyright (c) 2013 - 2016. Samuel Adepoyigi
 * @copyright (c) 2016 - 2017. TastyIgniter Dev Team
 * @link https://tastyigniter.com
 * @license http://opensource.org/licenses/MIT The MIT License
 * @since File available since Release 1.0
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug Profiler
|--------------------------------------------------------------------------
|
| If set to TRUE, a benchmark will be displayed. If profiler is set to
| FALSE, the benchmark will not display
|
*/
defined('TI_DEBUG') OR define('TI_DEBUG', TRUE);

/*
|--------------------------------------------------------------------------
| Back-end and front-end directory name
|--------------------------------------------------------------------------
|
| The name of the admin and main folder, do not change unless you rename the
| folders
|
*/
defined('ADMINDIR') OR define('ADMINDIR', 'admin');
defined('MAINDIR')  OR define('MAINDIR', 'main');

/*
|--------------------------------------------------------------------------
| Extensions directory path for front-end
|--------------------------------------------------------------------------
|   @todo: deprecate to use only modules_locations config value
| Folder name we expect to see extensions?
|
|	Default: 'extensions/' in the extensions folder
|
*/
defined('EXTPATH')  OR define('EXTPATH', 'extensions/igniterlabs/');

/*
|--------------------------------------------------------------------------
| Theme directory path for admin and front-end
|--------------------------------------------------------------------------
|
| Where should we expect to see themes?
|
|	Default: ROOTPATH.'themes/' in the /themes folder
|
*/
defined('THEMEPATH') OR define('THEMEPATH', ROOTPATH.'themes/');

/*
|--------------------------------------------------------------------------
| Assets directory path
|--------------------------------------------------------------------------
|
| Used by cache driver, assets library, MediaManager library, ....
|
| Where should we expect to see themes?
|
|	Default: ROOTPATH.'assets/' in the /assets folder
|
*/
define('ASSETPATH', ROOTPATH.'assets'.DIRECTORY_SEPARATOR);


// Path to the assets folder"

// Path to the images folder"
/*
|--------------------------------------------------------------------------
| Assets directory path
|--------------------------------------------------------------------------
|
| Used by MediaManager library, ....
|
| Where should we expect to see themes?
|
|	Default: ROOTPATH.'assets/images' in the /assets/images/ folder
|
*/
define('IMAGEPATH', ASSETPATH.'images'.DIRECTORY_SEPARATOR);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| TastyIgniter API Endpoint
|--------------------------------------------------------------------------
|
| These constants are used when working with TastyIgniter API
|
*/
defined('TI_ENDPOINT') OR define('TI_ENDPOINT', 'http://api.tastyigniter.com/v2/');
defined('TI_REST_AUTH') OR define('TI_REST_AUTH', 'TI-Rest-Key');
defined('TI_SITE_AUTH') OR define('TI_SITE_AUTH', 'TI-Site-Key');
defined('TI_SIGN_REQUEST') OR define('TI_SIGN_REQUEST', 'TI-Sign-Request');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code