<?php $__env->startSection('jaki-page'); ?>
     <!-- start page title -->
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
                                    <h4 class="page-title">Account</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <div class="save_msg"></div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <form class="search-bar form-inline">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <span class="mdi mdi-magnify"></span>
                                                    </div>
                                                </form>                          
                                            </div>
                                            <div class="col-md-6">
                                                <div class="text-md-right">
                                                    <button data-toggle="modal" data-target="#buat-user-admin" type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-account mr-1"></i> Account</button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-cog"></i></button>
                                                </div>
                                            </div><!-- end col-->
                                        </div>
                
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            No
                                                        </th>
                                                        <th>Nama lengkap</th>
                                                     
                                                        <th>Alamat</th>
                                                        <th>Phone</th>
                                                        <th>Level</th>
                                                        <th>Create Date</th>
                                                        <th>Update Date</th>
                                                       
                                                        
                                                        <th style="width: 82px;">Aksi</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody class="t_users">
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                        <div id="buat-user-admin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-lg ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Create a users</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body p-4">
                        
                                        <ul class="error"></ul>
                        
                                        <div class="row">
                                           <input type="text" value="1" hidden id="status">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-1" class="control-label">Nama Lengkap</label>
                                                    <input type="text" name="nama" class="form-control nama <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  id="field-1" placeholder="Enter Text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-2" class="control-label">No.Tlpn</label>
                                                    <input type="number" class="form-control hp" id="field-2" placeholder="081224xxxxxx">
                                                </div>
                                            </div>

                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field-3" class="control-label">Address</label>
                                                    <input type="text" class="form-control alamat" id="field-3" placeholder="Address">
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="field-3" class="control-label">Password</label>
                                                    <input type="password" class="form-control code" id="field-3" placeholder="Enter Text">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="field-3" class="control-label">Level</label>
                                                    <select name="" class="form-control level" id="">
                                                        <option value="admin">Admin</option>
                                                        <option value="spv">SPV</option>
                                                        <option value="owner">Owner</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group no-margin">
                                                    <label for="field-7" class="control-label">URL Img</label>
                                                    <textarea class="form-control img" id="field-7" placeholder="Write something about yourself"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="button" class="buat_user_admin btn btn-success waves-effect waves-light">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Stenly\Documents\WebApp\jaki\resources\views/pages/consumer.blade.php ENDPATH**/ ?>