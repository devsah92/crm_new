

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>



    <form id="frm">
        @csrf
        <label for="name">Enter new name*</label>
        <input name="name" type="text" placeholder="required" value="">
    
         <button type="submit"> submit</button>
         @if(Session::has('message'))
       <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
       @endif
    </form>



   {{-- @foreach ($data as $item)
       <button type="submit" onclick="Btnclick()" > submit</button>
   @endforeach
    <form action=" {{ url('/test') }}/{{ $item->id }}" method="POST">
        @csrf @method('PATCH')
    
        <label for="name">Update your name*</label>
        <input name="name" type="text" value="{{ $item->role }}">
    
        <button type="submit"> submit</button>
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </form> --}}
   
    









{{-- <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
width="100%">
<thead>
    <tr>

        <th>Role</th>
        <th>Action</th>
        <th>Action</th>

    </tr>
</thead>
<tbody> --}}


    {{-- @foreach ($sdata as $key)
        <tr>

            <td>{{ $key->role }}</td>

            <!----  Action Buttons ---->
            <td>
                <form method="GET" action="{{ url('/test') }}/{{ $key->id }}">

                    @csrf
                    @method('PATCH')

                    <button type="submit" onclick="return confirm('Are you sure?')"
                        class="btn btn-primary">EDIT</button>
                </form>
            </td>

            <td>
                <form method="post" action="{{ url('/test') }}/{{ $key->id }}">

                    @csrf
                    @method('DELETE')

                    <button type="submit" onclick="return confirm('Are you sure?')"
                        class="btn btn-danger">Remove</button>
                </form>
            </td>
            <!----  Action Buttons ---->
        </tr>
    @endforeach --}}




{{-- </tbody>
<tfoot>
    <tr>
        <th>Role</th>
        <th>Action</th>
        <th>Action</th>
    </tr>
</tfoot>
</table> --}}



<script>



$('#frm').submit(function (e) { 
    e.preventDefault();
    $.ajax({
        url: "/test",
        type:'POST',
        data: $('#frm').serialize(),
        success:function(result){
            console.log(result);
        }

    })
    
});





   function Btnclick(){
        $.ajax({
            url: "/test", 
            method: 'POST',
            success: function(data)
            {
                console.log(data);
            },
            error: function(err)
            {
                console.log(err);
            }

            })
   }
</script>