@include('../nav')

<div class="container mt-3">

<form action={{url ('/storecomment')}} method="POST">
@csrf


<div class="mb-3">
    <input type="date" name="datecomment"  placeholder="datecomment">
  </div>

<div class="mb-3">
<select name="id_art">

    @foreach($c as $s)
    <option value={{ $s->id_art }}>{{ $s->title}} </option>
     @endforeach
</select>
</div>

<button type="submit" class="btn btn-success">Add-Comment</button>
</form>


</div>

@include('../foot')
