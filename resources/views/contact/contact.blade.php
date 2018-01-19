@extends('templates.app')

@section('content')
<h1>Mon Site</h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form class="form-horizontal" method="POST" action="{{ route('sendcontact') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nom" class="col-md-4 control-label">Nom</label>
                    <div class="col-md-6">
                        <input id="nom" type="text" class="form-control" name="nom" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Envoyer
                        </button>
                    </div>
                </div>
            </form>
        </div>            
    </div>
</div>




@endsection