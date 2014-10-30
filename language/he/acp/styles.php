<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_STYLES_EXPLAIN'		=> 'Here you can manage the available styles on your board. You may alter existing styles, delete, deactivate, reactivate, install new ones. You can also see what a style will look like using the preview function. Also listed is the total user count for each style, note that overriding user styles will not be reflected here.',

	'CANNOT_BE_INSTALLED'		=> 'Cannot be installed',
	'CONFIRM_UNINSTALL_STYLES'	=> 'אתה בטוח שברצונך להסיר את העיצובים שנבחרו?',
	'COPYRIGHT'					=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'אינך יכול להפוך את עיצוב ברירת המחדל ללא לפעיל',
	'DELETE_FROM_FS'			=> 'מחק מקבצי המערכת',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error deleting files for style "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Files for style "%s" have been deleted.',
	'DETAILS'					=> 'פרטים',

	'INHERITING_FROM'			=> 'Inherits from',
	'INSTALL_STYLE'				=> 'התקן עיצוב',
	'INSTALL_STYLES'			=> 'התקן עיצובים',
	'INSTALL_STYLES_EXPLAIN'	=> 'Here you can install new styles.<br />If you cannot find a specific style in list below, check to make sure style is already installed. If it is not installed, check if it was uploaded correctly.',
	'INVALID_STYLE_ID'			=> 'Invalid style ID.',

	'NO_MATCHING_STYLES_FOUND'	=> 'לא נמצאו עיצובים מתאימים לשאילתה שלך.',
	'NO_UNINSTALLED_STYLE'		=> 'לא אותרו עיצובים לא מותקנים.',

	'PURGED_CACHE'				=> 'זיכרון המטמון נוקה.',

	'REQUIRES_STYLE'			=> 'This style requires the style "%s" to be installed.',

	'STYLE_ACTIVATE'			=> 'הפעל',
	'STYLE_ACTIVE'				=> 'פעיל',
	'STYLE_DEACTIVATE'			=> 'בטל',
	'STYLE_DEFAULT'				=> 'סמן עיצוב ברירת מחדל',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'You must activate style before making it default style.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Invalid parent style.',
	'STYLE_ERR_NAME_EXIST'		=> 'עיצוב עם שם זה כבר קיים.',
	'STYLE_ERR_STYLE_NAME'		=> 'אתה מוכרח לציין שם לעיצוב זה.',
	'STYLE_INSTALLED'			=> 'Style "%s" has been installed.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'חזור לרשימת העיצובים המותקנים',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'התקן עוד עיצובים',
	'STYLE_NAME'				=> 'שם העיצוב',
	'STYLE_NOT_INSTALLED'		=> 'עיצוב "%s" לא הותקן.',
	'STYLE_PATH'				=> 'Style path',
	'STYLE_UNINSTALL'			=> 'הסר',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Style "%s" cannot be uninstalled because it has one or more child styles.',
	'STYLE_UNINSTALLED'			=> 'Style "%s" uninstalled successfully.',
	'STYLE_USED_BY'				=> 'Used by (including robots)',

	'UNINSTALL_DEFAULT'			=> 'אין באפשרותך להסיר את עיצוב ברירת המחדל.',
));
