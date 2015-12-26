<?php
/** 
*
* acp_mods [English]
*
* @package language
* @version $Id: mods.php 242 2010-04-29 00:56:35Z jelly_doughnut $
* @copyright (c) 2008 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/
/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE 
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine


$lang = array_merge($lang, array(
	'ADDITIONAL_CHANGES'	=> 'Available Changes',

	'AM_MOD_ALREADY_INSTALLED'	=> 'この MOD は既にインストールされています',
	'AM_MANUAL_INSTRUCTIONS'	=> '圧縮ファイルを作成中です。コンフィグ設定により、AutoMOD がサイト内ファイルを自動的に書き換えることはありません。そのため手動で圧縮ファイルを解凍しサーバへファイルをアップロードする必要があります。圧縮ファイルのダウンロードが自動的に開始されない場合は%sこちら%sをクリックしてください。',

	'APPLY_THESE_CHANGES'	=> 'これらの変更を適用する',
	'APPLY_TEMPLATESET'		=> 'このテンプレートへ',
	'AUTHOR_EMAIL'			=> 'メールアドレス',
	'AUTHOR_INFORMATION'	=> '制作者',
	'AUTHOR_NAME'			=> 'ユーザー名',
	'AUTHOR_NOTES'			=> '制作者からの注意点',
	'AUTHOR_URL'			=> 'ウェブサイト',
	'AUTOMOD'				=> 'AutoMOD',
	'AUTOMOD_CANNOT_INSTALL_OLD_VERSION'	=> 'この AutoMOD は既に phpBB3 にインストールされています。 install/ ディレクトリを削除してください。',
	'AUTOMOD_UNKNOWN_VERSION'	=>	'インストールされている AutoMOD のバージョン情報を検出できなかったため AutoMOD をアップデートすることができません。インストールされている AutoMOD のバージョンは %s のどれかです。',
	'AUTOMOD_VERSION'		=> 'AutoMOD バージョン',

	'CAT_INSTALL_AUTOMOD'	=> 'AutoMOD',
	'CHANGE_DATE'	=> 'リリース日',
	'CHANGE_VERSION'=> 'バージョン',
	'CHANGES'		=> '変更点',
	'CHECK_AGAIN'  => 'もう一度チェック',
	'COMMENT'		=> 'コメント',
	'CREATE_TABLE'	=> 'データベースのクエリ実行',
	'CREATE_TABLE_EXPLAIN'	=> 'データベースのクエリ実行に成功しました。パーミッションセット “Full Administrator” に パーミッションオプション “AutoMOD の使用” を割り当てました。',
	'DELETE'			=> '削除',
	'DELETE_CONFIRM'	=> 'この MOD を本当に削除してもよろしいですか？',
	'DELETE_ERROR'		=> 'MOD の削除中にエラーが発生しました',
	'DELETE_SUCCESS'	=> 'MOD の削除に成功しました',

	'DIR_PERMS'			=> 'ディレクトリアクセス権',
	'DIR_PERMS_EXPLAIN'	=> '作成されるディレクトリのアクセス権を指定してください。多くの場合、デフォルトの 0755 のままで問題ありません。WindowsOS に対して効果はありません。',
	'DIY_INSTRUCTIONS'	=> '手作業',
	'DEPENDENCY_INSTRUCTIONS'	=>	'この MOD の利用にはある MOD が必要な様です。AutoMOD は、その必要な MOD が既にインストールされているかどうかについてはきちんと判断することはできません。この MOD をインストールする前に <strong><a href="%1$s">%2$s</a></strong> がインストールされているかどうかをお確かめください。',
	'DESCRIPTION'	=> '説明',
	'DETAILS'		=> '詳細',

	'EDITED_ROOT_CREATE_FAIL'	=> 'バックアップファイルを格納するためのディレクトリを作成できませんでした',
	'ERROR'			=> 'エラー',

	'FILE_EDITS'		=> '修正ファイル',
	'FILE_EMPTY'		=> 'File empty',
	'FILE_MISSING'		=> '指定パスへコピーできませんでした',
	'FILE_PERMS'		=> 'ファイルアクセス権',
	'FILE_PERMS_EXPLAIN'=> '作成されるディレクトリのアクセス権を指定してください。多くの場合、デフォルトの 0644 のままで問題ありません。WindowsOS に対して効果はありません。',
	'FILE_TYPE'			=> 'ファイル圧縮タイプ',
	'FILE_TYPE_EXPLAIN'	=> '上の　“ファイル修正方法” を “圧縮ファイルのダウンロード” に設定している場合にのみ効果があります。',
	'FILESYSTEM_NOT_WRITABLE'	=> 'ファイルへの書き込みが許可されていない様なので、直接ファイルを修正することはできません',
	'FIND'				=> '検索',
	'FIND_MISSING'		=> '検索コードが見つかりません',
	'FORCE_INSTALL'		=> 'インストールを強制する',
	'FORCE_UNINSTALL'	=> 'アンインストールを強制する',
	'FORCE_CONFIRM'		=> 'インストールの強制は MOD の不完全なインストールを意味します。インストールを強制した場合、インストールを完全にするためにファイル修正をいくつか手作業で行う必要があります。インストールを強制してもよろしいですか？',
	'FTP_INFORMATION'	=> 'FTP 情報',
	'FTP_NOT_USABLE'  => 'サーバが FTP 関数の使用を許可していないため、FTP を利用できません',
	'FTP_METHOD_ERROR' => 'AutoMOD のコンフィグ設定に不整合があり、FTPアップロード を利用できません。AutoMOD のコンフィグ設定を見直し、FTPアップロードを利用できるかお確かめください。',
	'FTP_METHOD_EXPLAIN'=> 'デフォルトの “FTP” で問題が生じる場合、“Simple Socket” をお試しください',
	'FTP_METHOD_FTP'	=> 'FTP',
	'FTP_METHOD_FSOCK'	=> 'Simple Socket',

	'GO_PHP_INSTALLER'  => 'インストールを完了させるには外部インストーラを使用する必要があります。次のステップへ進むにはこちらをクリックしてください。',

	'INHERIT_NO_CHANGE'	=> 'テンプレート %1$s はテンプレートセットを %2$s から継承しているため、このファイルに修正はありません',
	'INLINE_FIND_MISSING'=> 'In-Line Find に失敗しました。',
	'INLINE_EDIT_ERROR'	=> 'エラー、In-Line Replace 命令に不備があります',
	'INSTALL_AUTOMOD'	=> 'AutoMOD インストール',
	'INSTALL_AUTOMOD_CONFIRM'	=> 'AutoMOD を本当にインストールしてもよろしいですか？',
	'INSTALL_TIME'		=> 'インストールの目安時間',
	'INSTALL_MOD'		=> 'この MOD をインストールしますか？',
	'INSTALL_ERROR'		=> '実行できないインストールアクションがいくつか存在します。下に表示されているアクションに目を通し、コードの調整とリトライを繰り返し行ってください。実行できないインストールアクションが存在していてもインストールを強制的に行うことは可能です。<strong>インストールを強制した場合、掲示板の機能が正常に動作しなくなる可能性がある点にご注意ください。</strong>',
	'INSTALL_FORCED'	=> 'MOD のインストールを強制しました。このままでは掲示板がクラッシュしてしまう可能性があります。解決するには下に表示されているインストールアクションを確認し、問題部分を手作業で修正する必要があります。',
	'INSTALLED'			=> 'MOD をインストールしました',
	'INSTALLED_EXPLAIN'	=> 'MOD のインストールに成功しました！ インストールの結果をここで確認できます。もしエラーがあれば <a href="http://www.phpbb.com">phpBB.com</a> で解決策を探してください。',
	'INSTALLED_MODS'	=> 'インストール済み MOD',
	'INSTALLATION_SUCCESSFUL'	=> 'AutoMOD のインストールに成功しました。AdminCP の “AutoMOD” タブから MOD を管理できます。',
	'INVALID_MOD_INSTRUCTION'	=> '不正なインストール命令または In-Line Find 命令が存在します',
	'INVALID_MOD_NO_FIND'       => 'アクション ‘%s’ にマッチする In-Line Find 命令が見つかりません',
	'INVALID_MOD_NO_ACTION'     => ' In-Line Find 命令 ‘%s’ にマッチするアクションが見つかりません',

	'LANGUAGE_NAME'		=> '言語名',

	'MANUAL_COPY'				=> '未コピー',
	'MOD_CONFIG'				=> 'AutoMOD コンフィグ設定',
	'MOD_CONFIG_UPDATED'        => 'AutoMOD のコンフィグ設定を更新しました',
	'MOD_DETAILS'				=> 'MOD の詳細',
	'MOD_DETAILS_EXPLAIN'		=> 'ここでは MOD についての情報を全て表示しています',
	'MOD_MANAGER'				=> 'AutoMOD',
	'MOD_NAME'					=> 'MOD 名',
	'MOD_OPEN_FILE_FAIL'		=> 'ファイル %s を開くことができませんでした',
	'MOD_UPLOAD'				=> 'MOD のアップロード',
	'MOD_UPLOAD_EXPLAIN'		=> 'ここで MOD パッケージをアップロードできます。MOD パッケージは zip 圧縮ファイルである必要があります。アップロードされると自動的に解凍され、 MOD がインストール可能な状態になります。',
	'MOD_UPLOAD_INIT_FAIL'		=> 'MOD アップロードプロセスの初期化中にエラーが発生しました',
	'MOD_UPLOAD_SUCCESS'		=> 'MOD のアップロードに成功し、インストールの準備が整いました',
	'AUTOMOD_INSTALLATION'		=> 'AutoMOD のインストール',
	'AUTOMOD_INSTALLATION_EXPLAIN'	=> 'Welcome to the AutoMOD Installation.  You will need your FTP details if AutoMOD detects that is the best way to write files.  The requirements test results are below.',

	'MODS_CONFIG_EXPLAIN'		=> 'ここで AutoMOD が行うファイル修正について設定することができます。最も基本的なファイル修正方法は圧縮ファイルのダウンロードです。その他のファイル修正方法を利用するにはサーバ上の権限が必要になります。',
	'MODS_COPY_FAILURE'			=> 'ファイル %s を指定パスにコピーできませんでした。ファイルまたはディレクトリのアクセス権を見直してください。もしくはファイル修正方法を変更してください。',
	'MODS_EXPLAIN'				=> 'ここでは MOD を管理することができます。phpBB コミュニティの有志が作成した MOD を phpBB3 にインストールすることで掲示板を自由にカスタマイズできます。MOD と AutoMOD についてより詳しい情報を知りたい場合は <a href="http://www.phpbb.com/mods">phpBB website</a> を訪れてください。リストに MOD を追加するにはページ下のフォームから MOD をアップロードしてください。ディレクトリ /store/mods/ へ直接 MOD パッケージをアップロードすることでも追加できます。',
	'MODS_FTP_FAILURE'			=> 'FTPアップロード でファイル %s を指定パスへアップロードできませんでした',
	'MODS_FTP_CONNECT_FAILURE'	=> 'FTPサーバ へ接続できませんでした。エラー： %s',
	'MODS_MKDIR_FAILED'			=> 'ディレクトリ %s を作成できませんでした',
	'MODS_SETUP_INCOMPLETE'		=> 'AutoMOD のコンフィグ設定に問題が発生し、AutoMOD が正常に動作しなくなっています。外部の設定 （例えば FTP ユーザー名） が変更された場合にこの症状が起こります。AutoMOD のコンフィグ設定を今すぐ見直してください。',

	'NAME'			=> '名前',
	'NEW_FILES'		=> '新しいファイル',
	'NO_ATTEMPT'	=> '未実行',
	'NO_INSTALLED_MODS'		=> 'インストール済みの MOD はありません',
	'NO_MOD'				=> 'MOD が見つかりませんでした',
	'NO_UNINSTALLED_MODS'	=> '未インストール状態の MOD はありません',
	'NO_UPLOAD_FILE'		=> 'ファイルが指定されていません',

	'ORIGINAL'	=> 'オリジナル',

	'PATH'					=> 'パス',
	'PREVIEW_CHANGES'		=> '修正点のプレビュー',
	'PREVIEW_CHANGES_EXPLAIN'	=> 'ファイルの修正を実行する前に修正点を表示します',
	'PRE_INSTALL'			=> 'インストールの準備',
	'PRE_INSTALL_EXPLAIN'	=> 'ここではインストール前にファイルの修正点をプレビューできます。<strong>警告！</strong>, 下の “インストール” ボタンをクリックするとインストールが開始されます。インストール命令に何も問題がなければインストールは実行されます。もしインストール命令に問題がある場合、インストールは実行されません。',
	'PRE_UNINSTALL'			=> 'アンインストールの準備',
	'PRE_UNINSTALL_EXPLAIN'	=> 'ここではアンインストール前にファイルの修正点をプレビューできます。<strong>警告！</strong>, 下の “アンインストール” ボタンをクリックするとアンインストールが開始されます。アンインストール命令に何も問題が無ければアンインストールは実行されます。AutoMOD のアンインストールはリバーステクニックに依存しており、 100% 正確にアンインストールできるというわけではない点にご注意ください。もしアンインストール命令に問題がある場合、アンインストールは実行されません。',

	'REMOVING_FILES'	=> '削除されるファイル',
	'RETRY'				=> 'リトライ',
	'RETURN_MODS'		=> 'AutoMOD へ戻る',
	'REVERSE'			=> 'リバース',
	'ROOT_IS_READABLE'	=> 'phpBB ルートディレクトリは読み込み可です',
	'ROOT_NOT_READABLE'	=> 'phpBB の index.php の読み込みに失敗しました。phpBB ルートディレクトリのアクセス権が制限されすぎている可能性があります。アクセス権を設定し直してからもう一度トライしてください。',


	'SOURCE'		=> 'ソース',
	'SQL_QUERIES'	=> 'SQL クエリ',
	'STATUS'		=> 'ステータス',
	'STORE_IS_WRITABLE'			=> 'ディレクトリ store/ は書き込み可です',
	'STORE_NOT_WRITABLE_INST'	=> 'ディレクトリ store/ が書き込み可ではありません。アクセス権を設定し直してからもう一度トライしてください。',
	'STORE_NOT_WRITABLE'		=> 'ディレクトリ store/ が書き込み可ではありません',
	'STYLE_NAME'	=> 'スタイル名',
	'SUCCESS'		=> '成功',

	'TARGET'		=> 'ターゲット',

	'UNKNOWN_MOD_AUTHOR-NOTES'	=> '制作者からの注意点はありません',
	'UNKNOWN_MOD_DESCRIPTION'	=> '',
	'UNKNOWN_MOD_DIY-INSTRUCTIONS'=>'', // empty string hides this if not specified.
	'UNKNOWN_MOD_COMMENT'		=> '',
	'UNKNOWN_MOD_INLINE-COMMENT'=> '',
	'UNKNOWN_QUERY_REVERSE' => '不明なリバースクエリ',

	'UNINSTALL'				=> 'アンインストール',
	'UNINSTALL_AUTOMOD'		=> 'AutoMOD のアンインストール',
	'UNINSTALL_AUTOMOD_CONFIRM' => 'AutoMOD を本当にアンインストールしてもよろしいですか？AutoMOD でインストールされた MOD は削除されません。',
	'UNINSTALLED'			=> 'MOD をアンインストールしました',
	'UNINSTALLED_MODS'		=> '未インストール状態の MOD',
	'UNINSTALLED_EXPLAIN'	=> 'MOD のアンインストールに成功しました！ アンインストールの結果をここで確認できます。もしエラーがあれば <a href="http://www.phpbb.com">phpBB.com</a> で解決策を探してください。',
	
	'UNRECOGNISED_COMMAND'	=> 'エラー、認識できないコマンド %s ',
	'UPDATE_AUTOMOD'		=> 'AutoMOD のアップデート',
	'UPDATE_AUTOMOD_CONFIRM'=> 'AutoMOD を本当にアップデートしてもよろしいですか？',

	'UPLOAD'				=> 'アップロード',
	'VERSION'				=> 'バージョン',

	'WRITE_DIRECT_FAIL'		=> 'ファイル %s を指定パスへコピーできませんでした。ファイル修正方法として “ダイレクトコピー” を利用することはできません。他のファイル修正方法を利用してください。',
	'WRITE_DIRECT_TOO_SHORT'=> 'ファイル %s へ書き込みできませんでした。“リトライ” ボタンをクリックすれば解決することがよくあります。それでも解決しない場合は他のファイル修正方法を利用してください。',
	'WRITE_MANUAL_FAIL'		=> 'ファイル %s を圧縮できませんでした。他のファイル修正方法を利用してください。',
	'WRITE_METHOD'			=> 'ファイル修正方法',
	'WRITE_METHOD_DIRECT'	=> 'ダイレクトコピー',
	'WRITE_METHOD_EXPLAIN'	=> 'ファイルを修正する方法を選択してください。多くの場合、“圧縮ファイルのダウンロード” で問題ありません。',
	'WRITE_METHOD_FTP'		=> 'FTPアップロード',
	'WRITE_METHOD_MANUAL'	=> '圧縮ファイルのダウンロード',

	// These keys for action names are purposely lower-cased and purposely contain spaces
	'after add'				=> 'Add After',
	'before add'			=> 'Add Before',
	'find'					=> 'Find',
	'in-line-after-add'		=> 'In-Line After, Add',
	'in-line-before-add'	=> 'In-Line Before, Add',
	'in-line-edit'			=> 'In-Line Find',
	'in-line-operation'		=> 'In-Line Increment',
	'in-line-replace'		=> 'In-Line Replace',
	'in-line-replace-with'	=> 'In-Line Replace',
	'replace'				=> 'Replace With',
	'replace with'			=> 'Replace With',
	'operation'				=> 'Increment',
));

?>