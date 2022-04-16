@extends('layouts.site')

@section('title', "Contato - $contact->name")

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3"></div>
<h1>Contato: {{$contact->name}}</h1>

<h3>
    {{ $contact->number }}
</h3>

<h3>
    {{ $contact->email }}
</h3>

<button class="btn btn-primary"><a href="{{ route('site.edit', ['contact' => $contact]) }}">Editar</a></button>
<button class="btn btn-danger">Excluir</button>

@endsection
