<div class="panel panel-default">
    <div class="panel-heading">Create Subscriber</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("subscriber/create_subscriber", array('id' => 'form_create_subscriber', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"></div>
                    </div>
                    <div class="form-group">
                        <label for="registration_date" class="col-md-6 control-label requiredField">
                         Registration_date :
                        </label>
                        <div class ="col-md-6">
                             <input id="datepicker-example1" class="form-control" type="text" style="z-index: 9999">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="expired_date" class="col-md-6 control-label requiredField">
                         Expired_date :
                        </label>
                        <div class ="col-md-6">
                             <input id="datepicker-example2" class="form-control" type="text" style="z-index: 9999">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="max_member" class="col-md-6 control-label requiredField">
                           Max_member :
                        </label>
                        <div class ="col-md-6">
                            <input id="max_member" class="form-control" type="text" value="" name="max_member">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="ip_address" class="col-md-6 control-label requiredField">
                           Ip_Address :
                        </label>
                        <div class ="col-md-6">
                            <input id="ip_address" class="form-control" type="text" value="" name="ip_address">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_create_subscriber" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                           <input id="submit_create_subscriber" class="form-control button btn_custom_button" type="submit" value="create" name="submit_create_photo">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>