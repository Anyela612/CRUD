<h1>{{$modo}} categoria</h1>
<form action="">
<div class="form-group">
<label for="nombre" >Name</label>
<input type="text" class="form-control" name="name" value="{{isset($category->name)?$category->name:''}}" id="Name">

</div>
<br>
<div class="form-group">
<label for="nombre">Description</label>
<input type="text" name="description" value="{{isset($category->description)?$category->description:''}}" id="Description">

</div>

<?php
    if ($modo != "Ver") {
        echo "<input type='submit' value='{$modo} datos' id='btn-action'>";
    } 
?>


<br>
<a  href="{{url('category')}}" class="btn btn-link">Regresar</a>

</form>


