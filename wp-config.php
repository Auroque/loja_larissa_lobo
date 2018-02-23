<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'loja_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(5Z0,P|BJ]qfW9$<I^^yV1K,R;-spQ`uaf+;F ?h3{^H(s7m*QrYy>6~U-W}Z>CS');
define('SECURE_AUTH_KEY',  'G9N7R;9qG?n{QCP*i>F+rM=t55PAG/=,0SK>U=K2f93M,(*Yaq253(yKA2G>`E+/');
define('LOGGED_IN_KEY',    'uktc]A|?HgVuOIRR*aLH~~tE6Cg(s*b*HCYZ3f|1@o269PL`D0esdO,lC^{=d]lu');
define('NONCE_KEY',        'gbWgHcBc36^)PH!0n177)`EHK+w <H5W?f+T0Q_&dE1}/pqFu7$.xNAFeI{q,kHo');
define('AUTH_SALT',        'c,d)`lrJYM8l9W&SXgeKA>TGz@(P$C]0pozLdp>yoa6O&kM=b{>RPs^5,<m=D=>x');
define('SECURE_AUTH_SALT', 'JGqb1^n[yTE3` tL3]23W*#Y|t1X$a&WK#/ut1_x1*$sLd=-y}S:g<e})Pvr1K[4');
define('LOGGED_IN_SALT',   '[O^1g6.qm3%Y_-P5*JhgVp{M)]Qw19Hg`)#d.5gw?y%M$T^~}`(_CcWV^klgoVc!');
define('NONCE_SALT',       'iI)NA8~4%Zih[B[v=DAu][aQGkMX]i(XR&++;Dn6/l[t~28zTsy<uXY++C=$[>nb');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
