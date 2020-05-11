<?php
/**
 * @var $widget GL\Widgets\Text
 */
use GL\Classes\View;

?>

<?php View::load('Templates/Components/flashMessage', array('widget' => $widget)) ?>

<form action="/wp-admin/admin.php" method="post">
	<?php View::load('Templates/Components/form/head', array('widget' => $widget)) ?>
    <div class="form-group">
    	<?php wp_editor($widget->getText(), 'data'); ?>
    </div>
    <input type="submit" class="btn btn-success" value="Save">
</form>