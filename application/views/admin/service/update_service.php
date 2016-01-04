<div class="panel panel-default">
    <div class="panel-heading">Update Service</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("service/update_service/".$service_info->id, array('id' => 'form_update_service', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"> <?php echo $message; ?> </div>
                    </div>
                    <div class="form-group">
                        <label for="service_title" class="col-md-6 control-label requiredField">
                            Title
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($title + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_service" class="col-md-6 control-label requiredField">

                        </label>
                        <div class ="col-md-3 pull-right">
                            <?php echo form_submit($submit_update_service + array('class' => 'form-control button')); ?>
                        </div> 
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>