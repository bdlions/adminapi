<div class="panel panel-default">
    <div class="panel-heading">Subscribers</div>
    <div class="panel-body">
        <div class="row col-md-12" style="margin-left: 1px;">            
            <div class="row form-group" style="padding-left:10px;">
                <div class ="col-md-2 pull-left form-group">
                    <a href="<?php echo base_url() . 'subscriber/create_subscriber' ?>">
                        <button id="menu_create_id" value="" class="form-control pull-right btn_custom_button">Add Subscriber</button>  
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table_row_style">
                                <th style="text-align: center;">Registration date</th>
                                <th style="text-align: center;">Expired date</th>
                                <th style="text-align: center;">Max members</th>
                                <th style="text-align: center;">Ip address</th>
                                <th style="text-align: center;">Edit</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">2010-03-18 </th>
                                <th style="text-align: center;">2010-04-18 </th>
                                <th style="text-align: center;">5</th>
                                <th style="text-align: center;">10.10.13.6</th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "subscriber/update_subscriber"; ?>">Edit</a></th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">2010-03-18</th>
                                <th style="text-align: center;">2010-03-18</th>
                                <th style="text-align: center;">4</th>
                                <th style="text-align: center;">10.10.13.5</th>
                                <th style="text-align: center"><a href="<?php echo base_url() . "subscriber/update_subscriber"; ?>">Edit</a></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
