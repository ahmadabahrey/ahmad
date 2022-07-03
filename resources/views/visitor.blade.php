@include('nav')

<div class="container mt-5">
<table class="table table-bordered border-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">show</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($v as $b)
    <tr>
      <th>{{$b->id}}</th>
      <td>{{$b->name}}</td>
      <td>{{$b->email}}</td>
      <td><a class="btn btn-info text-light" href={{url('/visitorshow/'.$b->id)}}>Show</a></td>
    </tr>
  @endforeach
    
  </tbody>
</table>
</div>
@include('foot')