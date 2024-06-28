@extends('layouts.main')

@section('title', 'Usuários')

@section('content')
    
        <h1>Usuários</h1>
        <p>(Exibindo: {{$status}})</p>
        <div class="container-sm shadow p-3 mb-5 bg-white rounded usuarios" >
            @switch($status)
                @case('ativados')
                    @foreach ($users as $user)
                        @if ($user->status==1)
                            <div class="card usuario" style="width: 18rem;">
                                <img src="/img/user-page/person-circle-outline.svg" class="card-img-top" alt="img user">
                                <div class="card-body">
                                    <h5 class="card-title">{{$user->name}}</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$user->email}}</li>
                                    <li class="list-group-item">Ativo</li>
                                </ul>
                                <div class="card-body group-btn-users">
                                    <form action="" method="post">
                                        @csrf
                                        @method('UPDATE')
                                        <button type="submit" class="card-link btn-user btn-user-editar">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </button>
                                    </form>
                                    <form action="/users/{{$user->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="card-link btn-user btn-user-excluir" >
                                            <ion-icon name="trash-outline" text-color="red"></ion-icon>
                                        </button>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">última atualização: 
                                        @if ($user->created_at>$user->updated_at)
                                            {{$user->created_at}}
                                        @else
                                            {{$user->updated_at}}
                                        @endif
                                    </small>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @break
                @case('desativados')
                    @foreach ($users as $user)
                        @if ($user->status==0)
                            <div class="card usuario" style="width: 18rem;">
                                <img src="/img/user-page/person-circle-outline.svg" class="card-img-top" alt="img user">
                                <div class="card-body">
                                    <h5 class="card-title">{{$user->name}}</h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">{{$user->email}}</li>
                                    <li class="list-group-item">Desativo</li>
                                </ul>
                                <div class="card-body group-btn-users">
                                    <a href="#" class="card-link btn-user btn-user-editar">
                                        <ion-icon name="pencil-outline"></ion-icon>
                                    </a>
                                    <form action="/users/{{$user->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="card-link btn-user btn-user-excluir" ><ion-icon name="trash-outline" text-color="red"></ion-icon></button>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">última atualização: 
                                        @if ($user->created_at>$user->updated_at)
                                            {{$user->created_at}}
                                        @else
                                            {{$user->updated_at}}
                                        @endif
                                    </small>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @break
                @default
                    @foreach ($users as $user)
                        <div class="card usuario" style="width: 18rem;">
                            <img src="/img/user-page/person-circle-outline.svg" class="card-img-top" alt="img user">
                            <div class="card-body">
                                <h5 class="card-title">{{$user->name}}</h5>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$user->email}}</li>
                                <li class="list-group-item">
                                        @if ($user->status==1)
                                            Ativo
                                        @else
                                            Desativo
                                        @endif
                                </li>
                            </ul>
                            <div class="card-body group-btn-users">
                                <a href="#" class="card-link btn-user btn-user-editar">
                                    <ion-icon name="pencil-outline"></ion-icon>
                                </a>
                                <form action="/users/{{$user->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-user btn-user-excluir" ><ion-icon name="trash-outline" text-color="red"></ion-icon></button>
                                </form>
                            </div>
                            <div class="card-footer">
                                <small class="text-body-secondary">última atualização: 
                                    @if ($user->created_at>$user->updated_at)
                                        {{$user->created_at}}
                                    @else
                                        {{$user->updated_at}}
                                    @endif
                                </small>
                            </div>
                        </div>
                    @endforeach
            @endswitch
        </div>
    
@endsection