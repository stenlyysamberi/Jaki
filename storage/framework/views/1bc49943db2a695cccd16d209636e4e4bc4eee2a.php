<?php $__env->startSection('jaki-page'); ?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo e($title1); ?></a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo e($title2); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e($title3); ?></li>
                </ol>
            </div>
            <h4 class="page-title">Wisata</h4>

            <div class="alert-wisata"></div>
        </div>
    </div>
</div> 



<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="save_msg"></div>
                </div>
                <div class="col-lg-8">
                   
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="inputPassword2" class="sr-only">Search</label>
                            <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                        </div>
                        <div class="form-group mx-sm-3">
                            <label for="status-select" class="mr-2">Sort By</label>
                            <select class="custom-select" id="status-select">
                                <option selected="">All</option>
                                <option value="1">Popular</option>
                                <option value="2">Price Low</option>
                                <option value="3">Price High</option>
                                <option value="4">Sold Out</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="text-lg-right mt-3 mt-lg-0">
                        <button  type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-cog"></i></button>
                        <a data-toggle="modal" data-target="#wisata-modal" href="#" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i>New Travel</a>
                    </div>
                </div><!-- end col-->
            </div> <!-- end row -->
        </div> <!-- end card-box -->
    </div> <!-- end col-->
</div>



<div class="row t_wisata">
    
</div>


<div id="wisata-modal" class="modal fade wisata-model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Info Wisata</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">

                <ul class="error"></ul>

                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Nama Wisata</label>
                            <input type="text" class="form-control nama_dest" id="field-1" placeholder="Enter Text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Alamat</label>
                            <input type="phone" class="form-control alamat_dest" id="field-2" placeholder="Doe">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Tlpn</label>
                            <input type="number" class="form-control tlpn_dest" id="field-2" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Maps API</label>
                            <input type="text" class="form-control alamat_maps" id="field-3" placeholder="Address">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Pic</label>
                            <input type="text" class="form-control gambar_dest" id="field-4" placeholder="Boston">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Panduan Loc</label>
                            <input type="text" class="form-control panduan_dest" id="field-4" placeholder="Boston">
                        </div>
                    </div>
                    
                   

                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">Desc Info</label>
                            <textarea class="form-control dec" id="field-7" placeholder="Write something about yourself"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                
                <button type="button" class="simpan_t_wisata btn btn-success waves-effect waves-light">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Stenly\Documents\WebApp\jaki\resources\views/pages/tiketwisata.blade.php ENDPATH**/ ?>