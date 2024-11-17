<?php
/**
 * This helper is needed to "trick" composer autoloader to load the prefixed files
 * Otherwise if owncloud/core contains the same libraries ( i.e. guzzle ) it won't
 * load the files, as the file hash is the same and thus composer would think this was already loaded
 *
 * More information also found here: https://github.com/humbug/php-scoper/issues/298
 *
 * @link    http://wpmudev.com
 * @since   3.3.0
 *
 * @author  Kelton Smith <kelton.smith@incsub.com>
 * @package Branda\Core
 */
$scoper_path        = dirname( __FILE__ ) . '/../../dependencies/vendor/composer';
$static_loader_path = $scoper_path . '/autoload_static.php';
// phpcs:ignore
echo "\e[92mFixing\e[0m \e[33m$static_loader_path\e[0m \n";
// phpcs:ignore
$static_loader = file_get_contents( $static_loader_path );
$static_loader = \preg_replace( '/\'([A-Za-z0-9]*?)\' => __DIR__ \. (.*?),/', '\'a$1\' => __DIR__ . $2,', $static_loader );
// phpcs:ignore
file_put_contents( $static_loader_path, $static_loader );
$files_loader_path = $scoper_path . '/autoload_files.php';
// phpcs:ignore
echo "\e[92mFixing\e[0m \e[33m$files_loader_path\e[0m \n";
// phpcs:ignore
$files_loader = file_get_contents( $files_loader_path );
$files_loader = \preg_replace( '/\'(.*?)\' => (.*?),/', '\'a$1\' => $2,', $files_loader );
// phpcs:ignore
file_put_contents( $files_loader_path, $files_loader );