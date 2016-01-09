<div class="panel panel-default">
    <div class="panel-heading">Transactions</div>
    <div class="panel-body">
        <div class="row form-group"></div>
        <div class="row form-group"></div>
        <div class="row col-md-12" style="margin-left: 1px;">            
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table_row_style">
                                <th style="text-align: center;">Api key</th>
                                <th style="text-align: center;">Balance in</th>
                                <th style="text-align: center;">Balance out</th>
                                <th style="text-align: center;">Status id</th>
                                <th style="text-align: center;">Type id</th>
                                <th style="text-align: center;">Cell no</th>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Created on</th>
                                <th style="text-align: center;">Modified on</th>
                                <th style="text-align: center;">Edit</th>
                                <th style="text-align: center;">Delete</th>
                            </tr>
                            <?php foreach ($transction_list as $transction_info) { ?>
                                <tr>
                                    <th style="text-align: center;"><?php echo $transction_info->apikey; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->balanceIn; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->balanceOut; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->transactionStatusId; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->transactionTypeId; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->cellNumber; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->description; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->createdOn; ?></th>
                                    <th style="text-align: center;"><?php echo $transction_info->modifiedOn; ?></th>
                                    <th style="text-align: center"><a href="<?php echo base_url() . "transaction/update_transaction/".$transction_info->transactionId ?>">Edit</a></th>
                                    <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_transaction('<?php echo $transction_info->transactionId ;?>')"value="" class="">
                                            Delete </a></th>
                                </tr>
                            <?php } ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$this->load->view("admin/transaction/modal_delete_transaction");
