<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Big Business Theme for Concrete5 by iLP - http://www.concrete5.org/profile/-/view/82852/
Based on an Original Design by Free CSS Templates - http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License
Name       : Big Business Theme for concrete5
Description: A two-column, fixed-width design with clean, professional look and a bright color scheme.
Version    : 0.9.8
Released   : 20120923
-->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php  Loader::element('header_required'); ?>
	<link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('main.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php  echo $this->getStyleSheet('typography.css'); ?>" />
</head>

<body>

	<div id="c5wrapper"><!-- Begin Wrapper -->

		<div id="header">

			<div id="logo">
				<span class="title"><a href="<?php  echo DIR_REL?>/"><?php 
					$block = Block::getByName('My_Site_Name');
					if($block && $block->bID) $block->display();
					else echo SITE;?></a>
				</span>
			</div>

			<div id="subtitle">
				<?php 
				$a = new GlobalArea('Subtitle');
				if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
					$a->setBlockLimit(1);
					$a->display($c);
				} else { ?>
					<h2>Big Business Theme for concrete5</h2>
				<?php  } ?>
			</div>

		</div>
		
		<div id="menu">
			<?php 
			$bt_nav = BlockType::getByHandle('autonav');
			$bt_nav->controller->displayPages = 'top';
			$bt_nav->controller->orderBy = 'display_asc';
			$bt_nav->controller->displaySubPages = 'none';
			$bt_nav->render('templates/header_menu');
			?>
			<br class="clearfix" />
		</div>
		
		<div id="banner">
			<?php 
			$a = new GlobalArea('Banner');
			if (($a->getTotalBlocksInArea($c) > 0) || ($c->isEditMode())) {
				$a->setBlockLimit(1);
				$a->display($c);
			} else { ?>
				<img class="pic" src="<?php  echo $this->getThemePath(); ?>/img/pic01.jpg" width="870" height="230" alt="banner image" />
			<?php  } ?>
		</div>