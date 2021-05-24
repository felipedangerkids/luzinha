@extends('layouts.main')


@section('content')
<div class="main">
      <div class="container">
            <div class="text-center">
                  <img src="{{ url('assets/img/livros.png') }}" alt="">
                  <h4>LIVROS</h4>
            </div>
            <div class="row justify-content-around">
                  <div class="text-center">
                        <div class="alt">
                              <img src="{{ url('assets/img/musica.png') }}" alt="">
                              <h4>MÚSICA</h4>
                        </div>
                  </div>
                  <div class="text-center">
                        <div class="alt">
                              <img src="{{ url('assets/img/bebes.png') }}" alt="">
                              <h4 class="mt-4">BEBÉS</h4>
                        </div>
                  </div>
            </div>
      </div>
      <div class="container">
            <div class="row justify-content-around mt-3">
                  <div class="text-center">
                        <div class="alt">
                              <img src="{{ url('assets/img/jogos.png') }}" alt="">
                              <h4 class="mt-4">JOGOS</h4>
                        </div>
                  </div>
                  <div class="text-center">
                        <div class="alt">
                              <img src="{{ url('assets/img/pais.png') }}" alt="">
                              <h4 class="mt-4">PAIS</h4>
                        </div>
                  </div>
            </div>
      </div>
</div>
</div>


@endsection