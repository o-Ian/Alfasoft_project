@extends('layouts.site')

@section('title', 'Contato - edição')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3"></div>
<h1>Editar contato</h1>
<form action="{{ route('site.edit.update', ['contact' => $contact]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Contato:</label>
        <input type="text" class="form-control" id="name" name="name" minlength="5" placeholder="Nome do contato" value="{{$contact->name}}">
    </div>
    <div class="form-group">
        <label for="number">Número</label>
        <input type="name" class="form-control" id="number" name="number" minlength="9" maxlength="9" placeholder="Número do contato" value="{{$contact->number}}">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail do contato" value="{{$contact->email}}">
    </div>
   
    <input type="submit" value="Editar contato" class="btn btn-primary">
</form>

@endsection