@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
  <h1>Listagem dos usuários</h1>
  <a href="{{route('users.create')}}">Novo usuário</a>

  <form action="{{route('users.index')}}" method="GET">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
  </form>

  <ul>
    @foreach($users as $user)
      <li>
        {{ $user->name }} -
        {{ $user->email }} |
        <a href="{{route('users.show', $user->id)}}">Detalhes do usuário</a> -
        <a href="{{route('users.edit', $user->id)}}">Editar usuário</a>
      </li>
    @endforeach
  </ul>
@endsection