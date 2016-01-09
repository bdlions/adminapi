<div class="panel panel-default">
    <div class="panel-heading">Update Subscriber</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                   <?php echo form_open("subscriber/update_subscriber/".$subscriber_info->userId, array('id' => 'form_update_subscriber', 'class' => 'form-horizontal')); ?>
                   <div class ="row">
                        <div class="col-md-12"> <?php echo $message; ?> </div>
                    </div>
                    <div class="form-group">
                        <label for="registration_date" class="col-md-6 control-label requiredField">
                         Registration_date :
                        </label>
                        <div class ="col-md-6">
                              <?php echo form_input($registration_date + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="expired_date" class="col-md-6 control-label requiredField">
                         Expired_date :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($expired_date + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="max_member" class="col-md-6 control-label requiredField">
                           Max_member :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($max_member + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    
                    <div class="form-group">
                        <label for="ip_address" class="col-md-6 control-label requiredField">
                           Ip_Address :
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($ip_address + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_subscriber" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                            <?php echo form_input($submit_update_subscriber + array('class' => 'form-control button btn_custom_button')); ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>