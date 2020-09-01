<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
?>

<div id="footer">
	&copy; <?php echo date('Y')?> <a href="<?php echo DIR_REL?>/"><?php echo SITE?></a>.
	<?php echo t('All rights reserved.')?>
	<?php echo t('Built with')?> <a href="http://www.concrete5.org/r/-/82852" title="<?php echo t('concrete5 - open source content management system for PHP and MySQL')?>"><?php echo t('concrete5 CMS')?></a>. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. Big Business theme by <a href="http://www.concrete5.org/profile/-/view/82852/">iLP</a>.	
	<br />
	<?php
	$u = new User();
	if ($u->isRegistered()) { ?>
		<?php
		if (Config::get("ENABLE_USER_PROFILES")) {
			$userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
		} else {
			$userName = $u->getUserName();
		}
		?>
		<?php echo t('Logged in as <b>%s</b>.', $userName)?> <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Out')?></a>
	<?php  } else { ?>
		<a href="<?php echo $this->url('/login')?>"><?php echo t('Login')?></a>
	<?php  } ?>

</div>

<?php Loader::element('footer_required'); ?>
</body>
</html>