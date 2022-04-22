<h1>
    Welcome Home {{$name ?? "Viewer"}}
   {{--  Wlcome Home {!!$demo!!} --}}
   @if ($name=="")
      {{ "Name is empty"}}
       @elseif ($name=="Viewer")
       {{"Name is correct"}}
       @else
       {{"Name is incorrect"}}
       
   @endif
</h1>ok