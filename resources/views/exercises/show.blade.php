@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-12 pt-2">
                <a href="{{ route('list') }}" class="btn btn-outline-primary">Go back</a>

            </div>
            <div class="col-12 pt-5">
                <h1 class="display-one">{{ ucfirst($exercise->name) }}</h1>

                <p>{!! $exercise->description !!}</p>

                <hr>

                <a href="/exercise/edit/{{ $exercise->id }}" class="btn btn-outline-primary btn-sm">Edit Exercise</a>

                <br><br>

                {{-- <form id="delete-frm" class="" action="" method="POST">

                        @method('DELETE')

                        @csrf

                        <button class="btn btn-danger">Delete Post</button>

                    </form> --}}

            </div>
        </div>



    </div>
@endsection
