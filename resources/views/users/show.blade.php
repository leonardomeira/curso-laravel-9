@extends('layouts.app')

@section('title', 'Detalhes do usuário')

@section('content')
<h1>Detalhes do usuário</h1>

<ul>
  <li>
    <strong>Nome:</strong> {{$user->name}}
  </li>
  <li>
    <strong>E-mail:</strong> {{$user->email}}
  </li>
  <li>
    <strong>Data de criação:</strong> {{$user->created_at}}
  </li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
  @method('DELETE')
  @csrf
  <button>Deletar</button>
</form>

@endsection