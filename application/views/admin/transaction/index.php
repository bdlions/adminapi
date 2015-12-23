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
                            <tr>
                                <th style="text-align: center;">Key 1</th>
                                <th style="text-align: center;">10000</th>
                                <th style="text-align: center;">2000</th>
                                <th style="text-align: center;">2</th>
                                <th style="text-align: center;">3</th>
                                <th style="text-align: center;">01737766376</th>
                                <th style="text-align: center;">Balane out</th>
                                <th style="text-align: center;">4536373</th>
                                <th style="text-align: center;">4336522</th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "transaction/update_transaction"; ?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_transaction()"value="" class="">
                                        Delete </a></th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">Key 2</th>
                                <th style="text-align: center;">20000</th>
                                <th style="text-align: center;">2000</th>
                                <th style="text-align: center;">4</th>
                                <th style="text-align: center;">5</th>
                                <th style="text-align: center;">01723342376</th>
                                <th style="text-align: center;">Cash withdrow</th>
                                <th style="text-align: center;">45333273</th>
                                <th style="text-align: center;">4333222</th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "transaction/update_transaction"; ?>">Edit</a></th>
                                <th style="text-align: center; cursor: pointer;"><a onclick="open_modal_delete_transaction()"value="" class="">
                                        Delete </a></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view("admin/transaction/modal_delete_transaction");