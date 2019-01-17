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
define('DB_NAME', 'tumien');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'mdshun');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'hoiecyak');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキーxx
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hy#*|R[Dz5B-.bEa$Cs{gT}#(*V0|f;z|;J%n}|-ag]8E9^j%.?Hwc%Xi=s{#pAA');
define('SECURE_AUTH_KEY',  '+X%bnI(]gn(S.-a&:pGnl*pT2b.+iWEl.D4Z8pwN%IwZz0S7lYV`|dgS3X`NR.oz');
define('LOGGED_IN_KEY',    'Q~|SEA7pQG]_X[XiASdb{jO=apI5$nShNipg0%~}KsLWhYMG,y{Mv*Dr@VZ.7K,A');
define('NONCE_KEY',        'F6sTm=d=#b`bx4BUTcKj,EhR~gw5@9MO)ay&5Q+uGA5znt2/KYb9BOyPr;x=-`w0');
define('AUTH_SALT',        'W-V8I4vLmv|_yK{TL.S<1fp|YVX1++cqp|-;5 b;+_ph+VM|C=e`hZDqB)`K=<>:');
define('SECURE_AUTH_SALT', 'J}W/!6#5c|+@4&k,{|k$ k_?nPOc3W2gVEFBZ;<C8-4lfdVFEy|OzH43YREZ`7hQ');
define('LOGGED_IN_SALT',   '-{#>e+<![?Nd3`e|r;M}_F%WktoPhoJJleSyyPt0C(4o!*]4.yCoP|EJl+}VV%%a');
define('NONCE_SALT',       '#w/&m>3Q5xz70RF!7r53O= s0K})zv6/%~vy:J|4M@(N:thoI%6Jaz2DqP4jshzr');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
