@extends('layouts.main')

@section('title', 'Editando '.$user->name)

@section('content')
  <div class="cadastro-geral">
    <h2>Editando: {{$user->name}}</h2>
    <div class=" shadow p-3 mb-5 bg-white rounded container-form">
        <form action="/users/update/{{$user->id}}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu Nome" value="{{$user->name}}">
            </div>
          </div>
          <div class="row">
              <div class="col">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email" value="{{$user->email}}"> 
              </div>
          </div>
          <div class="row">
              <div class="col">
                <label for="radio">Status:</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="ativo" value="1">
                  <label class="form-check-label" for="ativo">
                    Ativo
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="desativo" value="0">
                  <label class="form-check-label" for="desativo">
                    Desativo
                  </label>
                </div>  
              </div>
          </div>
          <div class="group-btn-register">
              <input class="btn btn-danger" type="reset" value="Apagar Dados">
              <input class="btn btn-primary" type="submit" value="Atualizar">
          </div>
        </form>
    </div>
  </div>
@endsection