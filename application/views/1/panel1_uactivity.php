<div class="row">


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('aktivitas_akun');?></h5>
                <div class="table-responsive">
                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Log ID</th>
                                <th>User ID</th>
                                <th>Logs</th>
                                <th>IP Address</th>
                                <th>Users Agent</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $row) {?>
                            <tr>
                            <td><?php echo $row->id_log; ?></td>
                            <td><?php echo $row->id_user; ?></td>
                            <td><?php echo $row->t_log; ?></td>
                            <td><?php echo $row->t_ip; ?></td>
                            <td><?php echo $row->t_agent; ?></td>
                            <td><?php echo $row->timestamp; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Log ID</th>
                                <th>User ID</th>
                                <th>Logs</th>
                                <th>IP Address</th>
                                <th>Users Agent</th>
                                <th>Timestamp</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>

