@extends('template.main')
@section('main-container')



    <div class="main " id="main">

        <head>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css>

            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
            <style>
                .dtHorizontalExampleWrapper {
                    max-width: 600px;
                    margin: 0 auto;
                }

                #dtHorizontalExample th,
                td {
                    white-space: nowrap;
                }

                table.dataTable thead .sorting:after,
                table.dataTable thead .sorting:before,
                table.dataTable thead .sorting_asc:after,
                table.dataTable thead .sorting_asc:before,
                table.dataTable thead .sorting_asc_disabled:after,
                table.dataTable thead .sorting_asc_disabled:before,
                table.dataTable thead .sorting_desc:after,
                table.dataTable thead .sorting_desc:before,
                table.dataTable thead .sorting_desc_disabled:after,
                table.dataTable thead .sorting_desc_disabled:before {
                    bottom: .5em;
                }

            </style>
        </head>


        <div class="card">
            <div class="card-body">

                <!--   Add Section --->

                <p align="left">
                    <!-- <a href="{url('/')}}/adduser"> -->
                    <button type="button" id="flip" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>
                        ADD</button>

                </p>

                <!-- Testing Testing ----->

                <head>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#flip").click(function() {
                                $("#panel").slideToggle("slow");
                            });
                        });
                    </script>
                    <style>
                        #flip {
                            padding: 5px;
                            text-align: center;
                            background-color: #0B5ED7;
                            border: solid 1px #c3c3c3;
                        }

                        #panel {
                            padding: 5px;
                            text-align: center;
                            background-color: #f6f9ff;
                            border: solid 1px #c3c3c3;
                        }

                        #panel {
                            padding: 50px;
                            display: none;
                        }

                    </style>
                </head>

                <body>


                    <!--	<button type="button" id="flip" class="btn btn-primary"><i class="bi bi-person-plus-fill"  ></i>   ADD</button> -->
                    <div id="panel">
                        <!-- Multi Columns Form -->
                        <form class="row g-3" method="POST" action="{{ url('/') }}/useradd">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">New Name</label>
                                <input name="name" type="text" class="form-control" id="inputName5"
                                    placeholder="Required*">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName6" class="form-label">New Role</label>
                                <select name="role" id="" class="form-control">
                                    @foreach ($sdata as $item)
                                        <option value="{{ $item->role }}">{{ $item->role }}</option>
                                    @endforeach
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">New Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail5"
                                    placeholder="Required*">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label for="inputmobile" class="form-label">New Contact</label>
                                <input type="number" name="mobile" class="form-control" id="contact"
                                    placeholder="Required">
                                <span class="text-danger">
                                    @error('mobile')
                                        {{ $message }}

                                    @enderror
                                </span>
                            </div>
                            <div class="col-6">
                                <label for="inputAddress5" class="form-label">New UserId</label>
                                <input type="text" name="userid" class="form-control" id="inputAddres5s"
                                    placeholder="To be generated/Don't enter">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control" id="inputPassword5">
                            </div>

                            <div class="col-4">
                                <label for="inputAddress2" class="form-label">Status</label>
                                <input type="text" name="status" class="form-control" id="inputAddress2" placeholder="">
                            </div>

                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <input type="text" name="state" class="form-control" id="inputAddress2" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" name="city" class="form-control" id="inputCity">
                            </div>


                            <div class="text-center">

                                <button type="submit" class="btn btn-primary">Submit</button>


                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->


                    </div>

                </body>

                <!-- Testing Testing ----->

                <!--</a> -->

                <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
                    width="100%">
                    <thead>
                        <tr>

                            <th>Role</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>User Id</th>

                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($data as $key)
                            <tr>

                                <td>{{ $key->role }}</td>
                                <td>{{ $key->name }}</td>
                                <td>{{ $key->mobile }}</td>
                                <td>{{ $key->email }}</td>
                                <td>{{ $key->city }}</td>
                                <td>{{ $key->userid }}</td>

                                <td>
                                    @if ($key->status == '1')
                                        <button class="btn">
                                            <span class="badge badge-success">Active</span>
                                        </button>

                                    @else
                                        <button class="btn">
                                            <span class="badge badge-danger">Inactive</span>
                                        </button>
                                    @endif
                                </td>
                                <td>

                                    <a href="{{ url('/edituser') }}/{{ $key->userid }}"> <button type="button"
                                            class="btn btn-primary">Edit</button> </a>
                                    <a href="{{ url('/deleteuser') }}/{{ $key->userid }}"> <button type="button"
                                            class="btn btn-danger">Trash</button> </a>

                                </td>
                            </tr>
                        @endforeach




                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>User Id</th>

                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#dtHorizontalExample').DataTable({
                    "scrollX": true
                });
                $('.dataTables_length').addClass('bs-select');
            });
        </script>




    </div> <!--   End #main -->

@endsection
