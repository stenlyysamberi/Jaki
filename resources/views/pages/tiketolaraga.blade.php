@extends('main.index')
@section('jaki-page')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
           
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $title1 }}</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $title2 }}</a></li>
                    <li class="breadcrumb-item active">{{ $title3 }}</li>
                </ol>
            </div>
            <h4 class="page-title">Tiket</h4>
        </div>
    </div>
</div> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                     <div class="save_msg"></div>
                    </div>
                </div>
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
                            <button data-toggle="modal" data-target="#con-close-modal" type="button" class="btn-add-olaraga btn btn-danger waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-ticket mr-1"></i>Baru</button>
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
                                <th>Jadwal Pertandingan</th>
                              
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Lokasi</th>
                                <th>Tribun</th>
                                <th>Tiket</th>
                                <th>Harga</th>
                               
                                
                                <th>Aksi</th>
                               
                            </tr>

                        </thead>
                       
                        
                    <tbody id="t_olaraga"></tbody>
                        
                    </table>
                </div>

                {{-- <ul class="pagination pagination-rounded justify-content-end my-2">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul> --}}
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Created a Ticket</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">

                <ul class="error"></ul>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Title</label>
                            <input type="text" class="form-control title" id="field-1" placeholder="Enter Text">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Date</label>
                            <input type="date" class="form-control tgl_start" id="field-2" placeholder="Doe">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Address</label>
                            <input type="text" class="form-control lokasi_start" id="field-3" placeholder="Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="field-3" class="control-label">Jumlah Tiket</label>
                            <input type="number" class="form-control juml_cetak" id="field-4" placeholder="Boston">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="field-5" class="control-label">Tribun</label>
                            <input type="text" class="form-control tribun" id="field-5" placeholder="United States">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Harga</label>
                            <input type="number" class="form-control harga" id="field-6" placeholder="123456">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="field-6" class="control-label">Time</label>
                            <input type="time" class="form-control waktu_start" id="field-6" placeholder="123456">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group no-margin">
                            <label for="field-7" class="control-label">URL Img</label>
                            <textarea class="form-control url_img" id="field-7" placeholder="Write something about yourself"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> --}}
                <button type="button" class="simpan_t_olaraga btn btn-success waves-effect waves-light">Simpan</button>
            </div>
        </div>
    </div>
</div>


@endsection