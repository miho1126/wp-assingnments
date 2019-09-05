<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-theme' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|p8yqe!dT%eloF9-2Yce}=juLb{y8^;4ulCrTAKao7,nRmp.l9r3m%(Jsh4r:)v.' );
define( 'SECURE_AUTH_KEY',  'uu/vH3ND5gBp+iE[#SiG$n6WF>v}}XnARatN}`aS+-gpQ`ytzO1j%J]/KGbU:uu}' );
define( 'LOGGED_IN_KEY',    'oA|+6(2r/7lGkvrzHY>pnb`Gt|N-s5LE!hlXp3LGoGt|VY wUaB=<}df`u=0|3fU' );
define( 'NONCE_KEY',        '#S>uy&)7YFR/CW$PJV4#I~nM!/GKrb|:*K>&:PI`nM~cy4G$;5OHMs)3M)c@op9(' );
define( 'AUTH_SALT',        'HFx/PN<K)@}Y:5c@mGE?L>Nn5~cV9RrG0BF&&?elq#rMAa}NtOce@ Te8UBR,6Iy' );
define( 'SECURE_AUTH_SALT', 'Z4lA^r0lD1|hfkqs-}7p6:zH;5?4H!`=r~:y9u(<bj pCICnvt#L[x]Py%/$-I?T' );
define( 'LOGGED_IN_SALT',   '3J;n?@3x%V3/:=k:S.6OkPEeA,`%f|aw.:{12u~N1Q]qU%,<HP2I$slEXU=<npya' );
define( 'NONCE_SALT',       '9zEh9xQLW,F#A&_xdR/%?^hD>dwpf=~f#Y]A;-mdqDeQp96RUM0MV{,-T]7T9+;f' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

define('DISALLOW_FILE_EDIT', true);

define('FS_METHOD', 'direct');

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
