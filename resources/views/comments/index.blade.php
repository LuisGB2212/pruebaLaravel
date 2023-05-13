@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    <div class="col-lg-12 row justify-content-end">
                        <a href="{{ route('comments.create') }}" class="btn btn-warning col-lg-4 btn-sm"> Crear Comentario</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Comentario</th>
                                <th>Usuario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->comment }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>
                                        <a href="{{ route('comments.show', $item->id ) }}" class="btn btn-success btn-sm">Ver</a>
                                        <a href="{{ route('comments.edit', $item->id ) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <form method="POST" action="{{ route('comments.destroy', $item->id ) }}">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                        {{-- <a href="{{ route('comments.destroy', $item->id ) }}" class="btn btn-danger btn-sm">Eliminar</a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="col-lg-12 row justify-content-end">
                        <div class="col-lg-4" align="right">
                            {{ $comments->links() }}
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection