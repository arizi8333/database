@extends('Layout.master')

@section('content')
<div class="row justify-content-center">
        <div class="col">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                    <form action="{{ route('Penduduk.update', $penduduks->id) }}" method="POST">
                    {{ @csrf_field() }}
                    {{ method_field('PUT') }}
                        {{--CARD HEADER --}}
                        <div class="card-header">
                            <strong><i class="cil-pencil"></i> Edit Data Penduduk</strong>
                        </div>

                        {{-- CARD BODY--}}
                        <div class="card-body">
                            @include('Penduduk._form_edit')
                        </div>

                        {{-- CARD FOOTER--}}
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection