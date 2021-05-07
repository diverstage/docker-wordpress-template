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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'sample' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'sample' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'sample' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F@_fB3={C0uz-P.ov!`[i~ ^~My)=yGL`9t$A85*^hmZ*5:hh+6mEe2=6KV9X}<S' );
define( 'SECURE_AUTH_KEY',  'C=zN^n5<4:QkvPH6`]?hljq({k>x9<cjP?xj!Y* &#ZE#Ai_&g+sS|FU.Bt%a^?D' );
define( 'LOGGED_IN_KEY',    'dboMw)EsaH#oLm}c?7TN8%2S81?}[XJBK35R&r^B6Ct?o0.ALu(J% loadW0^D$7' );
define( 'NONCE_KEY',        'gx`/zqqL(rZ5L `z{E|P$-+]-Ds47+==Lm7RZpWEcVOw&_2ek*!k8l{}2^K-faOU' );
define( 'AUTH_SALT',        '2.Van!R( K;B45&j8KQR57%rL@z,~ktBo<am6`Br!Mh;v;vby;1[{8<g;ATRhWt!' );
define( 'SECURE_AUTH_SALT', '0B8,c~rFnjxs*F25`/>nm6l&w[ccd,gv#oeZ G|<B@.](,Td`-#4g@a$>%+%9qlP' );
define( 'LOGGED_IN_SALT',   '],>:C}NYO8y3&[SPh^=V)@mm:GS1% fBO{}=eJHdr[?zQR8f}qR~TmPXZ~<@![mp' );
define( 'NONCE_SALT',       'p-Sx9zc:YVQ50q&9)`&{e8HzpMbcY_L`oY@>11b%g-$R)Y(:w|97?o7=nx6fl%[>' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'sample_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
