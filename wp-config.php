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
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'm5=y|AfcB;d[0I;pq1g8D/IG_%^1hy_x:R4/bW8yGyBL+YKe(nSR>aY,.rY7[LA:');
define('SECURE_AUTH_KEY',  ' iu&cjW*sN`HwY,>yU7h>_5[YeeSN%o;2n2~]A7cT|.KcXBZ`Ehvi06QuOIptoD>');
define('LOGGED_IN_KEY',    '^`i! d)#`-5*>zVBoFKnqjPl 1Fxj.p4#XV`#yUK}:LS:EPl~ZPtJ^<::* }(64X');
define('NONCE_KEY',        'V|E;Ea.KwyxD7oC~/>S+Ct;p~J:HB?zrFu#7W7EYhN)IbEsL_U]WO[sm1F:[U#zX');
define('AUTH_SALT',        '^OBr=32NQ@z}83|?BZ)vwF_q|.a7fqS*n[H^:ya6$vDHjt5DixE^_0u?uxOTaP!i');
define('SECURE_AUTH_SALT', 'ck^u7ohh3m5d#a|7^F@g.b3)54j_5=BY7J;<i?*]l8%sD_xAuSIX}7,i]=Yq=<NL');
define('LOGGED_IN_SALT',   '/uZ}1/{mkJ%9Rg`N*nsaAS*H0 Uw~1DF98!6xb!d*paZY6O>fQEGvvS8-rMk<KZe');
define('NONCE_SALT',       '2[JMl9tBT4ldGE<_p>~;a[^P9DuQ,o/c[eB6|+Vxbq+O!6}7,Y?/Qx*_KgqR<Yh%');

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
