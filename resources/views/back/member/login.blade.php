@extends('back.layouts.master')
@section('content')
    <form action="/login" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Adresse Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-default">Se connecter</button>
    </form>
@endsection