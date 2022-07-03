@include('nav')
<ul class="ul">
    <li><a class="nav-link active" aria-current="page" href="{{url('/visitor')}}">Visitor</a> </li>
    <li><a class="nav-link active" aria-current="page" href="{{url('/comment')}}">comment</a></li>
    <li><a class="nav-link active" aria-current="page" href="{{url('/article')}}">Article</a></li>
</ul>



@include('foot')