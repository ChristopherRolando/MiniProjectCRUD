@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Create New Barang</a>
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
        @foreach ($barang as $pl)
        <tr>
            <td>{{ $pl->nama }}</td>
            <td>{{ $pl->kategori }}</td>
            <td>{{ $pl->harga }}</td>
            <td>
                 <a class="btn btn-info" href="{{ route('barang.show',$pl->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('barang.edit',$pl->id) }}">Edit</a>
                <form action="{{ route('barang.destroy',$pl->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection