<div class="panel panel-default">
    <div class="panel-heading">Update Transactions</div>
    <div class="panel-body">
        <div class="form-background top-bottom-padding">
            <div class="row">
                <div class ="col-md-8 margin-top-bottom">
                   <?php echo form_open("transaction/update_transaction", array('id' => 'form_update_transaction', 'class' => 'form-horizontal')); ?>
                    <div class ="row">
                        <div class="col-md-12"> </div>
                    </div>
                    <div class="form-group">
                        <label for="api_key" class="col-md-6 control-label requiredField">
                           Api_key : 
                        </label>
                        <div class ="col-md-6">
                            <input id="api_key" class="form-control" type="text" value="" name="api_key">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="balance_in" class="col-md-6 control-label requiredField">
                            Balance_in : 
                        </label>
                        <div class ="col-md-6">
                            <input id="balance_in" class="form-control" type="text" value="" name="balance_in">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="balance_out" class="col-md-6 control-label requiredField">
                         Balance_out : 
                        </label>
                        <div class ="col-md-6">
                            <input id="balance_out" class="form-control" type="text" value="" name="balance_out">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="status_id" class="col-md-6 control-label requiredField">
                      Status_id : 
                        </label>
                        <div class ="col-md-6">
                            <input id="status_id" class="form-control" type="text" value="" name="status_id">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="type_id" class="col-md-6 control-label requiredField">
                           Type_id : 
                        </label>
                        <div class ="col-md-6">
                            <input id="type_id" class="form-control" type="text" value="" name="type_id">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="cell_no" class="col-md-6 control-label requiredField">
                            Cell_no : 
                        </label>
                        <div class ="col-md-6">
                            <input id="cell_no" class="form-control" type="text" value="" name="cell_no">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-6 control-label requiredField">
                            Description : 
                        </label>
                        <div class ="col-md-6">
                           <textarea id="description" class="form-control" type="text" rows="2" cols="10" name="description"></textarea>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="created_on" class="col-md-6 control-label requiredField">
                        Created_on : 
                        </label>
                        <div class ="col-md-6">
                            <input id="created_on" class="form-control" type="text" value="" name="created_on">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="modified_on" class="col-md-6 control-label requiredField">
                      Modified_on : 
                        </label>
                        <div class ="col-md-6">
                            <input id="modified_on" class="form-control" type="text" value="" name="modified_on">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="submit_update_transaction" class="col-md-6 control-label requiredField">
                        </label>
                        <div class ="col-md-3 pull-right">
                           <input id="submit_update_transaction" class="form-control button btn_custom_button" type="submit" value="update" name="submit_update_transaction">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>