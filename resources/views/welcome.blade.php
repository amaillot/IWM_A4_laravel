@extends('layouts.app')
@section('content')

            <div class="content">
                <div class="title m-b-md">
                    Bonjour  {{ Auth::user()->name }}
<!--                    //recup variable-->
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Commander</a>
                    -
                    <a href="#">A propos de</a>
                    -
                    <a href="#">Contact</a>
                    -
                </div>
            </div>
        </div>
@endsection