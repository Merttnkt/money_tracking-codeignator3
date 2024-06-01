<?php $this->load->view('admin/include/header')?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $harcama=harcama::select();?>
<?php $i = 1 ; ?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Kategoriler</h4>
                        <div class="btn btn-success">
                            <a href="<?php echo base_url('admin/kategoriekle')?>">Kategori Ekle</a></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Kategori no</th>
                                        <th>Kategoriler</th>
                                         <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($harcama as $kategori) {?>
                                        <tr>
                                        <td><?php echo $i++; ?>                               </td>
                                        <td><?php echo $kategori->kategori?></td>
                                       
                                        <td>
                                            <a class="btn btn-danger" href="<?php echo base_url('admin/kategorisil/'.$kategori->id)?>"><i class="fa fa-remove"></i> Sil</a>
                                         
                                          
                                        </td>


                                    </tr>
                                    
                                    <?php }?>
                                    
                                        
                            


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php $this->load->view('admin/include/footer') ?>