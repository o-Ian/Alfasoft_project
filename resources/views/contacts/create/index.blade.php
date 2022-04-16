@extends('layouts.site')

@section('title', 'Contato - criação')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3"></div>
<h1>Criar contato</h1>
<form action="{{ route('site.create.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do contato" required>
    </div>
    <div class="form-group">
        <label for="number">Número</label>
        <input type="number" class="form-control" id="number" name="number" placeholder="Número do contato" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail do contato" required>
    </div>
   
    <input type="submit" value="Criar contato" class="btn btn-primary">
</form>

@endsection