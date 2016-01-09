<div class="panel panel-default">
    <div class="panel-heading">Update Transactions</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                    <?php echo form_open("transaction/update_transaction/".$transction_info->transactionId, array('id' => 'form_update_transaction', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"> <?php echo $message; ?> </div>
                    </div>
                    <div class="form-group">
                        <label for="api_key" class="col-md-6 control-label requiredField">
                            Api_key : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($api_key + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="balance_in" class="col-md-6 control-label requiredField">
                            Balance_in : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($balance_in + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="balance_out" class="col-md-6 control-label requiredField">
                            Balance_out : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($balance_out + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="status_id" class="col-md-6 control-label requiredField">
                            Status_id : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($status_id + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="type_id" class="col-md-6 control-label requiredField">
                            Type_id : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($type_id + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="cell_no" class="col-md-6 control-label requiredField">
                            Cell_no : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($cell_no + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-6 control-label requiredField">
                            Description : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($description + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="created_on" class="col-md-6 control-label requiredField">
                            Created_on : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($created_on + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="modified_on" class="col-md-6 control-label requiredField">
                            Modified_on : 
                        </label>
                        <div class ="col-md-6">
                            <?php echo form_input($modified_on + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_transaction" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                            <?php echo form_input($submit_update_transction + array('class' => 'form-control')); ?>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>