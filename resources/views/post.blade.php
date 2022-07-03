@include('nav')

<div class="container mt-5">
<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($a as $b)

    <tr>
      <th>{{$b->id}}</th>
      <td>{{$b->title}}</td>
      <td>{{$b->content}}</td>
      <td>{{$b->id_vist}}</td>
      <td><a class="btn btn-info text-light" href={{url('/articlshow/'.$b->id)}}>Show</a></td>
      <td><a class="btn btn-danger" href={{url('/articldel/'.$b->id)}}>Delaet</a></td>
    </tr>
  @endforeach
    
  </tbody>
</table>
</div>
@include('foot')