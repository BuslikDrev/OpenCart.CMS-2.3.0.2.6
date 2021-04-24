<?php
// *	@copyright	OPENCART.PRO 2011 - 2021.
// *	@forum		https://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

// Site
$_['site_base']             = '';
$_['site_ssl']              = false;

// Url
$_['url_autostart']         = true;

// Language
$_['language_default']      = 'en-gb';
$_['language_autoload']     = array('en-gb');

// Database
$_['db_autostart']          = false;
$_['db_type']               = 'mysqli'; // mpdo, mssql, mysql, mysqli or postgre
$_['db_hostname']           = 'localhost';
$_['db_username']           = 'root';
$_['db_password']           = '';
$_['db_database']           = '';
$_['db_port']               = 3306;

// Mail
$_['mail_protocol']         = 'mail'; // mail or smtp
$_['mail_from']             = ''; // Your E-Mail
$_['mail_sender']           = ''; // Your name or company name
$_['mail_reply_to']         = ''; // Reply to E-Mail
$_['mail_smtp_hostname']    = '';
$_['mail_smtp_username']    = '';
$_['mail_smtp_password']    = '';
$_['mail_smtp_port']        = 25;
$_['mail_smtp_timeout']     = 5;
$_['mail_verp']             = false;
$_['mail_parameter']        = '';

// Cache
$_['cache_type']            = 'file'; // apc, file or mem
$_['cache_expire']          = 3600;

// Session
$_['session_engine']        = 'native'; // native, db or file
$_['session_name']          = 'PHPSESSID';
$_['session_autostart']     = false;
$_['session_lifetime']      = (60 * 60 * 24 * 1); // sec
$_['session_path']          = '/';//!empty($_SERVER['PHP_SELF']) ? dirname($_SERVER['PHP_SELF']) : '/' . basename(HTTPS_SERVER);
$_['session_domain']        = '';
$_['session_secure']        = $_SERVER['HTTPS'];
$_['session_httponly']      = true;
$_['session_samesite']      = 'Strict';
$_['session_probability']   = 1;
$_['session_divisor']       = 5;

// Template
$_['template_type']         = 'php';

// Error
$_['config_error_display']  = false;
$_['config_error_log']      = true;
$_['config_error_filename'] = 'error.log';

// Reponse
$_['response_header']      = array('Content-Type: text/html; charset=utf-8');
$_['response_compression'] = 0;

// Autoload Configs
$_['config_autoload']      = array();

// Autoload Libraries
$_['library_autoload']     = array();

// Autoload Libraries
$_['model_autoload']       = array();

// Actions
$_['action_default']       = 'common/home';
$_['action_router']        = 'startup/router';
$_['action_error']         = 'error/not_found';
$_['action_pre_action']    = array();
$_['action_event']         = array();
