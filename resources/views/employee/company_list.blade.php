@extends('admin.layouts.admin')



@section('content')
  
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  
  <!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper" style="min-height: 505px;">

    <!-- Content Header (Page header) -->

    <section class="content-header">

     <h1 style="display:flex;justify-content:space-between;align-items:center;">

        <span>User List</span>

        <div class="pull-right">

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add User</button>

      </div>

      </h1>

      

      <div class="pull-left">

         <div id="message"></div>

      </div> 

      @if(Session::get('message'))

      <h4 class="pull-left alert alert-success">{{Session::get('message')}}</h4>

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

    <!-- Main content -->

    <section class="content">

      <div class="row">
          <label style="float: right;margin-right: 21px;">Search:<input type="search_a" id="search_a" placeholder="" aria-controls="myDataTable"></label>
        <div class="col-xs-12">


          <div class="box">

            

            <!-- /.box-header -->

            <div class="box-body">
             <div class="table-responsive">  
              <table id="myDataTable" class="table table-bordered table-striped">

                <thead>

                <tr>
                  <th>Sr. No.</th>
                  <th>Full Name</th>
                  <th>Email</th>
                  <th>Mobile Number</th>
                  <th>Password</th>
                  <th>Action</th>                  

                </tr>

                </thead>

                <tbody>
                @php $i=0 @endphp
                @foreach($companylist as $type)                      

                <tr>
                 <td>{{++$i}}</td>
                  <!-- <td>{{$type->companyname}}</td> -->
                  <td>{{$type->companyname?$type->companyname:''}}</td>
                  <td>{{$type->email?$type->email:''}}</td> 
                  <td>{{$type->mobNo?$type->mobNo:''}}</td> 
                  <!-- <td>{{$type->password?$type->password:''}}</td> -->
                  <td>{{$type->password?$type->password:''}}</td>
                  <td><button class="editType" data-id="{{$type->id}}" style="margin: 1px;"><i class="fa fa-pencil" aria-hidden="true" ></i></button>&nbsp;<button class="deleteType" data-id="{{$type->id}}" style="margin: 1px;"><i class="fa fa-trash" aria-hidden="true"></i></button></td>

                  

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

            {{$companylist->links()}}

          </div>

          <!-- /.box -->

        </div>

        <!-- /.col -->

      </div>

      <!-- /.row -->

    </section>

    <!-- /.content -->

    <div class="modal fade" id="myModal" role="dialog">

        <div class="modal-dialog">

        

          <!-- Modal content-->

          <div class="modal-content">

            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal">&times;</button>

              <h4 class="modal-title">Add User</h4>

            </div>

               <form class="needs-validation" id="my-form" method="post" action="{{url('admin/user/save-type')}}" enctype = "multipart/form-data">
                @csrf
                   <div class="modal-body" style="overflow: hidden;">
                    <!-- text input -->
                    <div class="col-lg-12">
                     <div class="form-group">

                      <label>Full Name</label>

                      <input type="text" class="form-control" name="companyName" id="companyName" placeholder="Enter Full Name" required>

                      <input type="hidden" name="ptid" id="ptid" value="0">

                    </div>

                    <div class="form-group">

                      <label>Email</label>

                      <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" required>

                    </div>

                    <div class="form-group">

                      <label>Mob. No.</label>

                      <input type="text" class="form-control" name="mobNo" id="mobNo" placeholder="Enter Mobile No" required>

                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-4" >
                      <div class="form-group">
                        <label><b>NTEP Survey CRM</b></label>
                        <select class="form-control" name="crm1" id="crm1" >
                          <option value="">-- Select --</option>
                          <option value="1">Yes </option> 
                          <option value="0">No</option> 
                        </select>
                      </div>   
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label><b>COVID CRM</b></label>
                        <select class="form-control" name="crm2" id="crm2" >
                          <option value="">-- Select --</option>
                          <option value="1">Yes </option> 
                          <option value="0">No</option> 
                        </select>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label><b>TB Inbound CRM</b></label>
                        <select class="form-control" name="crm3" id="crm3" >
                          <option value="">-- Select --</option>
                          <option value="1">Yes </option> 
                          <option value="0">No</option> 
                        </select>
                      </div>
                    </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-md-4" >
                      <div class="form-group">
                        <label><b>Hepatitis CRM</b></label>
                        <select class="form-control" name="crm4" id="crm4" >
                          <option value="">-- Select --</option>
                          <option value="1">Yes </option> 
                          <option value="0">No</option> 
                        </select>
                      </div>   
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label><b>TB Counselling</b></label>
                        <select class="form-control" name="crm5" id="crm5" >
                          <option value="">-- Select --</option>
                          <option value="1">Yes </option> 
                          <option value="0">No</option> 
                        </select>
                      </div>
                      </div>
                      <div class="col-md-4">
                      <div class="form-group">
                        <label><b>Long Term Flow up</b></label>
                        <select class="form-control" name="crm6" id="crm6" required="">
                          <option value="">-- Select --</option>
                          <option value="1">Yes </option> 
                          <option value="0">No</option> 
                        </select>
                      </div>
                    </div> 
                   </div> 


                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <button type="submit" id="subform" name="submit" class="btn btn-info pull-right">Submit</button> 
                  </div>
              </form>
          </div>
        </div>

    </div>

  <!-- /.content-wrapper -->

  <script>

    $(document).ready(function(){

      var token="{{csrf_token()}}";

      var url="{{url('admin')}}";

      //$('.editType').click(function(){
      //$("table tbody tr").on("click",".editType", function(){  
      $(document).on('click', '.editType', function(){  
        debugger;
        console.log($(this).attr('data-id'));

        var id=$(this).attr('data-id');

        var data={_token:token,id:id};

        $.ajax({

          url:url+'/user/edit-type',

          data:data,

          method:'POST',

          success:function(data,status,xhr){

            console.log(data);

            if(data.status==1){

              var value=data.data;

              $('#companyName').val(value.companyname);
              $('#email').val(value.email).prop("disabled",true);
              $('#mobNo').val(value.mobNo);
              $('#password').val(value.password);
              $('#ptid').val(value.id);
              $('#crm1').val(value.crm1);
              $('#crm2').val(value.crm2);
              $('#crm3').val(value.crm3);
              $('#crm4').val(value.crm4);
              $('#crm5').val(value.crm5);
              $('#crm6').val(value.crm6);

                $('#myModal').modal();

            }



          },

          failure:function(status){

            console.log(status);

          }

        });

      });

      //$('#subform').on('click', function(e){
      $( "#subform" ).click(function(){
        debugger;
          $('#email').prop("disabled", false);
          $( "#my-form" ).submit();
      
      });
     //modal gets closed and open it fresh again
      $('body').on('hidden.bs.modal', function () {
        $('#ptid').val('0');
        $('#email').prop("disabled", false);
       $(this).find('form').trigger('reset');
      });


     
      //$('.deleteType').click(function(){
      $(document).on('click', '.deleteType', function(){ 
        console.log($(this).attr('data-id'));

        var id=$(this).attr('data-id');

        var data={_token:token,id:id};

        var status=confirm('Are Want to Delete This Record!');

          if(!status){

            return false;

          }

        $.ajax({

          url:url+'/user/delete-type',

          data:data,

          method:'POST',

          success:function(data,status,xhr){

            console.log(data);

            if(data.status==1){

              $('#message').html('<h4 class="alert alert-success text-center">Record Deleted !</h4>');

            }



          },

          failure:function(status){

            console.log(status);

          }

        });

      });

    });

  </script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#myDataTable').DataTable({
          "searching": false,
          "paging":   false,
          "info":     false
        });
    });
  </script>

  <script type="text/javascript"> 
    $('#search_a').on('keyup',function(){
      debugger;
    var value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('admin/user/usersearch')}}',
    data:{'search_name':value},
    success:function(data){
      debugger;
     $('tbody').html(data);
    }
    });
    })
  </script>
@endsection