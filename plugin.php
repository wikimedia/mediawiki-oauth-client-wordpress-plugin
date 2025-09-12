<?php
/**
 * The main file for the MediaWiki OAuth Client plugin. Included by WordPress during the bootstrap process.
 *
 * @package     mediawiki\wp-oauth-client
 * @author      Wikimedia Foundation, Brad Morris <hello@bradleymorris.co.uk>, Human Made <hello@humanmade.com>
 * @license     https://opensource.org/licenses/GPL-2.0 GNU General Public License, version 2 (or later)
 * @copyright   Wikimedia Foundation
 *
 * @wordpress-plugin
 * Plugin Name:         MediaWiki OAuth Client
 * Plugin URI:
 * Description:         Provides SSO between your WordPress site and any MediaWiki application with the OAuth extension enabled
 * Author:              <a href="https://wikimediafoundation.org/">Wikimedia Foundation</a>, <a href="https://codeable.io/developers/brad-morris/">Brad Morris (Codeable)</a>, <a href="https://humanmade.com">Human Made</a>
 *
 * Version:             1.1.0
 * Requires at least:   6.3
 * Tested up to:        6.8.2
 *
 * Text Domain:         mw-oauth
 * Domain Path:         /lang/
 */
namespace MW\WPOAuth;

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

const PLUGIN_VERSION = '1.1.0';
const PLUGIN_FILE    = __FILE__;
const PLUGIN_SLUG    = 'mw-oauth-client';

// Include autoloader.
require_once __DIR__ . '/vendor/autoload.php';

add_action( 'plugins_loaded', array( Factory::class, 'create' ) );
