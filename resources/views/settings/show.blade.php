@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Configuración</div>

                <div class="card-body">
                    <form class="form-style-1" method="post" action="{{ route('settings.update', $setting->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="name_company" placeholder="Nombre" name="name_company" value="{{ $setting->name_company }}" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="phone_company" placeholder="Teléfono" name="phone_company"  value="{{$setting->phone_company }}" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="address_company" placeholder="Dirección" name="address_company" value="{{ $setting->address_company }}" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="facebook_company" placeholder="Facebook" name="facebook_company" value="{{ $setting->facebook_company }}" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="twitter_company" placeholder="Twitter" name="twitter_company" value="{{ $setting->twitter_company }}" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="instagram_company" placeholder="Instagram" name="instagram_company" value="{{ $setting->instagram_company }}" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="row row-20 gutters-20">
                            <div class="col-12">
                                <div class="form-wrap wow fadeIn">
                                    <input class="form-input textarea-lg" id="google_company" placeholder="Google" name="google_company" value="{{ $setting->google_company }}" type="text"/>
                                </div>
                            </div>
                        </div>
                        {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}">--}}
                        <div class="group-custom-1 group-middle oh-desktop justify-content-center">
                            <button class="button button-lg button-primary button-winona wow fadeInRight" type="submit">Actualizar Configuración</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
