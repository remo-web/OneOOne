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
// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'oneoone-db');
/** Usuário do banco de dados MySQL */
define('DB_USER', 'remo-ooo-db');
/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'REMO-ooo#1');
/** Nome do host do MySQL */
define('DB_HOST', 'mysql857.umbler.com');
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
define('AUTH_KEY',         'lW,Yk&=vg4G+=I(9yVJIDWB,KlI[#_{Yl1TMjT3C3K7 4IhQV|EpiG}bk<F[+HL}');
define('SECURE_AUTH_KEY',  'o6?[-qE*;wV?xRs)j%kr/&rk`FjjZMEH;zarmqw-(nU6im^yiJiug$}u^qECJ6W$');
define('LOGGED_IN_KEY',    ']X,EE$l>k]wJ6O1u[jl->L8XW>AZI{{YK+1 6h?}7^0gu;+g~Rx?asfXa~1I=wNO');
define('NONCE_KEY',        '_JFUC}q/}|fRu239W)zm9x#a$zw^a|eD|k?VZ)OG_rm[(jk/w_L?QVa$ibh,X7Z*');
define('AUTH_SALT',        ':o)XmWP5I] .s5(@xOqW0N%WJy`_]R2F:|v/U<io[r8-)!#l8%#vkQJWI%0b:4V/');
define('SECURE_AUTH_SALT', 'W/duPEQ(te^O.}5*Kq;?i_eS^D#b>~ZN@k_x9&mvVTI,jR$G]`^oz`Z4BLb2]l~R');
define('LOGGED_IN_SALT',   '}D-Z;nBs%-E<MW9}>R@_MCy1|qJ:Gs>,pXTxVX(OiNe?,lR/(JNN:>M!i>1|J[.2');
define('NONCE_SALT',       'c(Or<c#QlA%AzE3iviW#oChFG(7v+rw^yJa8M3pp;+a?cyT_=xQ*W #KZ^,}CvjC');
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
