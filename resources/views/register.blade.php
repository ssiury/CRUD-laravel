@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
  <div class="cadastro-geral">
    <h2>Cadastro de Usuário</h2>
    <div class=" shadow p-3 mb-5 bg-white rounded container-form">
        <form action="/register" method="POST">
          @csrf
          <div class="row">
            <div class="col">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu Nome">
            </div>
            <div class="col">
              <label for="lastname">Sobrenome:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite seu Sobrenome">
            </div>
          </div>
          <div class="row">
              <div class="col">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu Email"> 
              </div>
          </div>
          <div class="row">
              <div class="col">
                <label for="radio">Status:</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="status" id="ativo" value="1" checked>
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
              <input class="btn btn-danger" type="reset" value="Apagar">
              <input class="btn btn-primary" type="submit" value="Cadastrar">
          </div>
        </form>
    </div>
  </div>
@endsection