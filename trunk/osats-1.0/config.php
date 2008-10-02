<?php
/*
 * CATS
 * Configuration File
 *
 * Copyright (C) 2005 - 2007 Cognizo Technologies, Inc.
 *
 *
 * The contents of this file are subject to the CATS Public License
 * Version 1.1a (the "License"); you may not use this file except in
 * compliance with the License. You may obtain a copy of the License at
 * http://www.catsone.com/.
 *
 * Software distributed under the License is distributed on an "AS IS"
 * basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 * License for the specific language governing rights and limitations
 * under the License.
 *
 * The Original Code is "CATS Standard Edition".
 *
 * The Initial Developer of the Original Code is Cognizo Technologies, Inc.
 * Portions created by the Initial Developer are Copyright (C) 2005 - 2007
 * (or from the year in which this file was created to the year 2007) by
 * Cognizo Technologies, Inc. All Rights Reserved.
 *
 *
 * $Id: config.php 3826 2007-12-10 06:03:18Z will $
 */

/* License key. */
define('LICENSE_KEY', '3163GQ-54ISGW-14E4SHD-ES9ICL-X02DTG-GYRSQ6');

/* Database configuration. */
define('DATABASE_USER', 'root');
define('DATABASE_PASS', 'putinyourpasswordhere');
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'cats');

/* Resfly.com Resume Import Services Enabled */
define('PARSING_ENABLED', true);

/* If you have an SSL compatible server, you can enable SSL for all of CATS. */
define('SSL_ENABLED', false);

/* Text parser settings. Remember to use double backslashes (\) to represent
 * one backslash (\). On Windows, installing in C:\antiword\ is
 * recomended, in which case you should set ANTIWORD_PATH (below) to
 * 'C:\\antiword\\antiword.exe'. Windows Antiword will have problems locating
 * mapping files if you install it anywhere but C:\antiword\.
 */
define('ANTIWORD_PATH', "c:\\antiword\\antiword.exe");
define('ANTIWORD_MAP', '8859-1.txt');

/* XPDF / pdftotext settings. Remember to use double backslashes (\) to represent
 * one backslash (\).
 * http://www.foolabs.com/xpdf/
 */
define('PDFTOTEXT_PATH', "c:\\catsbin\\pdftotext.exe");

/* html2text settings. Remember to use double backslashes (\) to represent
 * one backslash (\). 'html2text' can be found at:
 * http://www.mbayer.de/html2text/
 */
define('HTML2TEXT_PATH', "c:\\catsbin\\html2text.exe");

/* UnRTF settings. Remember to use double backslashes (\) to represent
 * one backslash (\). 'unrtf' can be found at:
 * http://www.gnu.org/software/unrtf/unrtf.html
 */
define('UNRTF_PATH', "c:\\catsbin\\unrtf.exe");

/* Temporary directory. Set this to a directory that is writable by the
 * web server. The default should be fine for most systems. Remember to
 * use double backslashes (\) to represent one backslash (\) on Windows.
 */
define('CATS_TEMP_DIR', './temp');

/* If User Details and Login Activity pages in the settings module are
 * unbearably slow, set this to false.
 */
define('ENABLE_HOSTNAME_LOOKUP', false);

/* CATS can optionally use Sphinx to speed up document searching.
 * Install Sphinx and set ENABLE_SPHINX (below) to true to enable Sphinx.
 */
define('ENABLE_SPHINX', false);
define('SPHINX_API', './lib/sphinx/sphinxapi.php');
define('SPHINX_HOST', 'localhost');
define('SPHINX_PORT', 3312);
define('SPHINX_INDEX', 'cats catsdelta');

/* Probably no need to edit anything below this line. */


/* Pager settings. These are the number of results per page. */
define('CONTACTS_PER_PAGE',      15);
define('CANDIDATES_PER_PAGE',    15);
define('CLIENTS_PER_PAGE',       15);
define('LOGIN_ENTRIES_PER_PAGE', 15);

/* Maximum number of characters of the owner/recruiter users' last names
 * to show before truncating.
 */
define('LAST_NAME_MAXLEN', 6);

/* Length of resume excerpts displayed in Search Candidates results. */
define('SEARCH_EXCERPT_LENGTH', 256);

/* Number of MRU list items. */
define('MRU_MAX_ITEMS', 5);

/* MRU item length. Truncate the rest */
define('MRU_ITEM_LENGTH', 20);

/* Number of recent search items. */
define('RECENT_SEARCH_MAX_ITEMS', 5);

/* HTML Encoding. */
define('HTML_ENCODING', 'UTF-8');

/* AJAX Encoding. */
define('AJAX_ENCODING', 'UTF-8');

/* Path to modules. */
define('MODULES_PATH', './modules/');

/* Unique session name. The only reason you might want to modify this is
 * for multiple CATS installations on one server. A-Z, 0-9 only! */
define('CATS_SESSION_NAME', 'OSATS');

/* Subject line of e-mails sent to candidates via the career portal when they
 * apply for a job order.
 */
define('CAREERS_CANDIDATEAPPLY_SUBJECT', 'Thank You for Your Application');

/* Subject line of e-mails sent to job order owners via the career portal when
 * they apply for a job order.
 */
define('CAREERS_OWNERAPPLY_SUBJECT', 'OSATS - A Candidate Has Applied to Your Job Order');

/* Subject line of e-mails sent to candidates when their status changes for a
 * job order.
 */
define('CANDIDATE_STATUSCHANGE_SUBJECT', 'Job Application Status Change');

/* Password request settings.
 *
 * In FORGOT_PASSWORD_FROM, %s is the placeholder for the password.
 */
define('FORGOT_PASSWORD_FROM_NAME', 'OSATS');
define('FORGOT_PASSWORD_SUBJECT',   'OSATS - Password Retrieval Request');
define('FORGOT_PASSWORD_BODY',      'You recently requested that your OSATS: Applicant Tracking System password be sent to you. Your current password is %s.');

/* Is this a demo site? */
define('ENABLE_DEMO_MODE', false);

/* Offset to GMT Time. */
define('OFFSET_GMT', -6);

/* Should we enforce only one session per user (excluding demo)? */
define('ENABLE_SINGLE_SESSION', false);

/*Choose a email method.
 *
 * 0: Disabled
 * 1: PHP Built-In Mail Support
 * 2: Sendmail
 * 3: SMTP
 */
define('MAIL_MAILER', 3);

/* Sendmail Settings.  */
define('MAIL_SENDMAIL_PATH', "/usr/sbin/sendmail");

/* SMTP Settings. Define if you chose SMTP Above. */
define('MAIL_SMTP_HOST', "");
define('MAIL_SMTP_PORT', 25);
define('MAIL_SMTP_AUTH', true);
define('MAIL_SMTP_USER', "");
define('MAIL_SMTP_PASS', "");

/* Event reminder E-Mail Template. */
$GLOBALS['eventReminderEmail'] = <<<EOF
DO NOT REPLY - OSATS Applicant Tracking System - DO NOT REPLY
%FULLNAME%,

This is a reminder from the OSATS Applicant Tracking System about an
upcoming event.

'%EVENTNAME%'
Is scheduled to occur %DUETIME%.

Description:
%NOTES%

----------
OSATS Applicant Tracking System - DO NOT REPLY
EOF;

/* Enable replication slave mode? This is probably only useful for the CATS
 * core team. If this setting is enabled, no writing to the database will
 * occur, and only ROOT users can login.
 */
define('CATS_SLAVE', false);

/* If enabled, CATS only scans the modules folder once and stores the results
 * in modules.cache.  When enabled, a performance boost is obtained, but
 * any changes to hooks, schemas, or what modules are installed will require
 * modules.cache to be deleted before they take effect.
 */

define('CACHE_MODULES', false);

/* If enabled, the US zipcode database is installed and the user can filter
 * by distance from a zipcode.
 */

define('US_ZIPS_ENABLED', false);

?>