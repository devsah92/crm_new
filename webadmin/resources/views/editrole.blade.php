@extends('template.main')
@section('main-container')
    <div class="main " id="main">

        <head>


            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        </head>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Update Role </h5>

                @foreach ($data as $item)


                    <!-- Multi Columns Form -->
                    <form class="row g-3" method="POST" action="{{ url('/role') }}/{{ $item->id }}">
                        @csrf @method('PATCH')
                        <div class="col-md-6">
                            <label for="inputName5" class="form-label">Update Role</label>
                            <input name="name" type="text" class="form-control" id="inputName5"
                                value="{{ $item->role }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}

                                @enderror
                            </span>
                        </div>

                        <div class="text-center">

                            <button type="submit" class="btn btn-primary">Submit</button>


                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- End Multi Columns Form -->
                @endforeach
            </div>
        </div>

    </div>
@endsection
