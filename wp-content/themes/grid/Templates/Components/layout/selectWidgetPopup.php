<?php
use GL\Classes\View;
?>
<div class="modal select-widget-modal fade" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Select Widget</h4>
            </div>
            <div class="modal-body">
                <?php View::load('Templates/Components/layout/widgets-tabs'); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <!--button type="button" class="btn btn-primary">Save changes</button-->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->