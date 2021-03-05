@extends('layouts.default')
@section('css')
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ url('AdminLTE-3.1.0-rc/plugins/daterangepicker/daterangepicker.css')}}">
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> Menu Pelanggan </h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Billing Access</a></li>
          <li class="breadcrumb-item active">Data Pelanggan</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Pelanggan</span>
            <span class="info-box-number" id="total">
              {{ $total }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-circle"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pengguna Aktif</span>
            <span class="info-box-number" id="aktif">
              {{ $total }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-minus-circle"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Pengguna Nonaktif</span>
            <span class="info-box-number" id="non">
              {{ $total }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <span class="info-box-icon bg-warning elevation-1"><i class="far fa-list-alt"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Total Paket</span>
            <span class="info-box-number" id="paket">
              {{ $totalPaket }}
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
    <!-- /.col -->
    <div class="row">
      <div class="col-12">
        <div class="card card-danger collapsed-card">
          <div class="card-header">
            <h3 class="card-title">Filter Data</h3>

            <div class="card-tools">
              <button type="button" accesskey="m" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
              </button>
            </div>
            <!-- /.card-tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form id="filter">
            <div class="row">
              <div class="col-1">
              </div>
              <div class="col-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right datepicker" name="from" placeholder="Pilih Tanggal Awal" id="from">
                  </div>
                  <!-- /.input group -->
              </div>
              
              <div class="col-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="far fa-calendar-alt"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control float-right datepicker" name="to" placeholder="Pilih Tanggal Akhir" id="to">
                </div>
                <!-- /.input group -->
            </div>
              <div class="col-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-list-ol"></i>
                    </span>
                  </div>
                  <select name="paket" class="custom-select">
                    <option selected>Pilih Paket</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <!-- /.input group -->
              </div>
              <div class="col-1">
                <div class="form-group">
                  <button type="button" onclick="add_filter()" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
            </form>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h2 class="card-title">Data Pelanggan</h2>
            <button class="btn btn-info float-sm-right ml-1" onclick="add()" accesskey="n" data-toggle="tooltip" data-placement="top"
              title="Tambah Data"><span class="fas fa fa-plus"></span> Tambah</button>
            <button class="btn btn-default float-sm-right" onclick="reload_table()" data-toggle="tooltip"
              data-placement="top" accesskey="r" title="Reload Table"><i class="fas fa fa-sync"></i> Reload</button>
  
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="table" class="table table-bordered table-striped" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Pelanggan</th>
                  <th>NIK</th>
                  <th>nama</th>
                  <th>alamat</th>
                  <th>paket</th>
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
<!-- Modal -->
<div class="modal fade" id="modal_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form">
          <input type="hidden" name="id">
          <div class="form-row">
            <div class="col-md-5 mb-3">
              <label for="validationCustom01">ID Pelanggan</label>
              <input type="text" class="form-control" name="id_pelanggan" placeholder="Masukan ID Pelanggan" required>
              <span class="text-danger">
                <strong id="id_pelanggan"></strong>
              </span>
            </div>
            <div class="col-md-7 mb-3">
              <label for="validationCustom01">NIK</label>
              <input type="number" class="form-control" name="nik" placeholder="Masukan NIK" required>
              <span class="text-danger">
                <strong id="nik"></strong>
              </span>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom01">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
              <span class="text-danger">
                <strong id="nama"></strong>
              </span>
            </div>
            <div class="col-md-12 mb-3">
              <label for="validationCustom01">Alamat</label>
              <textarea type="text" rows="5" class="form-control" placeholder="Masukan Alamat" name="alamat"></textarea>
              <span class="text-danger">
                <strong id="alamat"></strong>
              </span>
            </div>
            <div class="col-md-12 mb-3">
              <label for="">Paket Internet</label>
              <select name="id_paket" class="form-control">
                <option value="">Pilih Paket</option>
                @foreach ($paket as $data)
                <option value="{{ $data->id }}">{{ $data->nama }} | {{ number_format($data->harga) }} </option>
                @endforeach
              </select>
              <span class="text-danger">
                <strong id="id_paket"></strong>
              </span>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" onclick="save()" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
@endsection
@section('js')
<!-- date-range-picker -->
<script src="{{ url('AdminLTE-3.1.0-rc/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script type="text/javascript">
  var table;
   $(document).ready(function(){
    $('.datepicker').daterangepicker({
        autoUpdateInput: false,
        singleDatePicker: true,
        locale: {
            format: 'YYYY-MM-DD'
        }
      })
      
      $('input[name="from"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
      });
      $('input[name="to"]').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('YYYY-MM-DD'));
      });

      $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
      });
      table = $("#table").DataTable({
        "responsive": true,
        "processing": true,
        "serverSide": true,
        "lengthChange": false,
        "ajax": {
                url: "{{ route('billing.pelanggan.getPelanggan') }}",
                type: "GET",
                data: function(d) {
                // read start date from the element
                d.from = $('#from').val();
                d.to = $('#to').val();
              }
            },
        "lengthMenu": [
            [ 10, 25, 50, 100 ],
            [ '10 rows', '25 rows', '50 rows','100 rows' ]
        ],
        "columns": [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id_pelanggan', name: 'id_pelanggan'},
            {data: 'nik', name: 'nik'},
            {data: 'nama', name: 'nama'},
            {data: 'alamat', name: 'alamat'},
            {data: 'paket', name: 'paket'},
            {data: 'action', name: 'action', orderable: true, searchable: true},
        ],
        "dom": 'Bfrtip',
        "buttons": [
            'pageLength',
            'excelHtml5',
            {
                extend: 'pdfHtml5',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 0, 1, 2, 3, 4 ]
                }
            },
            'colvis'
        ],
      });
      
      table.buttons().container()
        .insertBefore( '#example_filter' );
    });

    function reload_table(){
        table.ajax.reload(null,false); //reload datatable ajax
        info();
    }

    function add_filter(){
      var from = $("#from").val();
      var to = $("#to").val();
      table.draw();
    }

    function add(){
      resetError();
      $('#form')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string
      $('#modal_form').modal('show'); // show bootstrap modal
      $('.modal-title').text('Input Data Pelanggan'); // Set Title to Bootstrap modal title
    }

    function save(){
      $.ajax({
        url : "{{ route('billing.pelanggan.store') }}",
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data) {
          if(data.errors) {
              if(data.errors.id_pelanggan){
                  $('#id_pelanggan').text(data.errors.id_pelanggan[0]);
              }
              if(data.errors.nik){
                  $('#nik').text(data.errors.nik[0]);
              }
              if(data.errors.nama){
                  $('#nama').html(data.errors.nama[0]);
              }
                    if(data.errors.alamat){
                  $('#alamat').html(data.errors.alamat[0]);
               }
              if(data.errors.id_paket){
                  $('#id_paket').html(data.errors.id_paket[0]);
              }
          }
          if(data.status) {
            $('#modal_form').modal('hide');
            reload_table();
            sukses();
          }
        },
        error: function (jqXHR, textStatus , errorThrown){ 
          
        }
      });
    }

    function edit(id){
      $('#form')[0].reset(); 
      resetError();
      $.ajax({
        url : "{{ route('billing.pelanggan.index') }}" +'/' + id +'/edit',
        type: "GET",
        dataType: "JSON",
        success: function(data){
          $('[name="id"]').val(data.id);
          $('[name="id_pelanggan"]').val(data.id_pelanggan);
          $('[name="nik"]').val(data.nik);
          $('[name="nama"]').val(data.nama);
          $('[name="alamat"]').val(data.alamat);
          $('[name="id_paket"]').val(data.id_paket);
          $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text('Edit Data Pelanggan'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus , errorThrown){
          alert('Error get data from ajax');
        }
      });
    }

    function delete_data(id){
      const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success',
          cancelButton: 'btn btn-danger'
        },
      })

      swalWithBootstrapButtons.fire({
        title: 'Konfirmasi !',
        text: "Anda Akan Menghapus Data ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus !',
        cancelButtonText: 'Batal',
        reverseButtons: true
      }).then((result) => {
        if (result.value) {
          $.ajax({
            url : "{{ route('billing.pelanggan.index') }}" +'/' + id,
            type: "DELETE",
            dataType: "JSON",
        })
            reload_table();
            sukseshapus();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
          swalWithBootstrapButtons.fire(
            'Batal',
            'Data tidak dihapus',
            'error'
          )
        }
      })
    }

    function resetError(){
      $('#id_pelanggan').html("");
      $('#id_paket').html("");
      $('#nik').html("");
      $('#nama').html("");
      $('#alamat').html("");
    }
</script>
@endsection