<?php
/**
 * This file is the main config loader.
 * 
 * It will check your environment and load the correct config.
 * To use the staging/prod/other config you must set an
 * environment variable named WP_ENV that matches the environment
 * name. Example:
 *
 * <VirtualHost *:80>
 *  ...
 *  SetEnv WP_ENV production
 *  ...
 * </VirtualHost>
 *
 * You can create another environment config by using the following pattern:
 *
 * config/config.<environment>.php
 */

if(!isset($_SERVER['WP_ENV'])) {
  define('WP_ENV', 'dev');
} else {
  define('WP_ENV', $_SERVER['WP_ENV']);
}

if(file_exists(dirname(dirname(__FILE__)) . '/config/config.' . WP_ENV . '.php')) {
  require_once(dirname( dirname(__FILE__) ) . '/config/config.' . WP_ENV . '.php');
}

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if( !defined('WP_DEBUG') )
  define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/wp');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
