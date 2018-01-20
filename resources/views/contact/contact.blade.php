@extends('templates.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            <div class="card">

                <form method="POST" action="{{ route('sendcontact') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input id="nom" type="text" name="nom" required autofocus>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                </form>
                
            </div>   
        </div>            
    </div>
</div>

@endsection