
<form action="{{url('/category')}}" method="post">


@csrf

@include('category._form',['modo'=>'Crear'])


</form>

