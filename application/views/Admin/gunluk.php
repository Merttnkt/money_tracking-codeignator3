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
                        <h4 class="card-title">Günlük harcamalar</h4>                       
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Harcama no</th>
                                        <th>Harcama detayı</th>
                                        <th>Kategoriler</th>
                                        <th>Harcama tutarı</th>
                                        <th>Tarih</th>
                                         <th>İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php foreach ($harcama as $gunluk) {?>
                                        <tr>
                                        <td><?php echo $i++; ?>          
                                        <td><?php echo $gunluk->adi?></td>                     </td>
                                        <td><?php echo $gunluk->kategori?></td>
                                        <td><?php echo $gunluk->tutar?></td>
                                        <td><?php echo $gunluk->date?></td>

                                       
                                        <td>
                                            <a class="btn btn-warning" href="<?php echo base_url('admin/gunlukduzenle/'.$gunluk->id)?>"><i class="fa fa-edit"></i> Düzenle</a>
                                         
                                          
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