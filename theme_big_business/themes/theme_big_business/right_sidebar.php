<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
?>

	<div id="page">

		<div id="content">

			<div class="box">
				<?php 
				$a = new Area('Main');
				$a->display($c);
				?>
			</div>
		
			<div class="box" id="content-box1">
				<?php 
				$a = new Area('CTA Box');
				$a->display($c);
				?>
			</div>

			<div class="box" id="content-box2">
				<?php 
				$a = new Area('Content Box');
				$a->display($c);
				?>
			</div>
			
			<br class="clearfix" />
		</div>

		<div id="sidebar">

			<div id="sidebar1">
				<?php 
				$a = new Area('Sidebar');
				$a->setBlockWrapperStart('<div class=box">');
				$a->setBlockWrapperEnd('</div>');
				$a->display($c);
				?>
			</div>

			<div id="sidebar2">
				<?php 
				$a = new GlobalArea('Global Sidebar');
				$a->setBlockWrapperStart('<div class=box">');
				$a->setBlockWrapperEnd('</div>');
				$a->display($c);
				?>
			</div>

		</div>

		<br class="clearfix" />
	</div>
	
	<div id="page-bottom">

		<div id="page-bottom-content">
			<?php 
			$a = new Area('Local Bottom Content');
			$a->display($c);
			?>
		</div>

		<div id="page-bottom-sidebar">
			<?php 
			$a = new Area('Local Bottom Sidebar');
			$a->display($c);
			?>
		</div>
		
		<div id="page-bottom-content">
			<?php 
			$a = new GlobalArea('Global Bottom Content');
			$a->display($c);
			?>
		</div>

		<div id="page-bottom-sidebar">
			<?php 
			$a = new GlobalArea('Global Bottom Sidebar');
			$a->display($c);
			?>
		</div>

		<br class="clearfix" />
	</div>

</div><!-- End Wrapper -->
<?php  $this->inc('elements/footer.php'); ?>