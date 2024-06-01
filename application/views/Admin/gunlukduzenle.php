<?php $this->load->view('admin/include/header') ?>
<?php $this->load->view('admin/include/leftmenu') ?>
<?php $gunluk = harcama::find($this->uri->segment(3)); ?>
<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Günlük Kalori</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Öğün Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="<?php echo base_url('admin/gunlukduzenle/' .$gunluk->id) ?>" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Günler <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
    
                                        <input type="text" name="date" class="form-control" value="<?php echo $gunluk->date?>" id="mdate">
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Kategori <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                    <input type="text" name="kategori" class="form-control" value="<?php echo $gunluk->kategori?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Tutar <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                    <input type="text" name="tutar" class="form-control" value="<?php echo $gunluk->tutar?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Adı <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-md-6">
                                    <input type="text" name="adi" class="form-control" value="<?php echo $gunluk->adi?>">
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