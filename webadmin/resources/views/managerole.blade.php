@extends('template.main')
@section('main-container')



    <div class="main " id="main">

        <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
        </head>


        <div class="card">
            <h6 class="card-header text-white" style="background-color: #00AA9E;">ADD ROLE</h6>
            <div class="card-body">


                <body>



                    <form class="row g-3" method="POST" action="{{ url('/') }}/role">
                        @csrf
                        <div class="col-md-12">
                            <label for="inputName5" class="form-label">New Role</label>
                            <input name="name" type="text" class="form-control" id="inputName5" placeholder="Required*">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}

                                @enderror
                            </span>
                        </div>





                        <div class="text-center">

                            <button type="submit" class="btn btn-primary">Save</button>


                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Multi Columns Form -->




                </body>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading text-white" style="background-color: #00AA9E;">
                <h3 class="panel-title">List of Roles</h3>
            </div>
            <div class="panel-body">

                @csrf
                <table id="dtHorizontalExample" class="table table-bordered table-striped" cellpadding="0" cellspacing="0"
                    width="100%">

                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th style="display: none">ID</th> 
                            <th>Role</th>
                            {{-- <th>Action</th>
                            <th>Action</th> --}}

                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $i = 1
                        @endphp

                        @foreach ($sdata as $key)
                            <tr>
                                <td>{{ $i }}</td>
                               <td style="display: none">{{ $key->id }}</td> 
                                <td>{{ $key->role }}</td>
                                @php
                                $i = $i + 1;
                                @endphp

                            </tr>
                        @endforeach




                    </tbody>

                </table>

            </div>
        </div>
        <div class="card">
            <h6 class="card-header text-white" style="background-color: #00AA9E;">
                INSTRUCTIONS

            </h6>
            <div class="card-body">


            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {




                // <!---   jnjs   -->//

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-Token': $("input[name=_token]").val()
                    }
                });
                $('#dtHorizontalExample').DataTable();

                $('#dtHorizontalExample').Tabledit({
                    url: '/role',
                    dataType: "json",
                    columns: {
                        identifier: [1, 'id'],
                        editable: [
                            [2, 'role']
                        ]
                    },
                    restoreButton: false,
                    onSuccess: function(data, textStatus, jqXHR) {
                        console.log(data);
                        if (data.action == 'delete') {
                            $('#' + data.id).remove();
                        }
                    }
                });


            });
        </script>





    </div> <!--   End #main -->

@endsection
