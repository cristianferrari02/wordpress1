<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_due' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'du<~{Fxq50NtcyZOzi>Pj_Gy#0Ve+,[MKqL>k%OUX=J|4jEf1F7U{[7j9c4>oX@T' );
define( 'SECURE_AUTH_KEY',  '@Rw,(m/^kH<j1L9p6#3Mz1AaJ*MW0$$h0 8Y&xKwAg*L.;hlL9^?J8[:0RAXOKbu' );
define( 'LOGGED_IN_KEY',    '%+EWsR!LIqF/&^b9*{<4e):2,zZZUH^eQ>*vnpa=<I[W%y~jIeXLB-Itv?>xY{:]' );
define( 'NONCE_KEY',        's@R`fcM=3`B@%0=+otu^HBV<feSR$P!!vaTGC5yaCJ*T,<&1#I*Kd/aNWHso.^l$' );
define( 'AUTH_SALT',        'Fn.6njCW3#fBk{@;C-)*%&oXw}&&Vm]*yoV>ER%w`7^px<Ho8T1OJVX1sE8_c~BA' );
define( 'SECURE_AUTH_SALT', '7=~}]b[!iGF^UKR7qC#L-1lOd^;h[}<#SOFd_Vn=CZAXf4jW!2huqE1@BxX]BOE-' );
define( 'LOGGED_IN_SALT',   'Y5_pZtRnx-S^x7ST8m74v$FO9<*tSVHC+K>Vfu2C[`xM9uA4kK{M6qMvZBmM=0~l' );
define( 'NONCE_SALT',       '0@iy8JneaUP/@a>7=whz9|$jC8pb[%>0gfHHJZ2!8yj|.x`T$zo.=OwiXRL,9]mm' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
