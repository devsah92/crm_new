@extends('template.main')
@section('main-container')



    <div class="main " id="main">



<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Table Edit Delete Mysql Data using Tabledit Plugin in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  </head>
  <body>
    <div class="container">
      <br />
      <h3 align="center">Live Table Edit Delete with jQuery Tabledit in Laravel</h3>
      <br />
      {{-- <div class="panel panel-default"> --}}
        {{-- <div class="panel-heading">
          <h3 class="panel-title">Sample Data</h3>
        </div> --}}
        {{-- <div class="panel-body"> --}}
          {{-- <div class="table-responsive">  --}}
            @csrf
            <table id="editable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  {{-- <th>First Name</th>
                  <th>Last Name</th> --}}
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $row)
                <tr>
                  <td>{{ $row->id }}</td>
                  {{-- <td>{{ $row->first_name }}</td>
                  <td>{{ $row->last_name }}</td> --}}
                  <td>{{ $row->role }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          {{-- </div> --}}
        {{-- </div> --}}
      {{-- </div> --}}
    </div>
  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   
  $.ajaxSetup({
    headers:{
      'X-CSRF-Token' : $("input[name=_token]").val()
    }
  });

  $('#editable').Tabledit({
    url:"tabledit/action",
    dataType:"json",
    columns:{
      identifier:[0, 'id'],
      editable:[[1, 'role']]
    },
    restoreButton:false,
    onSuccess:function(data, textStatus, jqXHR)
    {
      console.log(data);
      if(data.action == 'delete')
      {
        $('#'+data.id).remove();
      }
    }
  });

});  
</script>


</div> <!--   End #main -->

@endsection