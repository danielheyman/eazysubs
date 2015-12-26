<?php if (!defined('IN_PHPBB')) exit; ?></div>

<div id="page-footer">

<div class="toolbar-footer">
<div class="toolbar-left" style="padding-top: 5px; height: 31px;">
<div class="float-left"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/house.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a><?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_WATCH_FORUM_LINK']) {  ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/<?php if ($this->_rootref['S_WATCHING_FORUM']) {  ?>delete<?php } else { ?>accept<?php } ?>.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['S_WATCH_FORUM_LINK'])) ? $this->_rootref['S_WATCH_FORUM_LINK'] : ''; ?>" title="<?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?>"><?php echo (isset($this->_rootref['S_WATCH_FORUM_TITLE'])) ? $this->_rootref['S_WATCH_FORUM_TITLE'] : ''; ?></a><?php } if ($this->_rootref['U_WATCH_TOPIC']) {  ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/<?php if ($this->_rootref['S_WATCHING_TOPIC']) {  ?>delete<?php } else { ?>accept<?php } ?>.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['U_WATCH_TOPIC'])) ? $this->_rootref['U_WATCH_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_WATCH_TOPIC'])) ? $this->_rootref['L_WATCH_TOPIC'] : ((isset($user->lang['WATCH_TOPIC'])) ? $user->lang['WATCH_TOPIC'] : '{ WATCH_TOPIC }')); ?></a><?php } if ($this->_rootref['U_BOOKMARK_TOPIC']) {  ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/book_add.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['U_BOOKMARK_TOPIC'])) ? $this->_rootref['U_BOOKMARK_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BOOKMARK_TOPIC'])) ? $this->_rootref['L_BOOKMARK_TOPIC'] : ((isset($user->lang['BOOKMARK_TOPIC'])) ? $user->lang['BOOKMARK_TOPIC'] : '{ BOOKMARK_TOPIC }')); ?></a><?php } if ($this->_rootref['U_BUMP_TOPIC']) {  ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/clock.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['U_BUMP_TOPIC'])) ? $this->_rootref['U_BUMP_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?>"><?php echo ((isset($this->_rootref['L_BUMP_TOPIC'])) ? $this->_rootref['L_BUMP_TOPIC'] : ((isset($user->lang['BUMP_TOPIC'])) ? $user->lang['BUMP_TOPIC'] : '{ BUMP_TOPIC }')); ?></a><?php } } ?>

<!-- Please leave the copyright notice below intact, it's the only kind of attribution / payment I get for freely creating the style.
If you (honestly) can't keep it, I'd rather you didn't use the style. -->

<br />&copy; Absolution Style by <a href="http://www.christianbullock.com">Christian Bullock</a></div></div>

<!-- End of copyright notice -->

<div class="float-right toolbar-bottom-right"><div class="toolbar-right" style="padding-top: 5px; height: 31px; padding-right: 5px;"><?php if ($this->_rootref['U_TEAM']) {  ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/bricks.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['U_TEAM'])) ? $this->_rootref['U_TEAM'] : ''; ?>"><?php echo ((isset($this->_rootref['L_THE_TEAM'])) ? $this->_rootref['L_THE_TEAM'] : ((isset($user->lang['THE_TEAM'])) ? $user->lang['THE_TEAM'] : '{ THE_TEAM }')); ?></a><?php } if (! $this->_rootref['S_IS_BOT']) {  ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/delete.png" width="16" height="16" alt="" /> <a href="<?php echo (isset($this->_rootref['U_DELETE_COOKIES'])) ? $this->_rootref['U_DELETE_COOKIES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_DELETE_COOKIES'])) ? $this->_rootref['L_DELETE_COOKIES'] : ((isset($user->lang['DELETE_COOKIES'])) ? $user->lang['DELETE_COOKIES'] : '{ DELETE_COOKIES }')); ?></a>&bull; <?php } echo (isset($this->_rootref['S_TIMEZONE'])) ? $this->_rootref['S_TIMEZONE'] : ''; ?><br />

<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<?php if ($this->_rootref['U_ACP']) {  ?><a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?> &bull;</a><?php } ?>Powered by <a href="http://www.phpbb.com/">phpBB</a>&copy; 2000, 2002, 2005, 2007 phpBB Group
</div>
</div><!-- /float-right -->
</div><!-- /footer-toolbar-->




		<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?>	<div class="copyright"><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; ?>	</div><?php } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><div class="copyright"><?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?></div><?php } ?>

</div>

</div>

<div>
	<a id="bottom" name="bottom" accesskey="z"></a>
	<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>
</div>

</div> <!-- /#page-content -->


	<div id="secondary-sidebar"></div>
    </div> <!-- /#page-wrap --><?php if ($this->_rootref['SCRIPT_NAME'] == ('index') || $this->_rootref['SCRIPT_NAME'] == ('viewforum')) {  ?></div><?php } ?>
 </body>
</html>