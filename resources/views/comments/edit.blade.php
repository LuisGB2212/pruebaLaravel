@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Editar comentario</div>

                <div class="card-body">
                    <form class="form-style-1" method="post" action="{{ route('comments.update', $comment->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <label class="form-label" for="comment">Comentario</label>
                                    <textarea class="form-input textarea-lg" id="comment" name="comment">{{ $comment->comment }}</textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <div class="group-custom-1 group-middle oh-desktop justify-content-center">
                            <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Actualizar Comentario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
