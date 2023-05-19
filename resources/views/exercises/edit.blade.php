@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-12 pt-2">

                <a href="/list" class="btn btn-outline-primary btn-sm">Go back</a>

                <div class="mt-5 pl-4 pr-4 pt-4 pb-4">

                    <h1 class="display-4">Create a New Exercise</h1>

                    <p>Fill and submit this form to create a exercise</p>

                    <hr>
                    <form action="" method="POST">

                        @method('PUT')
                        @csrf

                        <div class="row">

                            <div class="control-group col-12">

                                <label for="name">Name of Exercise</label>

                                <input type="text" id="name" class="form-control" name="name"
                                    placeholder="Enter Name" value="{{ $exercise->name }}" required>

                            </div>
                            <div class="control-group col-12">

                                <label for="title">Body Part</label>

                                <input type="text" id="body_part" class="form-control" name="body_part"
                                    placeholder="Body Part" value="{{ $exercise->body_part }}" required>

                            </div>

                            <div class="control-group
                                    col-12 mt-2">

                                <label for="body">Exercise Description</label>

                                <textarea id="description" class="form-control" name="description" placeholder="Description" rows="" required>{{ $exercise->description }}</textarea>

                            </div>
                        </div>

                        <div class="row mt-2">

                            <div class="control-group col-12 text-center">

                                <button id="btn-submit" class="btn btn-primary">

                                    Update Post

                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
@endsection
