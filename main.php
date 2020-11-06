<?php
/*
  Plugin Name: HYKW hykw-wp-workaround-ssl
  Plugin URI: https://github.com/hykw/hykw-wp-workaround-ssl
  Description: wp-config.php をいじれない環境で $_SERVER['HTTPS']='on'; しちゃうプラグイン
  Author: hitoshi-hayakawa
  Version: 1.0.2
*/

echo 'xxxxxxxx: debug1';

add_action( 'mu_plugin_loaded', function () {
  echo 'xxxxxxxx: debug2';
  $_SERVER['HTTPS']='on';
});
