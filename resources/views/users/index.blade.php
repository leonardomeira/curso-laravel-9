@extends('layouts.app')

@section('title', 'Listagem dos usuários')

@section('content')
  <h1 class="text-3xl font-bold mb-5">Listagem dos usuários</h1>
  <a class="font-bold px-3 py-2 bg-green-700 text-white" href="{{route('users.create')}}">Novo usuário</a>

  <form class="my-6" action="{{route('users.index')}}" method="GET">
    <input class="px-3 py-2" type="text" name="search" placeholder="Pesquisar">
    <button class="px-3 py-2 bg-purple-700 font-bold text-white">Pesquisar</button>
  </form>

  <table class="min-w-full leading-normal shadow-md bg-white">
    <tr>
      <th class="px-5 py-3 border-b-2 border-gray-200">Usuário</th>
      <th class="px-5 py-3 border-b-2 border-gray-200">E-mail</th>
      <th class="px-5 py-3 border-b-2 border-gray-200">Detalhes</th>
      <th class="px-5 py-3 border-b-2 border-gray-200">Editar</th>
    </tr>
    @foreach($users as $user)
      <tr>
        <td class="px-5 py-3 border-b-2">{{ $user->name }}</td>
        <td class="px-5 py-3 border-b-2">{{ $user->email }}</td>
        <td class="px-5 py-3 border-b-2 text-center"><a class="text-white font-bold px-3 py-2 bg-blue-500" href="{{route('users.show', $user->id)}}">Detalhes</a></td>
        <td class="px-5 py-3 border-b-2 text-center"><a class="font-bold px-3 py-2 bg-yellow-300" href="{{route('users.edit', $user->id)}}">Editar</a></td>
      </tr>
    @endforeach
    </table>
@endsection