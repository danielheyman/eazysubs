<?php if (!defined('IN_PHPBB')) exit; ?><div style="clear: both; height: 0;"></div>
	<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>


<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

</div>
<div id="stopka">
<span id="theme">Theme designed by <a href="http://stylerbb.net/">stylerbb.net</a> &amp; <a href="http://www.programosy.pl">programy</a> &copy; 2008</span><br />
Powered by <a href="http://www.phpbb.com/">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group
	<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?>

	<br /><?php echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?>

	<?php if ($this->_rootref['U_ACP']) {  ?><br /><br /><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span><?php } ?>

</div>
</div>


</body>
</html>