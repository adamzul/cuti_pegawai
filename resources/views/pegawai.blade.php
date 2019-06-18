@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Tables
    <small>advanced tables</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<br />
				<button class="btn btn-success" onclick="add_data()"><i class="glyphicon glyphicon-plus"></i> Tambah {{$title}}</button>
				<button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
				<br />
				<br />
              <table id="table" class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                  <th>ID</th>
					<th>nama</th>
					<th>username</th>
					<th>email</th>
					<th>divisi</th>
					<th>jabatan</th>
					<th>telepon</th>
					<th>alamat</th>
					<th>atasan</th>
					<th>tanggal lahir</th>
					<th>tanggal masuk</th>
					<th>tanggal keluar</th>
					<th style="width:125px;">Action</th>

                </tr>
                </thead>
                <tbody>
                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->



<!-- Bootstrap modal -->
<div class="modal  fade " id="modal_form" role="dialog">
	<div class="modal-dialog  modal-md ">
		<div class="modal-content ">
			<div class="modal-header box-header with-border">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title"></h3>
			</div>
			<div class="modal-body form">
				<form action="#" id="form" class="form-horizontal">
					<div class="box-body">
						<input type="hidden" value="" name="id"/>
						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" class="form-control"   name="nama" placeholder="nama" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="username">username</label>
							<input type="text" class="form-control"   name="username" placeholder="username" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="email" class="form-control" name="email" placeholder="email" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="password">password</label>
							<input type="password" class="form-control" name="password" placeholder="password" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="divisi">divisi</label>
							<select class="form-control select2_single" name="divisi"  >
								@foreach($divisiAll as $divisi)
								<option value="{{ $divisi->id }}">{{$divisi->nama}}</option>
								@endforeach
							</select>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="jabatan">jabatan</label>
							<select class="form-control select2_single" name="jabatan"  >
								@foreach($jabatanAll as $jabatan)
								<option value="{{ $jabatan->id }}">{{$jabatan->nama}}</option>
								@endforeach
							</select>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="telepon">telepon</label>
							<input type="text" class="form-control"   name="telepon" placeholder="telepon" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="alamat">alamat</label>
							<textarea class="form-control"   name="alamat" placeholder="alamat" ></textarea>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="tanggal_masuk">tanggal lahir</label>
							<input type="text" class="form-control datepicker"   name="tanggal_lahir" placeholder="tanggal lahir" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="tanggal_masuk">tanggal masuk</label>
							<input type="text" class="form-control datepicker"   name="tanggal_masuk" placeholder="tanggal masuk" >
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="atasan">atasan</label>
							<select class="form-control select2_single" name="atasan"  >
								@foreach($pegawaiAll as $atasan)
								<option value="{{ $atasan->id }}">{{$atasan->nama}}</option>
								@endforeach
							</select>
							<span class="help-block"></span>
						</div>
						<div class="form-group">
							<label for="tanggal_keluar">tanggal keluar</label>
							<input type="text" class="form-control datepicker"   name="tanggal_keluar" placeholder="tanggal keluar" >
							<span class="help-block"></span>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('customjs')
<script type="text/javascript">
	var save_method; //for save method string
	var table;

	$(document).ready(function() {
		//datatables
		table = $('#table').DataTable({
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.
            "scrollX": true,
			// Load data for the table's content from an Ajax source
			"ajax": {
				"headers": {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				},
				"url": "{{ url($mainUrl.'/get_data') }}",
				"type": "POST"
			},
			//Set column definition initialisation properties.
			"columnDefs": [
				{
					"targets": [ -1 ], //last column
					"orderable": false, //set not orderable
				},
			],
		});
	});
		//set input/textarea/select event when change value, remove class error and remove text help block
	function add_data()
	{
		save_method = 'add';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string
		$('#form-control-asal').show();
		$('#form-control-tujuan').show();
		$('#modal_form').modal('show'); // show bootstrap modal
		$('.modal-title').text('Add {{$title}}'); // Set Title to Bootstrap modal title
	}

	function edit_data(id)
	{
		save_method = 'update';
		$('#form')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string

		//Ajax Load data from ajax
		$.ajax({
			url : "{{ url($mainUrl.'/edit') }}" + "/" + id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{
				$.each(data, function(index, value){
					console.log(index);
					$('[name="'+index+'"]').val(value);
				})
				$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Edit {{$title}}'); // Set title to Bootstrap modal title
			},
			error: function (data)
			{
				console.log(data);
				alert('Error get data from ajax');
			}
		});
	}

	function reload_table()
	{
		table.ajax.reload(null,false); //reload datatable ajax
	}

	function save()
	{
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled',true); //set button disable
		var url;
		var method;

		if(save_method == 'add') {
			url = "{{ url($mainUrl) }}";
			method = "POST";
		} else {
			url = "{{ url($mainUrl) }}";
			method = "PUT";
		}
		
		// e.preventDefault();
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		});

		// ajax adding data to database
			console.log("{{ url($mainUrl) }}");

		$.ajax({
			url : url,
			type: method,
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function(data)
			{
				if(data.status) //if success close modal and reload ajax table
				{
					$('#modal_form').modal('hide');
					reload_table();
				}
				else
				{
					console.log(data);
					if(data.status == false) {
						// for (var i = 0; i < data.inputerror.length; i++) {
						// 	$('[name="' + data.inputerror[i] + '"]').parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						// 	$('[name="' + data.inputerror[i] + '"]').closest('div').find('.help-block').text(data.error_string[i]); //select span help-block class set text error string
						// }
						console.log(data)
						for(var key in data.inputerror){
							$('[name="'+key+'"]').parent().addClass('has-error');
							$('[name="'+key+'"]').closest('div').find('.help-block').text(data.inputerror[key][0]);
						};
					}
					else{
						alert(data.massage);
					}
				}
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable
			},
			error: function (data)
			{
				console.log(data);
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled',false); //set button enable
			}
		});
	}

	function delete_data(id)
	{
		if(confirm('Are you sure delete this data?'))
		{
			// ajax delete data to database
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
				}
			});
			$.ajax({
				url : "{{ url($mainUrl) }}"+ "/" + id,
				type: "DELETE",
				dataType: "JSON",
				success: function(data)
				{
					//if success reload ajax table
					$('#modal_form').modal('hide');
					reload_table();
				},
				error: function (data)
				{
					console.log(data);
					alert('Error deleting data');
				}
			});

		}
	}

</script>
@endsection