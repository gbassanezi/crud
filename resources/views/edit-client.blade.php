@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Client
            </div>
            <div class="card-body">
                <form action="{{ url('update/' . $client->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-outline">
                        <input type="text" id="name" name="name" value="{{ $client->name }}" class="form-control" />
                        <label class="form-label" for="form1">Name</label>
                      </div><br>

                      <div class="form-outline">
                        <input type="text" id="contact" name="contact" value="{{ $client->contact }}" class="form-control" />
                        <label class="form-label" for="form1">Contact</label>
                      </div><br>

                      <div class="form-outline">
                        <input type="text" id="email" value="{{ $client->contact }}" name="email" class="form-control" />
                        <label class="form-label" for="form1">E-mail</label>
                      </div><br>
                      <button type="submit" class="btn btn-success">Confirm</button>
                </form>
            </div>
        </div>
    </div>
@endsection
