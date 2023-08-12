@extends('admin.layouts.admin')
@section('content')
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

  <!-- Content Wrapper. Contains page content -->
  @php $user = Auth::user();
   $sno  = 0;
  @endphp
 <div class="content-wrapper" style="min-height: 505px;">

    <!-- Content Header (Page header) -->

    <section class="content-header">

     <h1 style="display:flex;justify-content:space-between;align-items:center;">

        <span>Comment List</span>

      </h1>
      <div class="pull-left">

         <div id="message"></div>

      </div> 

      @if(Session::get('editmsg'))

      <div align="center"><h4 class="pull-center alert alert-success">{{Session::get('editmsg')}}</h4>
      </div>
      @endif


      @if ($errors->any())
        <div class="alert alert-danger col-md-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
    </section>
    <span style="color:red;"> </span>
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
               <!--<form class="needs-validation" novalidate="" id="my-form" method="post" action="{{url('admin/report/feedbacktbc')}}" enctype = "multipart/form-data">
                @csrf
                <div class="input-daterange">
                 <div class="col-md-3" >
                <b>From</b><input type="text" name="fromDate" class="form-control"
               value="<?php echo date("Y-m-d"); ?>" readonly />
                
                 </div>
                 <div class="col-md-3">
                <b>To</b><input type="text" name="toDate" class="form-control" 
              value="<?php echo date("Y-m-d"); ?>" readonly />
               
                 </div>
                </div>
                <div class="col-md-2"><div> </div>
                 <input type="submit" name="export" value="Export to CSV" class="btn btn-info" style="margin-top: 18px;"/>
                </div>
               </form>-->
            </div>
          </div>
        </div>

      </div>

      <!-- Start List -->
      <div class="row">

    
  
 <label style="float: left;margin-right: 21px;">&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ redirect()->back()->getTargetUrl() }}"> =>Go Back</a></label>
        <div class="col-xs-12">
         
          <div class="box">

            

            <!-- /.box-header -->

            <div class="box-body">

             <div class="table-responsive">  

              <table id="myDataTable" class="table table-bordered table-striped">
                
                <thead>

                <tr>
                  <th>SNo</th>
                  <th>Status</th>
                  <th>Date Time</th>
                  <th>Profile</th>
                  <th>Name</th>
                  <th>State</th>
                  <th>District</th>
                  <th>Disposition</th>
                  <th>DTO mentioned Reason</th> 
                  <th>WIP Pending Reason</th>
                                    
                  <th>Remark</th>
                 
                
                </tr>

                </thead>

                <tbody> 
                
                  @foreach($comment_list as $type) 
                  @php 
                    $sno=$sno+1;
                  @endphp
                  
                 <tr>
                 
                  <td>{{$sno}}</td>
                  <td>{{$type->status}}</td>
                  <td>{{$type->created_at}}</td> 
                  <td>{{$type->profile}}</td>
                  <td>{{$type->name}}</td>
                  <td>{{$type->state}}</td>
                  <td>{{$type->district}}</td>
                   <td>{{$type->disposition}}</td>
                   <td>{{$type->dto_disposition}}</td>
                   <td>{{$type->wip_pending_reason}}</td>
                 
                  <td>{{$type->remarks}}</td>
                 
                 
      
                  
                 </tr>
                  @endforeach
                </tbody>

                <tfoot>

               

                </tfoot>

              </table>
             </div>
            </div>

            <!-- /.box-body -->

          </div>

          <div class="pull-right">
         
          </div>

          <!-- /.box -->

        </div>

        <!-- /.col -->

      </div>  
      <!-- End List -->
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    


    <script>

 function updatestatus(ticketid, dto)
{
	
 var token="{{csrf_token()}}";
 var url="{{url('')}}";
 var ticketid = ticketid;
 var dto = dto;
 //alert(ticketid);  
 //alert(dto);    
    $.ajax({
        type: "GET", url:url+'/ticketid/dto', data: {ticketid:ticketid,dto:dto, _token:token},

        complete: function(data)
        {
          location.reload();
        	//alert(response);
            //alert(data.responseText);
            //$("#district").html(data.responseText);
      //document.getElementById("grp").innerHTML = data.responseText;
        }
    });
}


function pullback(ticketno, supervisor)
{
  
 var token="{{csrf_token()}}";
 var url="{{url('')}}";
 var ticketno = $('#id_token').val();
 var supervisor = supervisor;
 //alert(ticketno);  
// alert(supervisor);    
    $.ajax({
        type: "GET", url:url+'/ticketno/supervisor', data: {ticketno:ticketno,supervisor:supervisor, _token:token},

        complete: function(data)
        {
          location.reload();
         //alert(response);
           //alert('data.responseText');
            //$("#district").html(data.responseText);
      //document.getElementById("grp").innerHTML = data.responseText;
        }
    });
}



$(document).on("click", ".update" , function() {
  var edit_id = $(this).data('id');

  var name = $('#name_'+edit_id).val();
  var email = $('#email_'+edit_id).val();

  if(name != '' && email != ''){
    $.ajax({
      url: 'updateUser',
      type: 'post',
      data: {_token: CSRF_TOKEN,editid: edit_id,name: name,email: email},
      success: function(response){
        alert(response);
      }
    });
  }else{
    alert('Fill all fields');
  }
});



        $(document).ready(function(){
          var token="{{csrf_token()}}";
          var url="{{url('')}}"; 
         $('.input-daterange').datepicker({
          todayBtn:'linked',
          format:'yyyy-mm-dd',
          autoclose:true
         });
        });
    </script>     
    <script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready( function () {
          $('#myDataTable').DataTable({
            "paging":   false,
            "info":     false,
            "searching": false
          });
      });
    </script>
    <script type="text/javascript"> 
      $('#search_a').on('keyup',function(){
        debugger;
      $value=$(this).val();
      $.ajax({
      type : 'get',
      url : '{{URL::to('admin/edit/ticketsearch')}}',
      data:{'search_name':$value
      },
      success:function(data){
        debugger;
       $('tbody').html(data);
      }
      });
      })
    </script>

@endsection