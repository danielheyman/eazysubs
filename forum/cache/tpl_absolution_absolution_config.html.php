<?php if (!defined('IN_PHPBB')) exit; if ($this->_tpldata['DEFINE']['.']['ABSOLUTION']) {  ?>

####################################################
ABSOLUTION Configuation file for Forum Administrators
####################################################

Variables you can configure below: 

$ABSOLUTION_BOARD_WIDTH = Choose your board width here. Use either fixed width (900px, 1200px etc..) or percentages (50%, 80%, 100% etc..)
$LOGO_TYPE = Choose whether to display an image logo, or text in header. Optional values are "text" or "image"
$SHOW_FORUM_DESC_TOOLTIP_IN_VIEWFORUM = Would you like the forum description to fade in when you hover over the forum name in viewforum.php? Options are "yes" or "no"

<?php } $this->_tpldata['DEFINE']['.']['ABSOLUTION_BOARD_WIDTH'] = '1000px'; $this->_tpldata['DEFINE']['.']['LOGO_TYPE'] = 'image'; $this->_tpldata['DEFINE']['.']['SHOW_FORUM_DESC_TOOLTIP_IN_VIEWFORUM'] = 'no'; ?>