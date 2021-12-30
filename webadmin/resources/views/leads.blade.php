@extends('template.main')
@section('main-container')



    <div class="main " id="main">

        <!DOCTYPE html>
        <html>

        <head>
            <title>Lead Management</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet"
                href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
            <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
            <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        </head>

        <body>

            <div class="container">
                <h1>LEAD MANAGEMENT</h1>
                <a class="btn btn-success" href="javascript:void(0)" id="createNewBook"> Add Lead</a>
            </div>
            <hr>
            <div class="container">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>SN</th>

                            <th>name</th>
                            <th>Mob</th>

                            <th>Whatsapp</th>
                            <th>Email</th>
                            <th>Requirement</th>

                            <th>City</th>
                            <th>State</th>
                            <th>Address</th>

                            <th>Pincode</th>
                            <th>Description</th>
                            <th>Assigned</th>
                            <th>Status</th>


                            <th width="300px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading"></h4>
                        </div>
                        <div class="modal-body">
                            <form id="bookForm" name="bookForm" class="form-horizontal">



                                <input type="hidden" name="id" id="id">

                                <div class="modal-body row">
                                    <div class="col">
                                        <input class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="number" name="mob" id="mob"
                                            placeholder="Mobile">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" name="watsapp" id="watsapp" placeholder="Whatsapp">
                                    </div>

                                </div>
                                <div class="modal-body row">
                                    <div class="col">
                                        <input class="form-control" type="email" name="email" id="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="modal-body row">
                                    <div class="col">
                                        <input class="form-control" name="state" id="state" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" name="city" id="city" placeholder="City">
                                    </div>
                                    <div class="col">
                                        <input class="form-control" type="number" length name="pincode" id="pincode"
                                            placeholder="Pincode">
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-sm-12">
                                        <textarea id="address" name="address" required="" placeholder="Address"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-12">
                                        <textarea id="req" name="req" required="" placeholder="Requirement"
                                            class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-sm-12">
                                        <textarea id="desc" name="desc" required="" placeholder="Requirement Details"
                                            class="form-control"></textarea>
                                    </div>
                                </div>


                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <script type="text/javascript">
                $(function() {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }

                    });
                    var table = $('.data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('lead.index') }}",
                        columns: [{
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex'
                            },

                            {
                                data: 'name',
                                name: 'name'
                            },
                            {
                                data: 'mobile',
                                name: 'mob'
                            },
                            {
                                data: 'whatsapp',
                                name: 'watsapp'
                            },
                            {
                                data: 'email',
                                name: 'email'
                            },
                            {
                                data: 'requirement',
                                name: 'req'
                            },
                            {
                                data: 'city',
                                name: 'city'
                            },
                            {
                                data: 'state',
                                name: 'state'
                            },
                            {
                                data: 'address',
                                name: 'address'
                            },
                            {
                                data: 'pincode',
                                name: 'pincode'
                            },
                            {
                                data: 'description',
                                name: 'desc'
                            },
                            {
                                data: 'assign_to',
                                name: 'assign'
                            },
                            {
                                data: 'status1',
                                name: 'status'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ]
                    });
                    $('#createNewBook').click(function() {

                        $('#id').val('');
                        $('#bookForm').trigger("reset");
                        $('#modelHeading').html("Add New Lead");
                        $('#ajaxModel').modal('show');
                    });
                    $('body').on('click', '.editBook', function() {
                        var book_id = $(this).data('id');


                        $.get("{{ route('lead.index') }}" + '/' + book_id + '/edit', function(data) {
                            $('#modelHeading').html("Edit Lead");
                            $('#saveBtn').val("edit-lead");
                            $('#ajaxModel').modal('show');
                            $('#id').val(data.id);


                            $('#name').val(data.name);

                            $('#mob').val(data.mobile);
                            $('#email').val(data.email);
                            $('#watsapp').val(data.whatsapp);
                            $('#city').val(data.city);
                            $('#state').val(data.state);
                            $('#address').val(data.address);
                            $('#pincode').val(data.pincode);
                            $('#state').val(data.state);
                            $('#req').val(data.requirement);
                            $('#desc').val(data.description);

                        })
                    });
                    $('#saveBtn').click(function(e) {
                        e.preventDefault();
                        $(this).html('Save');

                        $.ajax({
                            data: $('#bookForm').serialize(),
                            url: "{{ route('lead.store') }}",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {

                                $('#bookForm').trigger("reset");
                                $('#ajaxModel').modal('hide');
                                table.draw();

                            },
                            error: function(data) {
                                console.log('Error is:', data);
                                $('#saveBtn').html('Save Changes');
                            }
                        });
                    });

                    $('body').on('click', '.deleteBook', function() {

                        var book_id = $(this).data("id");
                        confirm("Are You sure want to delete !");

                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('lead.store') }}" + '/' + book_id,
                            success: function(data) {
                                table.draw();
                            },
                            error: function(data) {
                                console.log('Error:', data);
                            }
                        });
                    });

                });
            </script>
        </body>

        </html>

    </div>
@endsection
