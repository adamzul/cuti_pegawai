<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{csrf_token()}}" />
    <link rel="shortcut icon" href="images/oil-drum.png" />
    
      
    <title> INSAFO </title>

    <!-- Bootstrap -->

    <!-- <link href="css/jquery.dataTables.min.css" rel="stylesheet"> -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendor/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendor/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendor/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet">
 
    <!-- Switchery -->
    <link href="vendor/switchery/dist/switchery.min.css" rel="stylesheet">
   
    <!-- starrr -->
    <link href="vendor/starrr/dist/starrr.css" rel="stylesheet">
   
    <!-- bootstrap-daterangepicker -->
    <link href="vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  
    <link href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
       <!-- jquery.inputmask -->

    <!-- Custom Theme Style -->
    <link href="vendor/build/css/custom.min.css" rel="stylesheet">

    <link href="vendor/nprogress/nprogress.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <!-- <img src="images/oil-drum.png" style="width: 10%"> -->
              <span class="site_title"><i class="fa fa-ship"></i> INSAFO</span>

            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/Logo Mentari2.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> Application Administrator <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                    </ul>
                  </li>

                    <li><a><i class="fa fa-edit"></i> Master <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                    </ul>
                  </li>
                  <li><a><i class="glyphicon glyphicon-tint"></i> Proyeksi dan Bunkering <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                    </ul>
                  </li>
                  <li><a><i class="fas fa-running"></i> Realisasi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-check"></i> Approvement <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-history"></i> History <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                    </ul>
                  </li>
                  <li><a><i class="fa fa-line-chart"></i> Report <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li>tes</li>
                        
                        
                    </ul>
                  </li>
                </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
              
                <ul class="nav side-menu">
                 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/Logo Mentari2.jpg" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                 
                    <li>
                      <a href="" onClick="edit_password(); return false;"">
                        
                        <span>Change Password</span>
                      </a>
                    </li>
                    <li></li>
                  </ul>
                </li>

                         
                
                
                  <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <!-- <i class="fa fa-unlock"></i> -->
                    <!-- <span class="badge bg-green">10</span> -->
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/logo2.png" alt="Profile Image" /></span>
                        <span>
                          <span>Discharge</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                   
                    
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
                   
        @yield('content')

<!-- End Bootstrap modal -->
                </div>
              </div>
            </div>
<div class="modal fade" id="modal_form1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Change Password</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form1" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" placeholder="Password" class="form-control" type="password">
                                <small id="password_info"></small>
                                <span class="help-block"></span>
                            </div>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onClick="save_password()" class="btn btn-primary">Change</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
   
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           INSAFO © 2018 DIVIT
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->

    <script src="vendor/jquery/dist/jquery.min.js"></script>
    <!-- <script src="vendor/js/jquery-3.3.1.min.js"></script> -->
    <!-- <script src="vendor/jquery/dist/jquery.min.js"></script> -->

    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
   
    <!-- Bootstrap -->
      <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  
  
    <!-- FastClick -->
      <script src="vendor/fastclick/lib/fastclick.js"></script>
   
    
    <!-- NProgress -->
      <script src="vendor/nprogress/nprogress.js"></script>
  
    <!-- bootstrap-progressbar -->
      <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  
   
    <!-- iCheck -->
     <script src="vendor/iCheck/icheck.min.js"></script>
  
    <!-- bootstrap-daterangepicker -->
     <script src="vendor/moment/min/moment.min.js"></script>
      <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
   
    <!-- bootstrap-wysiwyg -->
     <script src="vendor/jquery.hotkeys/jquery.hotkeys.js"></script>
      <script src="vendor/google-code-prettify/src/prettify.js"></script>
      <script src="vendor/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
  
    <!-- jQuery Tags Input -->
     <script src="vendor/jquery.tagsinput/src/jquery.tagsinput.js"></script>
   
    <!-- Switchery -->
     <script src="vendor/switchery/dist/switchery.min.js"></script>
 
    <!-- Select2 -->
     <script src="vendor/select2/dist/js/select2.full.min.js"></script>
   
    <!-- Parsley -->
     <script src="vendor/parsleyjs/dist/parsley.min.js"></script>
  
    <!-- Autosize -->
     <script src="vendor/autosize/dist/autosize.min.js"></script>

    <!-- jQuery autocomplete -->
     <script src="vendor/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    
    <!-- starrr -->
     <script src="vendor/starrr/dist/starrr.js"></script>
  
    <!-- Custom Theme Scripts -->
     <script src="vendor/build/js/custom.min.js"></script>


   <script src="vendor/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

      <!-- <script src="vendor/datatables.net/js/jquery.dataTables.min.js"></script> -->
      <script src="vendor/js/jquery.dataTables.min.js"></script>
      <script src="vendor/js/dataTables.fixedColumns.min.js"></script>
   
     <script src="vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
   
     <script src="vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   
     <script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
   
     <script src="vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
   
     <script src="vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
   
     <script src="vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
   
     <script src="vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
   
     <script src="vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
   
     <script src="vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   
     <script src="vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
   
     <script src="vendor/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
   
     <script src="vendor/jszip/dist/jszip.min.js"></script>
   
     <script src="vendor/pdfmake/build/pdfmake.min.js"></script>
   
     <script src="vendor/pdfmake/build/vfs_fonts.js"></script>

  

         <script src="vendor/nprogress/nprogress.js"></script>
           <script src="vendor/jQuery-Smart-Wizard/js/jquery.smartWizard1.js"></script>
           <script type="text/javascript" src="/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
           <!-- <script src="js/autonumeric.js"></script> -->
    <script type="text/javascript">

        $(document).ready(function() {
            $('.select2_single').select2();
            if($('.select2-container')[0]) {
                $('.select2-container').css('width', '100%');
            }
            $.fn.modal.Constructor.prototype.enforceFocus = function() {};
            //datatables


            // new AutoNumeric('#autonumeric', {
            //   digitGroupSeparator : ',',
            //   allowDecimalPadding : false
            // });

            $('.autonumeric').on('keyup', function(e)
            {
              // alert();
              this.value = autoNumeric(this.value);

            });

            
                $('.datetimepicker').datetimepicker({
                  format: 'YYYY-MM-DD HH:mm:00',
                });

                $('.datetimepicker2').datetimepicker({
                  format: 'MM/DD/YYYY HH:mm',
                });
          $("input").on('change', function(){
              $(this).parent().removeClass('has-error');
              $(this).next().closest('div').find('.help-block').empty();
          });
          $("select").on('change', function(){
              $(this).parent().removeClass('has-error');
              $(this).next().closest('div').find('.help-block').empty();
          });
          $("textarea").on('change', function(){
              $(this).parent().removeClass('has-error');
              $(this).next().closest('div').find('.help-block').empty();
          });
        });

        function ubahFormatWaktuSimpan(waktu){
          temp = waktu.split(" ");
          date = temp[0].split("/");
          time = temp[1];
          waktu = date[2]+"-"+date[0]+"-"+date[1]+" "+time+":00";
          return waktu;
        }

        function ubahFormatWaktuShow(waktu){
          temp = waktu.split(" ");
          date = temp[0].split("-");
          time = temp[1].split(":");
          waktu = date[1]+"/"+date[2]+"/"+date[0]+" "+time[0]+":"+time[1];
          return waktu;
        }

        function deleteFormat(angka){
          return angka.replace(/[^.\d]/g, '');
        }
        /* Fungsi */
        function autoNumeric(angka, prefix)
        {
          var number_string = angka.replace(/[^.\d]/g, '').toString(),
            split = number_string.split('.'),
            sisa  = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
            
          if (ribuan) {
            separator = sisa ? ',' : '';
            rupiah += separator + ribuan.join(',');
          }
          
          rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? rupiah : '');

        }

        function edit_password()
        {

            save_method = '';
            $('#form1')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string
            $('#modal_form1').modal('show'); // show bootstrap modal
            $('.modal-title').text('Isi Identitas Diri'); // Set Title to Bootstrap modal title
            //Ajax Load data from ajax
            // var id_user = 1;
            $.ajax({
                url : "" ,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    if(data != false){
                        $('[name="id"]').val(data.id);
                        // $('[name="nama"]').val(data.nama);
                        $('#password_info').text("kosongi password jika tidak diganti");

                        save_method = "update";
                    }
                    else{
                        save_method = "add";
                    }


                    $('#modal_form1').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Ganti Data Login'); // Set title to Bootstrap modal title

                },
                error: function (data)
                {
                    console.log(data);
                    alert('Error get data from ajax');
                }
            });
        }

        function cek_data()
        {

        }

function save_password()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable 
    var url;

   
        url = "";
   

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form1').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                 $('[name="password"]').val('');
            $('[name="cpassword"]').val('');
                $('#modal_form1').modal('hide');
               alert("Ganti Data Login Sukses");
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++) 
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable 

        }
    });
}

    // var currentSessionValue = 1;
    // // pseudo code
    // setTimeout(checkSession, 7200000);
    // function checkSession() {
        
    // alert('Session expired.');
                
    // }

</script>
@yield('customjs')

    
  </body>
</html>
