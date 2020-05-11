<?php use GL\Classes\View; ?>

<h1>Layout</h1>

<?php if(!empty($_GET['showBackButton'])) { ?>
	<div class="btn-group btn-group-widgets">
		<a class="btn btn-default" href="javascript:window.history.back();">Back</a>
	</div>
<?php } ?>

<?php //$currPostInfo = get_post(); ?>
<?php //if($currPostInfo->post_type != 'grid' && $currPostInfo->post_status == 'publish') { ?>
<!--	--><?php //View::load('Templates/Components/layout/template-options', array('post_id' => $currPostInfo->ID)); ?>
<?php //} ?>

<?php if(get_post_type() == 'grid') { ?>
<div class="pull-right">
    You can use shortcode to this layout: <span class="label label-default">[gl-grid-tag id="<?= get_the_ID(); ?>"]</span>
</div>
<?php } ?>

<?php View::load('Templates/Components/layout/widgets-nav'); ?>
<?php View::load('Templates/Components/grid', array('widgets' => $widgets)); ?>
<?php View::load('Templates/Components/layout/popup'); ?>
