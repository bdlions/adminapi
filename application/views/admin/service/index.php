<div class="panel panel-default">
    <div class="panel-heading">Services</div>
    <div class="panel-body">
        <div class="row col-md-12">            
            <div class="row form-group" style="padding-left:10px;">
                <div class ="col-md-2 pull-left form-group">
                    <a href="<?php echo base_url().'service/create_service'?>">
                        <button id="menu_create_id" value="" class="form-control pull-right btn_custom_button">Create Service</button>  
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th style="text-align: center">Edit</th>
                            </tr>
                            <?php foreach($service_list as $service_info){?> 
                            <tr>
                                <td><?php echo $service_info->title; ?></td>
                                <td>
                                    <a href="<?php echo base_url()."service/update_service/".$service_info->id ;?>">
                                        Edit
                                    </a>
                                </td>                                
                             </tr>
                            <?php }?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
