<?php
/*
  Plugin Name: HYKW hykw-wp-workaround-ssl
  Plugin URI: https://github.com/hykw/hykw-wp-workaround-ssl
  Description: wp-config.php をいじれない環境で $_SERVER['HTTPS']='on'; しちゃうプラグイン
  Author: hitoshi-hayakawa
  Version: 1.0.0
*/

add_action( 'plugins_loaded', function () {
  $_SERVER['HTTPS']='on';
});
