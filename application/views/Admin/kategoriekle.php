<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>

<div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Kategoriler</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Kategori Ekle</a></li>
                    </ol>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo base_url('admin/kategoriekle')?>" method="post">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Kategori adı <span class="text-danger">*</span>
                                            </label>
                                         <div class="col-md-6">
    
                                        <input type="text" name="kategori" class="form-control">
                                        </div>
                                        </div>

                                       
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Ekle</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <?php $this->load->view('admin/include/footer') ?>
