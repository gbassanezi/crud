@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        Our Clients
                    </div>
                    <div class="col text-right">
                        <a type="button" class="btn btn-success" href="{{ url('/new') }}">New client</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $c)
                            <tr>
                                <td>{{ $c->name }}</td>
                                <td>{{ $c->contact }}</td>
                                <td>{{ $c->email }}</td>
                                <td>
                                    <a class="btn btn-primary mr-2" type="button" href="{{ url('edit/' . $c->id) }}">edit</a>

                                    <form action="{{ url('delete/' . $c->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger mr-2" type="submit">delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div><br>
            <div class="card-footer text-right">
                {{ $clients }}
            </div>
        </div>
    </div>
@endsection
