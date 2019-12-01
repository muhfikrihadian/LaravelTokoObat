@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
             <form method="POST" action="{{ route('addObat') }}">
                {{ csrf_field() }}
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Obat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Stok</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="jumlah">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection
