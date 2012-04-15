<?php
/**
 * Home page for logged in system users.
 *
 * @package		ProjectSend
 *
 */
$allowed_levels = array(9,8,7);
require_once('sys.includes.php');
$page_title = __('Welcome to ProjectSend', 'cftp_admin');
include('header.php');
$database->MySQLDB();
?>

<div id="main">
	<h2><?php echo $page_title; ?></h2>

	<?php
	/**
	 * Icons are from the set: Origami Colored Pencil
	 *
	 * @link		http://www.iconfinder.com/search/?q=iconset%3Acolorful
	 * @author		Double-J designs
	 */
	?>
	<div class="home_column_left">
		<ul class="home_spaces">
			<?php
				/** Show UPLOAD widget to allowed users */
				$upload_allowed = array(9,8,7);
				if (in_session_or_cookies($upload_allowed)) {
			?>
					<li class="home_widget_small">
						<div class="home_container">
							<h4><?php _e('Upload files','cftp_admin'); ?></h4>
							<img src="img/home-widget-files.png" alt="" />
							<a href="upload-from-computer.php" class="button button_blue button_big"><?php _e('Upload from computer','cftp_admin'); ?></a>
							<a href="upload-by-ftp.php" class="button button_blue button_big"><?php _e('Import from FTP','cftp_admin'); ?></a>
							<div class="message message_info">
								<p><?php _e('Total files:','cftp_admin'); ?>
									<strong>
									<?php
										$sql = $database->query("SELECT distinct id FROM tbl_files");
										$count = mysql_num_rows($sql);
										echo $count;
									?>
									</strong>
								</p>
							</div>
						</div>
					</li>
			<?php
				}
				/** Show CLIENTS widget to allowed users */
				$clients_allowed = array(9,8);
				if (in_session_or_cookies($clients_allowed)) {
			?>
					<li class="home_widget_small">
						<div class="home_container">
							<h4><?php _e('Clients','cftp_admin'); ?></h4>
							<img src="img/home-widget-clients.png" alt="" />
							<a href="clientform.php" class="button button_blue button_big"><?php _e('Add new client','cftp_admin'); ?></a>
							<a href="clients.php" class="button button_blue button_big"><?php _e('Manage clients','cftp_admin'); ?></a>
							<div class="message message_info">
								<p><?php _e('Total clients:','cftp_admin'); ?>
									<strong>
									<?php
										$sql = $database->query("SELECT distinct client_user FROM tbl_clients");
										$count = mysql_num_rows($sql);
										echo $count;
									?>
									</strong>
								</p>
							</div>
						</div>
					</li>
			<?php
				}
	
				/** Show USERS and BRANDING widgets to system administrators (Level 9) only */
				$users_allowed = array(9);
				if (in_session_or_cookies($users_allowed)) {
			?>
					<li class="home_widget_small">
						<div class="home_container">
							<h4><?php _e('System users','cftp_admin'); ?></h4>
							<img src="img/home-widget-users.png" alt="" />
							<a href="userform.php" class="button button_blue button_big"><?php _e('Add new user','cftp_admin'); ?></a>
							<a href="users.php" class="button button_blue button_big"><?php _e('Manage users','cftp_admin'); ?></a>
							<div class="message message_info">
								<p><?php _e('Total users:','cftp_admin'); ?>
									<strong>
									<?php
										$sql = $database->query("SELECT distinct user FROM tbl_users");
										$count = mysql_num_rows($sql);
										echo $count;
									?>
									</strong>
								</p>
							</div>
						</div>
					</li>
					<li class="home_widget_small">
						<div class="home_container">
							<h4><?php _e('Branding','cftp_admin'); ?></h4>
							<img src="img/home-widget-branding.png" alt="" />
							<a href="branding.php" class="button button_blue button_big"><?php _e('Change Logo','cftp_admin'); ?></a>
							<p><?php _e("Upload your company logo. It will appear in every client's page.", 'cftp_admin'); ?></p>
						</div>
					</li>
			<?php
				}
			?>
		</ul>
	</div>
	<div class="clear"></div>
	
</div>
<?php
$database->Close();
include('footer.php');
?>