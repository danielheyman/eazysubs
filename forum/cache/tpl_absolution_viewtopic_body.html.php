<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); if ($this->_rootref['U_MCP']) {  ?><p>[&nbsp;<a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a>&nbsp;]</p><?php } ?>
<h2><a href="<?php echo (isset($this->_rootref['U_VIEW_TOPIC'])) ? $this->_rootref['U_VIEW_TOPIC'] : ''; ?>"><?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?></a></h2>
<!-- NOTE: remove the style="display: none" when you want to have the forum description on the topic body --><?php if ($this->_rootref['FORUM_DESC']) {  ?><div style="display: none !important;"><?php echo (isset($this->_rootref['FORUM_DESC'])) ? $this->_rootref['FORUM_DESC'] : ''; ?><br /></div><?php } if ($this->_rootref['MODERATORS'] || $this->_rootref['U_MCP']) {  ?>
	<p>
		<?php if ($this->_rootref['MODERATORS']) {  ?>
			<strong><?php if ($this->_rootref['S_SINGLE_MODERATOR']) {  echo ((isset($this->_rootref['L_MODERATOR'])) ? $this->_rootref['L_MODERATOR'] : ((isset($user->lang['MODERATOR'])) ? $user->lang['MODERATOR'] : '{ MODERATOR }')); } else { echo ((isset($this->_rootref['L_MODERATORS'])) ? $this->_rootref['L_MODERATORS'] : ((isset($user->lang['MODERATORS'])) ? $user->lang['MODERATORS'] : '{ MODERATORS }')); } ?>:</strong> <?php echo (isset($this->_rootref['MODERATORS'])) ? $this->_rootref['MODERATORS'] : ''; ?>
		<?php } ?>

	</p>
<?php } if ($this->_rootref['S_FORUM_RULES']) {  ?>
	<div class="rules">
		<?php if ($this->_rootref['U_FORUM_RULES']) {  ?>
			<a href="<?php echo (isset($this->_rootref['U_FORUM_RULES'])) ? $this->_rootref['U_FORUM_RULES'] : ''; ?>"><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></a>
		<?php } else { ?>
			<h3><?php echo ((isset($this->_rootref['L_FORUM_RULES'])) ? $this->_rootref['L_FORUM_RULES'] : ((isset($user->lang['FORUM_RULES'])) ? $user->lang['FORUM_RULES'] : '{ FORUM_RULES }')); ?></h3>
			<?php echo (isset($this->_rootref['FORUM_RULES'])) ? $this->_rootref['FORUM_RULES'] : ''; ?>
		<?php } ?>
	</div>
<?php } ?>

<div class="topic-actions">
	<div class="buttons">
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_REPLY_INFO']) {  ?>
		<div class="<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>locked-icon<?php } else { ?>reply-icon<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); } ?>"><span></span><?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); } else { echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); } ?></a></div>
	<?php } ?>
	</div>

	<?php if ($this->_rootref['S_DISPLAY_SEARCHBOX']) {  ?>
		<div class="search-box">
			<form method="post" id="topic-search" action="<?php echo (isset($this->_rootref['S_SEARCHBOX_ACTION'])) ? $this->_rootref['S_SEARCHBOX_ACTION'] : ''; ?>">
			<fieldset>
				<input class="inputbox search tiny"  type="text" name="keywords" id="search_keywords" size="20" value="<?php echo ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? $this->_rootref['L_SEARCH_TOPIC'] : ((isset($user->lang['SEARCH_TOPIC'])) ? $user->lang['SEARCH_TOPIC'] : '{ SEARCH_TOPIC }')); ?>" onclick="if(this.value=='<?php echo ((isset($this->_rootref['LA_SEARCH_TOPIC'])) ? $this->_rootref['LA_SEARCH_TOPIC'] : ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? addslashes($this->_rootref['L_SEARCH_TOPIC']) : ((isset($user->lang['SEARCH_TOPIC'])) ? addslashes($user->lang['SEARCH_TOPIC']) : '{ SEARCH_TOPIC }'))); ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo ((isset($this->_rootref['LA_SEARCH_TOPIC'])) ? $this->_rootref['LA_SEARCH_TOPIC'] : ((isset($this->_rootref['L_SEARCH_TOPIC'])) ? addslashes($this->_rootref['L_SEARCH_TOPIC']) : ((isset($user->lang['SEARCH_TOPIC'])) ? addslashes($user->lang['SEARCH_TOPIC']) : '{ SEARCH_TOPIC }'))); ?>';" />
				<input class="button2" type="submit" value="<?php echo ((isset($this->_rootref['L_SEARCH'])) ? $this->_rootref['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ SEARCH }')); ?>" />
				<input type="hidden" value="<?php echo (isset($this->_rootref['TOPIC_ID'])) ? $this->_rootref['TOPIC_ID'] : ''; ?>" name="t" />
				<input type="hidden" value="msgonly" name="sf" />
			</fieldset>
			</form>
		</div>
	<?php } if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  ?>
		<div class="pagination">
			<?php if ($this->_rootref['U_VIEW_UNREAD_POST'] && ! $this->_rootref['S_IS_BOT']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEW_UNREAD_POST'])) ? $this->_rootref['U_VIEW_UNREAD_POST'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_UNREAD_POST'])) ? $this->_rootref['L_VIEW_UNREAD_POST'] : ((isset($user->lang['VIEW_UNREAD_POST'])) ? $user->lang['VIEW_UNREAD_POST'] : '{ VIEW_UNREAD_POST }')); ?></a> &bull; <?php } echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?>
			<?php if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> &bull; <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a> &bull; <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span><?php } else { ?> &bull; <?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; } } ?>
		</div>
	<?php } ?>
</div>
<div class="clear"></div>

<?php if ($this->_rootref['S_HAS_POLL']) {  ?>
<form method="post" action="<?php echo (isset($this->_rootref['S_POLL_ACTION'])) ? $this->_rootref['S_POLL_ACTION'] : ''; ?>">
<div class="vt-box">
<div style="padding: 10px;">

		<div class="content">
			<div class="stat-info poll-question" style="background-image: url('<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/statistics.png');"><?php echo (isset($this->_rootref['POLL_QUESTION'])) ? $this->_rootref['POLL_QUESTION'] : ''; ?></div>
			<p class="author"><?php echo ((isset($this->_rootref['L_POLL_LENGTH'])) ? $this->_rootref['L_POLL_LENGTH'] : ((isset($user->lang['POLL_LENGTH'])) ? $user->lang['POLL_LENGTH'] : '{ POLL_LENGTH }')); if ($this->_rootref['S_CAN_VOTE'] && $this->_rootref['L_POLL_LENGTH']) {  ?><br /><?php } if ($this->_rootref['S_CAN_VOTE']) {  echo ((isset($this->_rootref['L_MAX_VOTES'])) ? $this->_rootref['L_MAX_VOTES'] : ((isset($user->lang['MAX_VOTES'])) ? $user->lang['MAX_VOTES'] : '{ MAX_VOTES }')); } ?></p>

			<fieldset class="polls">
			<?php $_poll_option_count = (isset($this->_tpldata['poll_option'])) ? sizeof($this->_tpldata['poll_option']) : 0;if ($_poll_option_count) {for ($_poll_option_i = 0; $_poll_option_i < $_poll_option_count; ++$_poll_option_i){$_poll_option_val = &$this->_tpldata['poll_option'][$_poll_option_i]; ?>
				<dl class="<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?>voted<?php } ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> title="<?php echo ((isset($this->_rootref['L_POLL_VOTED_OPTION'])) ? $this->_rootref['L_POLL_VOTED_OPTION'] : ((isset($user->lang['POLL_VOTED_OPTION'])) ? $user->lang['POLL_VOTED_OPTION'] : '{ POLL_VOTED_OPTION }')); ?>"<?php } ?>>
					<dt><?php if ($this->_rootref['S_CAN_VOTE']) {  ?><label for="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"><?php echo $_poll_option_val['POLL_OPTION_CAPTION']; ?></label><?php } else { echo $_poll_option_val['POLL_OPTION_CAPTION']; } ?></dt>
					<?php if ($this->_rootref['S_CAN_VOTE']) {  ?><dd style="width: auto;"><?php if ($this->_rootref['S_IS_MULTI_CHOICE']) {  ?><input type="checkbox" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } else { ?><input type="radio" name="vote_id[]" id="vote_<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>" value="<?php echo $_poll_option_val['POLL_OPTION_ID']; ?>"<?php if ($_poll_option_val['POLL_OPTION_VOTED']) {  ?> checked="checked"<?php } ?> /><?php } ?></dd><?php } if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?><dd class="resultbar"><div class="<?php if ($_poll_option_val['POLL_OPTION_PCT'] < (20)) {  ?>pollbar1<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (40)) {  ?>pollbar2<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (60)) {  ?>pollbar3<?php } else if ($_poll_option_val['POLL_OPTION_PCT'] < (80)) {  ?>pollbar4<?php } else { ?>pollbar5<?php } ?>" style="width:<?php echo $_poll_option_val['POLL_OPTION_PERCENT']; ?>;"><?php echo $_poll_option_val['POLL_OPTION_RESULT']; ?></div></dd>
					<dd><?php if ($_poll_option_val['POLL_OPTION_RESULT'] == 0) {  echo ((isset($this->_rootref['L_NO_VOTES'])) ? $this->_rootref['L_NO_VOTES'] : ((isset($user->lang['NO_VOTES'])) ? $user->lang['NO_VOTES'] : '{ NO_VOTES }')); } else { echo $_poll_option_val['POLL_OPTION_PERCENT']; } ?></dd><?php } ?>
				</dl>
			<?php }} if ($this->_rootref['S_DISPLAY_RESULTS']) {  ?>
				<dl>
					<dt>&nbsp;</dt>
					<dd class="resultbar"><?php echo ((isset($this->_rootref['L_TOTAL_VOTES'])) ? $this->_rootref['L_TOTAL_VOTES'] : ((isset($user->lang['TOTAL_VOTES'])) ? $user->lang['TOTAL_VOTES'] : '{ TOTAL_VOTES }')); ?> : <?php echo (isset($this->_rootref['TOTAL_VOTES'])) ? $this->_rootref['TOTAL_VOTES'] : ''; ?></dd>
				</dl>
			<?php } if ($this->_rootref['S_CAN_VOTE']) {  ?>
				<dl style="border-top: none;">
					<dt>&nbsp;</dt>
					<dd class="resultbar"><input type="submit" name="update" value="<?php echo ((isset($this->_rootref['L_SUBMIT_VOTE'])) ? $this->_rootref['L_SUBMIT_VOTE'] : ((isset($user->lang['SUBMIT_VOTE'])) ? $user->lang['SUBMIT_VOTE'] : '{ SUBMIT_VOTE }')); ?>" class="button1" /></dd>
				</dl>
			<?php } if (! $this->_rootref['S_DISPLAY_RESULTS']) {  ?>
				<dl style="border-top: none;">
					<dt>&nbsp;</dt>
					<dd class="resultbar"><a href="<?php echo (isset($this->_rootref['U_VIEW_RESULTS'])) ? $this->_rootref['U_VIEW_RESULTS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_VIEW_RESULTS'])) ? $this->_rootref['L_VIEW_RESULTS'] : ((isset($user->lang['VIEW_RESULTS'])) ? $user->lang['VIEW_RESULTS'] : '{ VIEW_RESULTS }')); ?></a></dd>
				</dl>
			<?php } ?>
			</fieldset>
		</div>

</div> <!-- /padding div (to keep IE happy) -->
</div> <!-- /vt-box -->
<div class="vt-seperator"></div>
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
		<?php echo (isset($this->_rootref['S_HIDDEN_FIELDS'])) ? $this->_rootref['S_HIDDEN_FIELDS'] : ''; ?>
	</form>
	<hr />
<?php } $_postrow_count = (isset($this->_tpldata['postrow'])) ? sizeof($this->_tpldata['postrow']) : 0;if ($_postrow_count) {for ($_postrow_i = 0; $_postrow_i < $_postrow_count; ++$_postrow_i){$_postrow_val = &$this->_tpldata['postrow'][$_postrow_i]; if ($_postrow_val['S_FIRST_UNREAD']) {  ?><a id="unread"></a><?php } ?>
	<div class="vt-box <?php if ($_postrow_val['S_UNREAD_POST']) {  ?> unreadpost<?php } if ($_postrow_val['S_POST_REPORTED']) {  ?> vt-reported<?php } ?>" id="p<?php echo $_postrow_val['POST_ID']; ?>">
	    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="table-layout: fixed;">
		    <tr>
			    <?php if ($_postrow_val['S_IGNORE_POST']) {  ?>
				    <td style="padding: 5px; text-align: center; font-size: 12px;"><div class="ignore"><?php echo $_postrow_val['L_IGNORE_POST']; ?></div></td>
			    <?php } else { ?>
				<td width="212" valign="top"><!-- <td> to hold postprofile -->
				    <div class="vt-postprofile" <?php if ($_postrow_val['S_POST_REPORTED']) {  ?>style="border-right: 1px dotted #ff0000;"<?php } ?>>
					    <dl class="dropdown">
                            <dt id="p<?php echo $_postrow_val['POST_ID']; ?>-ddheader" onmouseover="ddMenu('p<?php echo $_postrow_val['POST_ID']; ?>',1)" onmouseout="ddMenu('p<?php echo $_postrow_val['POST_ID']; ?>',-1)" onclick="location.href='<?php echo $_postrow_val['U_POST_AUTHOR']; ?>';">
                                <img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/status_<?php if ($_postrow_val['S_ONLINE'] && ! $_postrow_val['S_IGNORE_POST']) {  ?>online<?php } else { ?>offline<?php } ?>.png" width="16" height="16" alt="" border="0" title="<?php if ($_postrow_val['S_ONLINE'] && ! $_postrow_val['S_IGNORE_POST']) {  echo ((isset($this->_rootref['L_ONLINE'])) ? $this->_rootref['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ONLINE }')); } else { echo ((isset($this->_rootref['L_OFFLINE'])) ? $this->_rootref['L_OFFLINE'] : ((isset($user->lang['OFFLINE'])) ? $user->lang['OFFLINE'] : '{ OFFLINE }')); } ?>" class="online-indicator" /> <span<?php if ($_postrow_val['POST_AUTHOR_COLOUR']) {  ?> style="color:<?php echo $_postrow_val['POST_AUTHOR_COLOUR']; ?>;"<?php } ?>><?php echo $_postrow_val['POST_AUTHOR']; ?></span>
                            </dt>
                            <dd id="p<?php echo $_postrow_val['POST_ID']; ?>-ddcontent" onmouseover="cancelHide('p<?php echo $_postrow_val['POST_ID']; ?>')" onmouseout="ddMenu('p<?php echo $_postrow_val['POST_ID']; ?>',-1)">
                                <ul>
                                    <li><a href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/user_green.png" width="16" height="16" alt="" /> <?php echo $_postrow_val['POST_AUTHOR']; ?>'s <?php echo ((isset($this->_rootref['L_READ_PROFILE'])) ? $this->_rootref['L_READ_PROFILE'] : ((isset($user->lang['READ_PROFILE'])) ? $user->lang['READ_PROFILE'] : '{ READ_PROFILE }')); ?></a></li>
                                    <?php if ($_postrow_val['U_PM']) {  ?><li><a href="<?php echo $_postrow_val['U_PM']; ?>" title="<?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/email_edit.png" width="16" height="16" alt="" /> <?php echo ((isset($this->_rootref['L_PRIVATE_MESSAGE'])) ? $this->_rootref['L_PRIVATE_MESSAGE'] : ((isset($user->lang['PRIVATE_MESSAGE'])) ? $user->lang['PRIVATE_MESSAGE'] : '{ PRIVATE_MESSAGE }')); ?></a></li><?php } if ($_postrow_val['U_EMAIL']) {  ?><li><a href="<?php echo $_postrow_val['U_EMAIL']; ?>" title="<?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/computer_go.png" width="16" height="16" alt="" /> <?php echo ((isset($this->_rootref['L_SEND_EMAIL_USER'])) ? $this->_rootref['L_SEND_EMAIL_USER'] : ((isset($user->lang['SEND_EMAIL_USER'])) ? $user->lang['SEND_EMAIL_USER'] : '{ SEND_EMAIL_USER }')); ?> <?php echo $_postrow_val['POST_AUTHOR']; ?></a></li><?php } if ($_postrow_val['U_WWW']) {  ?><li><a href="<?php echo $_postrow_val['U_WWW']; ?>" title="<?php echo ((isset($this->_rootref['L_VISIT_WEBSITE'])) ? $this->_rootref['L_VISIT_WEBSITE'] : ((isset($user->lang['VISIT_WEBSITE'])) ? $user->lang['VISIT_WEBSITE'] : '{ VISIT_WEBSITE }')); ?>: <?php echo $_postrow_val['U_WWW']; ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/world_link.png" width="16" height="16" alt="" /> <?php echo $_postrow_val['POST_AUTHOR']; ?>'s <?php echo ((isset($this->_rootref['L_WEBSITE'])) ? $this->_rootref['L_WEBSITE'] : ((isset($user->lang['WEBSITE'])) ? $user->lang['WEBSITE'] : '{ WEBSITE }')); ?></a></li><?php } ?>
                                </ul>
                            </dd>
						</dl>
						<div style="height: 5px;"></div>
						<?php if ($_postrow_val['POSTER_AVATAR']) {  if ($_postrow_val['U_POST_AUTHOR']) {  ?><a href="<?php echo $_postrow_val['U_POST_AUTHOR']; ?>"><?php echo $_postrow_val['POSTER_AVATAR']; ?></a><?php } else { echo $_postrow_val['POSTER_AVATAR']; } } else { ?><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/no_avatar.png" width="50" height="50" alt="" style="padding-bottom: 5px;" /><?php } ?><br />
						<?php if ($_postrow_val['RANK_TITLE'] || $_postrow_val['RANK_IMG']) {  ?><span class="vt-rank"><?php echo $_postrow_val['RANK_TITLE']; ?></span><?php if ($_postrow_val['RANK_TITLE'] && $_postrow_val['RANK_IMG']) {  ?><br /><?php } echo $_postrow_val['RANK_IMG']; ?><br /><?php } ?>
						<div class="vt-stats">
                            <?php if ($_postrow_val['POSTER_POSTS'] != ('')) {  ?><strong><?php echo ((isset($this->_rootref['L_POSTS'])) ? $this->_rootref['L_POSTS'] : ((isset($user->lang['POSTS'])) ? $user->lang['POSTS'] : '{ POSTS }')); ?>:</strong> <?php echo $_postrow_val['POSTER_POSTS']; ?><br /><?php } if ($_postrow_val['POSTER_JOINED']) {  ?><strong><?php echo ((isset($this->_rootref['L_JOINED'])) ? $this->_rootref['L_JOINED'] : ((isset($user->lang['JOINED'])) ? $user->lang['JOINED'] : '{ JOINED }')); ?>:</strong> <?php echo $_postrow_val['POSTER_JOINED']; ?><br /><?php } if ($_postrow_val['POSTER_FROM']) {  ?><strong><?php echo ((isset($this->_rootref['L_LOCATION'])) ? $this->_rootref['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ LOCATION }')); ?>:</strong> <?php echo $_postrow_val['POSTER_FROM']; } if ($_postrow_val['S_PROFILE_FIELD1']) {  ?><!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
	                            <strong><br /><?php echo $_postrow_val['PROFILE_FIELD1_NAME']; ?>:</strong> <?php echo $_postrow_val['PROFILE_FIELD1_VALUE']; ?>
	                        <?php } $_custom_fields_count = (isset($_postrow_val['custom_fields'])) ? sizeof($_postrow_val['custom_fields']) : 0;if ($_custom_fields_count) {for ($_custom_fields_i = 0; $_custom_fields_i < $_custom_fields_count; ++$_custom_fields_i){$_custom_fields_val = &$_postrow_val['custom_fields'][$_custom_fields_i]; ?>
	                            <strong><br /><?php echo $_custom_fields_val['PROFILE_FIELD_NAME']; ?>:</strong> <?php echo $_custom_fields_val['PROFILE_FIELD_VALUE']; ?>
	                        <?php }} ?>
                        </div><!-- /vt-stats -->
						<div style="height: 6px;"></div>
						
						<?php if ($_postrow_val['U_MSN']) {  ?><a href="<?php echo $_postrow_val['U_MSN']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_MSNM'])) ? $this->_rootref['L_MSNM'] : ((isset($user->lang['MSNM'])) ? $user->lang['MSNM'] : '{ MSNM }')); ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/msn.gif" width="16" height="16" alt="" class="vt-socialicon" /></a><?php } if ($_postrow_val['U_ICQ']) {  ?><a href="<?php echo $_postrow_val['U_ICQ']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_ICQ'])) ? $this->_rootref['L_ICQ'] : ((isset($user->lang['ICQ'])) ? $user->lang['ICQ'] : '{ ICQ }')); ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/icq.gif" width="16" height="16" alt="" class="vt-socialicon" /></a><?php } if ($_postrow_val['U_YIM']) {  ?><a href="<?php echo $_postrow_val['U_YIM']; ?>" onclick="popup(this.href, 780, 550); return false;" title="<?php echo ((isset($this->_rootref['L_YIM'])) ? $this->_rootref['L_YIM'] : ((isset($user->lang['YIM'])) ? $user->lang['YIM'] : '{ YIM }')); ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/yahoo.png" width="16" height="16" alt="" class="vt-socialicon" /></a><?php } if ($_postrow_val['U_AIM']) {  ?><a href="<?php echo $_postrow_val['U_AIM']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_AIM'])) ? $this->_rootref['L_AIM'] : ((isset($user->lang['AIM'])) ? $user->lang['AIM'] : '{ AIM }')); ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/aim.png" width="16" height="16" alt="" class="vt-socialicon" /></a><?php } if ($_postrow_val['U_JABBER']) {  ?><a href="<?php echo $_postrow_val['U_JABBER']; ?>" onclick="popup(this.href, 550, 320); return false;" title="<?php echo ((isset($this->_rootref['L_JABBER'])) ? $this->_rootref['L_JABBER'] : ((isset($user->lang['JABBER'])) ? $user->lang['JABBER'] : '{ JABBER }')); ?>"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/jabber.png" width="16" height="16" alt="" class="vt-socialicon" /></a><?php } ?>
					</div><!-- /vt-postprofile -->
				</td><!-- /postprofile -->
				<td valign="top" class="vt-content">
				    <div class="vt-datebar"><?php if ($this->_rootref['S_IS_BOT']) {  echo $_postrow_val['MINI_POST_IMG']; } else { ?><a href="<?php echo $_postrow_val['U_MINI_POST']; ?>"><?php echo $_postrow_val['MINI_POST_IMG']; ?></a><?php } echo ((isset($this->_rootref['L_POSTED'])) ? $this->_rootref['L_POSTED'] : ((isset($user->lang['POSTED'])) ? $user->lang['POSTED'] : '{ POSTED }')); ?>: <?php echo $_postrow_val['POST_DATE']; ?></div><!-- /vt-datebar --><?php if ($_postrow_val['S_POST_UNAPPROVED'] || $_postrow_val['S_POST_REPORTED']) {  ?>
					    <p class="rules">
					        <?php if ($_postrow_val['S_POST_UNAPPROVED']) {  echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_APPROVE']; ?>"><strong><?php echo ((isset($this->_rootref['L_POST_UNAPPROVED'])) ? $this->_rootref['L_POST_UNAPPROVED'] : ((isset($user->lang['POST_UNAPPROVED'])) ? $user->lang['POST_UNAPPROVED'] : '{ POST_UNAPPROVED }')); ?></strong></a><br /><?php } if ($_postrow_val['S_POST_REPORTED']) {  echo (isset($this->_rootref['REPORTED_IMG'])) ? $this->_rootref['REPORTED_IMG'] : ''; ?> <a href="<?php echo $_postrow_val['U_MCP_REPORT']; ?>"><strong><?php echo ((isset($this->_rootref['L_POST_REPORTED'])) ? $this->_rootref['L_POST_REPORTED'] : ((isset($user->lang['POST_REPORTED'])) ? $user->lang['POST_REPORTED'] : '{ POST_REPORTED }')); ?></strong></a><?php } ?>
				        </p>
			        <?php } ?>
					<div class="vt-postcontent"><?php echo $_postrow_val['MESSAGE']; ?></div>
					<?php if ($_postrow_val['S_HAS_ATTACHMENTS']) {  ?>
				        <dl class="attachbox">
					        <dt><?php echo ((isset($this->_rootref['L_ATTACHMENTS'])) ? $this->_rootref['L_ATTACHMENTS'] : ((isset($user->lang['ATTACHMENTS'])) ? $user->lang['ATTACHMENTS'] : '{ ATTACHMENTS }')); ?></dt>
					        <?php $_attachment_count = (isset($_postrow_val['attachment'])) ? sizeof($_postrow_val['attachment']) : 0;if ($_attachment_count) {for ($_attachment_i = 0; $_attachment_i < $_attachment_count; ++$_attachment_i){$_attachment_val = &$_postrow_val['attachment'][$_attachment_i]; ?>
						        <dd><?php echo $_attachment_val['DISPLAY_ATTACHMENT']; ?></dd>
					        <?php }} ?>
				        </dl>
			        <?php } if ($_postrow_val['S_DISPLAY_NOTICE']) {  ?><div class="mini-rules"><?php echo ((isset($this->_rootref['L_DOWNLOAD_NOTICE'])) ? $this->_rootref['L_DOWNLOAD_NOTICE'] : ((isset($user->lang['DOWNLOAD_NOTICE'])) ? $user->lang['DOWNLOAD_NOTICE'] : '{ DOWNLOAD_NOTICE }')); ?></div><?php } if ($_postrow_val['EDITED_MESSAGE'] || $_postrow_val['EDIT_REASON']) {  ?>
					    <div class="notice"><?php echo $_postrow_val['EDITED_MESSAGE']; ?>
						    <?php if ($_postrow_val['EDIT_REASON']) {  ?><br /><strong><?php echo ((isset($this->_rootref['L_REASON'])) ? $this->_rootref['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ REASON }')); ?>:</strong> <em><?php echo $_postrow_val['EDIT_REASON']; ?></em><?php } ?>
						</div>
					<?php } if ($_postrow_val['BUMPED_MESSAGE']) {  ?><div class="notice"><br /><br /><?php echo $_postrow_val['BUMPED_MESSAGE']; ?></div><?php } if ($_postrow_val['SIGNATURE']) {  ?><div id="sig<?php echo $_postrow_val['POST_ID']; ?>" class="signature"><?php echo $_postrow_val['SIGNATURE']; ?></div><?php } ?>
				</td><!-- /content -->
			</tr>
			<tr class="controls">
			    <td style="padding-left: 5px;"><div class="btt"><img src="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/images/arrow_merge.png" width="16" height="16" alt="" /> <a href="#wrap" title="<?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?>"><?php echo ((isset($this->_rootref['L_BACK_TO_TOP'])) ? $this->_rootref['L_BACK_TO_TOP'] : ((isset($user->lang['BACK_TO_TOP'])) ? $user->lang['BACK_TO_TOP'] : '{ BACK_TO_TOP }')); ?></a></div></td>
				<td class="controls">
				    <?php if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_EDIT'] || $_postrow_val['U_DELETE'] || $_postrow_val['U_REPORT'] || $_postrow_val['U_WARN'] || $_postrow_val['U_INFO'] || $_postrow_val['U_QUOTE']) {  if ($_postrow_val['U_QUOTE']) {  ?><a class="controlbutton cb-quote" href="<?php echo $_postrow_val['U_QUOTE']; ?>" title="<?php echo ((isset($this->_rootref['L_REPLY_WITH_QUOTE'])) ? $this->_rootref['L_REPLY_WITH_QUOTE'] : ((isset($user->lang['REPLY_WITH_QUOTE'])) ? $user->lang['REPLY_WITH_QUOTE'] : '{ REPLY_WITH_QUOTE }')); ?>"><span><?php echo ((isset($this->_rootref['L_QUOTE'])) ? $this->_rootref['L_QUOTE'] : ((isset($user->lang['QUOTE'])) ? $user->lang['QUOTE'] : '{ QUOTE }')); ?></span></a><?php } if ($_postrow_val['U_INFO']) {  ?><a class="controlbutton cb-info" href="<?php echo $_postrow_val['U_INFO']; ?>" title="<?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>"><span><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?></span></a><?php } if ($_postrow_val['U_WARN']) {  ?><a class="controlbutton cb-warn" href="<?php echo $_postrow_val['U_WARN']; ?>" title="<?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?>"><span><?php echo ((isset($this->_rootref['L_WARN_USER'])) ? $this->_rootref['L_WARN_USER'] : ((isset($user->lang['WARN_USER'])) ? $user->lang['WARN_USER'] : '{ WARN_USER }')); ?></span></a><?php } if ($_postrow_val['U_REPORT']) {  ?><a class="controlbutton cb-report" href="<?php echo $_postrow_val['U_REPORT']; ?>" title="<?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?>"><span><?php echo ((isset($this->_rootref['L_REPORT_POST'])) ? $this->_rootref['L_REPORT_POST'] : ((isset($user->lang['REPORT_POST'])) ? $user->lang['REPORT_POST'] : '{ REPORT_POST }')); ?></span></a><?php } if ($_postrow_val['U_DELETE']) {  ?><a class="controlbutton cb-delete" href="<?php echo $_postrow_val['U_DELETE']; ?>" title="<?php echo ((isset($this->_rootref['L_DELETE_POST'])) ? $this->_rootref['L_DELETE_POST'] : ((isset($user->lang['DELETE_POST'])) ? $user->lang['DELETE_POST'] : '{ DELETE_POST }')); ?>"><span><?php echo ((isset($this->_rootref['L_DELETE'])) ? $this->_rootref['L_DELETE'] : ((isset($user->lang['DELETE'])) ? $user->lang['DELETE'] : '{ DELETE }')); ?></span></a><?php } if ($_postrow_val['U_EDIT']) {  ?><a class="controlbutton cb-edit" href="<?php echo $_postrow_val['U_EDIT']; ?>" title="<?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?>"><span><?php echo ((isset($this->_rootref['L_EDIT_POST'])) ? $this->_rootref['L_EDIT_POST'] : ((isset($user->lang['EDIT_POST'])) ? $user->lang['EDIT_POST'] : '{ EDIT_POST }')); ?></span></a><?php } } } ?>
				</td>
			</tr>
		        <?php } ?><!-- /endif for ignore post feature -->
		</table>
	</div><!-- /box -->
	
	<div class="vt-seperator <?php if ($_postrow_val['S_POST_REPORTED']) {  ?>vt-reported<?php } ?>" <?php if ($_postrow_val['S_POST_REPORTED']) {  ?>style="border-top: none;"<?php } ?>></div>
    

    
    <!--<?php if (! $this->_rootref['S_IS_BOT']) {  if ($_postrow_val['U_EDIT'] || $_postrow_val['U_DELETE'] || $_postrow_val['U_REPORT'] || $_postrow_val['U_WARN'] || $_postrow_val['U_INFO'] || $_postrow_val['U_QUOTE']) {  ?>
				<ul class="profile-icons">
					
					
					
				</ul>
			<?php } } ?>-->
    
    
	


<?php }} if ($this->_rootref['S_QUICK_REPLY']) {  $this->_tpl_include('quickreply_editor.html'); } if ($this->_rootref['S_NUM_POSTS'] > (1) || $this->_rootref['PREVIOUS_PAGE']) {  ?>
	<form id="viewtopic" method="post" action="<?php echo (isset($this->_rootref['S_TOPIC_ACTION'])) ? $this->_rootref['S_TOPIC_ACTION'] : ''; ?>">

	<fieldset class="display-options" style="margin-top: 0; ">
		<?php if ($this->_rootref['PREVIOUS_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['PREVIOUS_PAGE'])) ? $this->_rootref['PREVIOUS_PAGE'] : ''; ?>" class="left-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>"><?php echo ((isset($this->_rootref['L_PREVIOUS'])) ? $this->_rootref['L_PREVIOUS'] : ((isset($user->lang['PREVIOUS'])) ? $user->lang['PREVIOUS'] : '{ PREVIOUS }')); ?></a><?php } if ($this->_rootref['NEXT_PAGE']) {  ?><a href="<?php echo (isset($this->_rootref['NEXT_PAGE'])) ? $this->_rootref['NEXT_PAGE'] : ''; ?>" class="right-box <?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>"><?php echo ((isset($this->_rootref['L_NEXT'])) ? $this->_rootref['L_NEXT'] : ((isset($user->lang['NEXT'])) ? $user->lang['NEXT'] : '{ NEXT }')); ?></a><?php } if (! $this->_rootref['S_IS_BOT']) {  ?>
		<label><?php echo ((isset($this->_rootref['L_DISPLAY_POSTS'])) ? $this->_rootref['L_DISPLAY_POSTS'] : ((isset($user->lang['DISPLAY_POSTS'])) ? $user->lang['DISPLAY_POSTS'] : '{ DISPLAY_POSTS }')); ?>: <?php echo (isset($this->_rootref['S_SELECT_SORT_DAYS'])) ? $this->_rootref['S_SELECT_SORT_DAYS'] : ''; ?></label>
		<label><?php echo ((isset($this->_rootref['L_SORT_BY'])) ? $this->_rootref['L_SORT_BY'] : ((isset($user->lang['SORT_BY'])) ? $user->lang['SORT_BY'] : '{ SORT_BY }')); ?> <?php echo (isset($this->_rootref['S_SELECT_SORT_KEY'])) ? $this->_rootref['S_SELECT_SORT_KEY'] : ''; ?></label> <label><?php echo (isset($this->_rootref['S_SELECT_SORT_DIR'])) ? $this->_rootref['S_SELECT_SORT_DIR'] : ''; ?> <input type="submit" name="sort" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" /></label>
		<?php } ?>
	</fieldset>

	</form>
	<hr />
<?php } ?>

<div class="topic-actions">
	<div class="buttons">
	<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_DISPLAY_REPLY_INFO']) {  ?>
		<div class="<?php if ($this->_rootref['S_IS_LOCKED']) {  ?>locked-icon<?php } else { ?>reply-icon<?php } ?>"><a href="<?php echo (isset($this->_rootref['U_POST_REPLY_TOPIC'])) ? $this->_rootref['U_POST_REPLY_TOPIC'] : ''; ?>" title="<?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_TOPIC_LOCKED'])) ? $this->_rootref['L_TOPIC_LOCKED'] : ((isset($user->lang['TOPIC_LOCKED'])) ? $user->lang['TOPIC_LOCKED'] : '{ TOPIC_LOCKED }')); } else { echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); } ?>"><span></span><?php if ($this->_rootref['S_IS_LOCKED']) {  echo ((isset($this->_rootref['L_TOPIC_LOCKED_SHORT'])) ? $this->_rootref['L_TOPIC_LOCKED_SHORT'] : ((isset($user->lang['TOPIC_LOCKED_SHORT'])) ? $user->lang['TOPIC_LOCKED_SHORT'] : '{ TOPIC_LOCKED_SHORT }')); } else { echo ((isset($this->_rootref['L_POST_REPLY'])) ? $this->_rootref['L_POST_REPLY'] : ((isset($user->lang['POST_REPLY'])) ? $user->lang['POST_REPLY'] : '{ POST_REPLY }')); } ?></a></div>
	<?php } ?>
	</div>

	<?php if ($this->_rootref['PAGINATION'] || $this->_rootref['TOTAL_POSTS']) {  ?>
		<div class="pagination">
			<?php echo (isset($this->_rootref['TOTAL_POSTS'])) ? $this->_rootref['TOTAL_POSTS'] : ''; ?>
			<?php if ($this->_rootref['PAGE_NUMBER']) {  if ($this->_rootref['PAGINATION']) {  ?> &bull; <a href="#" onclick="jumpto(); return false;" title="<?php echo ((isset($this->_rootref['L_JUMP_TO_PAGE'])) ? $this->_rootref['L_JUMP_TO_PAGE'] : ((isset($user->lang['JUMP_TO_PAGE'])) ? $user->lang['JUMP_TO_PAGE'] : '{ JUMP_TO_PAGE }')); ?>"><?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; ?></a> &bull; <span><?php echo (isset($this->_rootref['PAGINATION'])) ? $this->_rootref['PAGINATION'] : ''; ?></span><?php } else { ?> &bull; <?php echo (isset($this->_rootref['PAGE_NUMBER'])) ? $this->_rootref['PAGE_NUMBER'] : ''; } } ?>
		</div>
	<?php } ?>
</div>

<?php $this->_tpl_include('jumpbox.html'); if ($this->_rootref['S_TOPIC_MOD']) {  ?>
	<form method="post" action="<?php echo (isset($this->_rootref['S_MOD_ACTION'])) ? $this->_rootref['S_MOD_ACTION'] : ''; ?>">
	<fieldset class="quickmod">
		<label for="quick-mod-select"><?php echo ((isset($this->_rootref['L_QUICK_MOD'])) ? $this->_rootref['L_QUICK_MOD'] : ((isset($user->lang['QUICK_MOD'])) ? $user->lang['QUICK_MOD'] : '{ QUICK_MOD }')); ?>:</label> <?php echo (isset($this->_rootref['S_TOPIC_MOD'])) ? $this->_rootref['S_TOPIC_MOD'] : ''; ?> <input type="submit" value="<?php echo ((isset($this->_rootref['L_GO'])) ? $this->_rootref['L_GO'] : ((isset($user->lang['GO'])) ? $user->lang['GO'] : '{ GO }')); ?>" class="button2" />
		<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
	</fieldset>
	</form>
<?php } if ($this->_rootref['S_DISPLAY_ONLINE_LIST']) {  ?>
	<h3><?php if ($this->_rootref['U_VIEWONLINE']) {  ?><a href="<?php echo (isset($this->_rootref['U_VIEWONLINE'])) ? $this->_rootref['U_VIEWONLINE'] : ''; ?>"><?php echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); ?></a><?php } else { echo ((isset($this->_rootref['L_WHO_IS_ONLINE'])) ? $this->_rootref['L_WHO_IS_ONLINE'] : ((isset($user->lang['WHO_IS_ONLINE'])) ? $user->lang['WHO_IS_ONLINE'] : '{ WHO_IS_ONLINE }')); } ?></h3>
	<p><?php echo (isset($this->_rootref['LOGGED_IN_USER_LIST'])) ? $this->_rootref['LOGGED_IN_USER_LIST'] : ''; ?></p>
<?php } $this->_tpl_include('overall_footer.html'); ?>