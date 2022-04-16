@extends('layouts.site')

@section('title', 'Início - Lista')

@section('content')

<link rel="stylesheet" href="css/list.css">

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Número</th>
        <th scope="col">E-mail</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr>
          <a class="selected" href="{{ route('site.show', ['contact' => $contact]) }}">
            <th scope="row">{{ $contact->id }}</th>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->number }}</td>
            <td>{{ $contact->email }}</td>
            <div class="btn-group"> 
            <td><button class="btn btn-primary"><a href="{{ route('site.edit', ['contact' => $contact]) }}">Editar</a></button></td>
            <td><button class="btn btn-danger">Excluir</button></td>
            </div>
          </a>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection