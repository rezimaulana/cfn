<div class="row">


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('r3')?></h5>
                <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><?=$this->lang->line('r14')?></th>
                                <th><?=$this->lang->line('r15')?></th>
                                <th><?=$this->lang->line('r16')?></th>
                                <th><?=$this->lang->line('r17')?></th>
                                <th><?=$this->lang->line('r18')?></th>
                                <th><?=$this->lang->line('r19')?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $row) {?>
                            <tr>
                            <?php if ($row->id_user==$this->session->userdata('id_user')){$escaperootloop='disabled';}else{$escaperootloop='';}?>
                            <td><a class="btn btn-warning <?php echo $escaperootloop; ?>" href="<?php echo site_url('fiucontrol/root_change_user');?>/<?php echo $row->id_user;?>"><i class="mdi mdi-arrow-right-box"></i></a>   <?php echo $row->id_user; ?></td>
                            <td><?php echo $row->u_email; ?></td>
                            <td><?php echo $row->r_lvl; ?></td>
                            <td><?php echo $row->u_block; ?></td>
                            <td><?php echo $row->u_appr; ?></td>
                            <td><?php echo $row->timestamp_d; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th><?=$this->lang->line('r14')?></th>
                                <th><?=$this->lang->line('r15')?></th>
                                <th><?=$this->lang->line('r16')?></th>
                                <th><?=$this->lang->line('r17')?></th>
                                <th><?=$this->lang->line('r18')?></th>
                                <th><?=$this->lang->line('r19')?></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>

