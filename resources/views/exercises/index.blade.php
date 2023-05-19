@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-12 pt-2">

                <div class="row">

                    <div class="col-8">

                        <h1 class="display-one">Exercises</h1>



                    </div>

                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Body Part</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($exercises->count())
                            @foreach ($exercises as $exercise)
                                <tr>
                                    <th scope="row">{{ $exercise->id }}</th>
                                    <td>{{ $exercise->name }}</td>
                                    <td>{{ $exercise->body_part }}</td>
                                    <td>{{ $exercise->description }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('exercise.edit', $exercise->id) }}"
                                                class="btn btn-success btn-sm me-2">Edit</a>
                                            <a href="{{ route('exercise.show', $exercise->id) }}"
                                                class="btn btn-primary btn-sm me-2">Show</a>
                                            <form action="{{ route('exercise.destroy', $exercise->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <input type="hidden" name="exercise" value="{{ $exercise->id }}">
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th scope="row">No Exercises Avaiable</th>

                            </tr>
                        @endif
                    </tbody>
                </table>
                {{-- <ul>

                        <li><a href="./list/{{ $exercise->id }}">{{ ucfirst($exercise->name) }}</a></li>

                    </ul> --}}





            </div>

            <div class="col-4 ">

                <p>Create new Exercise</p>

                <a href="/exercise" class="btn btn-primary btn-sm">Add Exercise</a>

            </div>

        </div>

    </div>
@endsection
