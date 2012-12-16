<?php
/**
 * Define the language strings that are used on several parts of
 * the system, to avoid repetition.
 *
 * @package		ProjectSend
 * @subpackage	Core
 */

/**
 * Validation class strings
 */
$validation_no_name = __('Name was not completed','cftp_admin');
$validation_no_client = __('No client was selected','cftp_admin');
$validation_no_user = __('Username was not completed','cftp_admin');
$validation_no_pass = __('Password was not completed','cftp_admin');
$validation_no_pass2 = __('Password verification was not completed','cftp_admin');
$validation_no_email = __('E-mail was not completed','cftp_admin');
$validation_invalid_mail = __('E-mail address is not valid','cftp_admin');
$validation_alpha_user = __('Username must be alphanumeric (a-z,A-Z,0-9 allowed)','cftp_admin');
$validation_alpha_pass = __('Password must be alphanumeric (a-z,A-Z,0-9 allowed)','cftp_admin');
$validation_match_pass = __('Passwords did not match','cftp_admin');
$validation_no_level = __('User level was not specified','cftp_admin');
$add_user_exists = __('A system user or client with this login name already exists.','cftp_admin');
$add_user_mail_exists = __('A system user or client with this e-mail address already exists.','cftp_admin');
$validation_valid_pass = __('Your password can only contain letters, numbers and the following characters:','cftp_admin');
$validation_valid_chars = ('` ! " ? $ ? % ^ & * ( ) _ - + = { [ } ] : ; @ ~ # | < , > . ? \' / \ ');

/**
 * Validation strings for the length of usernames and passwords.
 * Uses the MIN and MAX values defined on sys.vars.php
 */
$validation_length_usr_1 = __('Username','cftp_admin');
$validation_length_pass_1 = __('Password','cftp_admin');
$validation_length_1 = __('length should be between','cftp_admin');
$validation_length_2 = __('and','cftp_admin');
$validation_length_3 = __('characters long','cftp_admin');
$validation_length_user = $validation_length_usr_1.' '.$validation_length_1.' '.MIN_USER_CHARS.' '.$validation_length_2.' '.MAX_USER_CHARS.' '.$validation_length_3;
$validation_length_pass = $validation_length_pass_1.' '.$validation_length_1.' '.MIN_PASS_CHARS.' '.$validation_length_2.' '.MAX_PASS_CHARS.' '.$validation_length_3;
?>