<?php
// auto-generated by sfDefineEnvironmentConfigHandler
// date: 2011/06/03 01:10:19
sfConfig::add(array(
  'app_recaptcha_enabled' => false,
  'app_recaptcha_public_key' => '6LfyCMQSAAAAAGKVp9X14Uzheb5UCXt8-924Htxo',
  'app_recaptcha_private_key' => '6LfyCMQSAAAAAC3zZBoEVnc9u8_C-_jcGpQYv5vl',
  'app_sfForkedApply_applyForm' => 'sfApplyApplyForm',
  'app_sfForkedApply_resetForm' => 'sfApplyResetForm',
  'app_sfForkedApply_resetRequestForm' => 'sfApplyResetRequestForm',
  'app_sfForkedApply_settingsForm' => 'sfApplySettingsForm',
  'app_sfForkedApply_editEmailForm' => 'sfApplyEditEmailForm',
  'app_sfForkedApply_mail_editable' => false,
  'app_sfForkedApply_confirmation' => array (
  'reset' => false,
  'apply' => false,
  'email' => false,
  'reset_logged' => false,
),
  'app_sfForkedApply_routes' => array (
  'apply' => '/user/new',
  'reset' => '/user/password-reset',
  'resetRequest' => '/user/reset-request',
  'resetCancel' => '/user/reset-cancel',
  'validate' => '/user/confirm/:validate',
  'settings' => '/user/settings',
),
  'app_sfApplyPlugin_from' => array (
  'email' => 'admin@gamename.com',
  'fullname' => 'GameName Admin',
),
  'app_sfApplyPlugin_afterLogin' => 'game/index',
));
