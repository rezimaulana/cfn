<div class="row">


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?=$this->lang->line('sesi_akun');?></h5>
                
                <div class="table-responsive">
                
                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>IP Address</th>
                                <th>Data</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $row) {?>
                            <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->ip_address; ?></td>
                            <td><?php echo $row->data; ?></td>
                            <td><?php echo $row->timestamp; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>IP Address</th>
                                <th>Data</th>
                                <th>Timestamp</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>



</div>