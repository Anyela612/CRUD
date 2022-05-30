
<form action="{{url('/category/'.$category->id)}}" method="post">
@csrf
{{method_field('PATCH')}}


@include('category._form', ['modo'=>'Actualizar'])

</form>

