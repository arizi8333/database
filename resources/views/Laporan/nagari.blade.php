@extends('Layout.master')

@section('content')

<div class="card">
        <div class="card-header">
            <strong>Laporan Berdasarkan Nagari</strong>
        </div>
        <div class="card-body">
        <form action="{{ route('Laporan.searchN') }}" method="POST">
            <div class="form-group">
                <label>Nagari :</label>
                {!! Form::select('id', $nagaris, NULL, ['class' => "form-control"]) !!}
                @if ($errors->has('id'))
                    <span class="text-danger">{{ $errors->first('id') }}</span>
                @endif
            </div>
        
        </div>
            
        <div class="card-footer">
            <input type="submit" class="btn btn-primary" value="Cari" />
        </div>
        </form>
    </div>

@endsection