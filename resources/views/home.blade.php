@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{ route('comments.index') }}">Listado de comentarios</a>
                    <a class="btn btn-primary" href="{{ route('settings.show', $setting->id) }}">Configuración</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
