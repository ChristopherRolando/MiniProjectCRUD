@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pelanggan.create') }}"> Create New Pelanggan</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($pelanggan as $pl)
        <tr>
            <td>{{ $pl->nama }}</td>
            <td>{{ $pl->domisili }}</td>
            <td>{{ $pl->jenis_kelamin }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('pelanggan.show',$pl->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pelanggan.edit',$pl->id) }}">Edit</a>
                <form action="{{ route('pelanggan.destroy',$pl->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection