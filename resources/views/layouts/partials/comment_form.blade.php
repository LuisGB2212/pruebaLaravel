<!-- Tell-->
<section class="section section-sm section-first bg-default">
    <div class="container">
        @auth
            {{-- @if (auth()->user()->comments->count() < 0) --}}
                <h3 class="heading-3">Comentario</h3>
                <form class="form-style-1" method="post" action="{{ route('comments.store') }}">
                    @csrf
                    <div class="row row-20 gutters-20">
                        <div class="col-12">
                            <div class="form-wrap wow fadeIn">
                                <label class="form-label" for="comment">Comentario</label>
                                <textarea class="form-input textarea-lg" id="comment" name="comment" ></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <div class="group-custom-1 group-middle oh-desktop justify-content-center">
                        <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Enviar Comentario</button>
                        <!-- Quote Classic-->
                        {{-- <article class="quote-classic quote-classic-3 wow slideInDown">
                            <div class="quote-classic-text">
                                <p class="q">Please reserve your table at least 1 day in advance.</p>
                            </div>
                        </article> --}}
                    </div>
                </form>
            {{-- @endif --}}
            
        @else
            <h4>Inicie sesión para agregar un Comentario</h4>
            <a href="/login" class="btn btn-success"> Iniciar Sesión</a>
        @endauth
        
    </div>
</section>