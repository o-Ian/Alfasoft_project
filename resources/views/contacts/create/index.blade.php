@extends('layouts.site')

@section('title', 'Contato - criação')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3"></div>
<h1>Criar contato</h1>
<form action="{{ route('site.create.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Contato:</label>
        <input type="text" class="form-control" value="{{ old('name') }}" id="name" name="name" placeholder="Nome do contato" >
    @error('name')
        <span class="text-sm alert-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group">
        <label for="number">Número</label>
        <input type="number" class="form-control" value="{{ old('number') }}" id="number" name="number" placeholder="Número do contato" >
    @error('number')
        <span class="text-sm alert-danger">{{$message}}</span>
    @enderror
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="" class="form-control" value="{{ old('email') }}" id="email" name="email" placeholder="E-mail do contato" >
    @error('email')
        <span class="text-sm alert-danger">{{$message}}</span>
    @enderror
    </div>
   
    <input type="submit" value="Criar contato" class="btn btn-primary">
</form>

@endsection