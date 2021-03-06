@extends('layouts/app')

@section('content')

<h1>Edit product: {{$director->name}}</h1>

<!-- postformulär -->

<!-- PUT OCH DELETE och några verb till blockeras ibland av brandväggar,
så ibland får man lura laravel att man skickar en post fastän man ska skicka en PUT.
därav input type hidden.
@csrf är en säkerhetsgrej. -->
<form method="POST" action="{{route('directors.update' , ['director' => $director->id])}}">
@csrf
  <input type="hidden" name="_method" value="PUT"/>
  <div class="form-group">
  <input type="text" name="name" value="{{$director->name}}" class="form-control" placeholder="director name"/>
</div>

  <div class="form-group">
  <input type="text" name="description"value="{{$director->description}}" class="form-control" placeholder="desc"/>

 <input type="submit" class="btn brn-primary" value="Updatera"/>

</div>
</form>

@endsection
