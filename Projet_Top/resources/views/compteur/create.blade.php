@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
   		<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6">
    <h1 class="display-3"><span>A</span>jouter numero</h1>
  </div>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('compteur.store') }}">
          @csrf
          <div class="form-group">
              <label for="numero">Numero compteur:</label>
              <input type="text" class="form-control" name="numero"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Enregistrer</button>
      </form>
  </div>
</div>
</div>
@endsection
