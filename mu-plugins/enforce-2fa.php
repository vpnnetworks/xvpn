<?php
/**
 * Plugin Name: Enforce 2FA
 * Description: This is mu-plugin to enforce every user to enable 2FA
 * Author:      Shub
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @package Enforce_2FA
 */

// Prevent direct access to this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not allow API requests from 2fa users.
add_filter( 'two_factor_user_api_login_enable', '__return_false', 1 ); // Hook in early to allow overrides.
