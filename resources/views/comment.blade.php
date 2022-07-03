@include('nav')

<div class="container mt-5">
<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">date</th>
      <th scope="col">id_art</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>

      
    </tr>
  </thead>
  <tbody>
  <a class="s btn btn-success" href="{{url('/createcomment')}}">add</a>

  @foreach($c as $b)
    <tr>
      <th>{{$b->id}}</th>
      <td>{{$b->datecomment}}</td>
      <td>{{$b->id_art}}</td>
      <td><a class="btn btn-info text-light" href={{url('/commentshow/'.$b->id)}}>Show</a></td>
      <td><a class="btn btn-danger" href={{url('/commentdel/'.$b->id)}}>Delaet</a></td>

      
    </tr>
  @endforeach
    
  </tbody>
</table>
</div>
@include('foot')