
@extends('layouts.main') @push('title')
<title>Home</title>
@endpush @section('main-section'){{-- <h1>
    Welcome Home {{$name ?? "Viewer"}}
    Wlcome Home {!!$demo!!} 
   @if ($name=="")
      {{ "Name is empty"}}
       @elseif ($name=="Viewer")
       {{"Name is correct"}}
       @else
       {{"Name is incorrect"}}
       
   @endif

   @unless ($name=="Viewer")
       {{"Name is not Viewer"}} ok
   @endunless

   @isset($name)
   Welcome name
       
   @endisset
   @for($i=1;$i <=10 ;$i++)
   @if($i=="1")
   @continue
   @endif
   {{$i}}
   @endfor
</h1> --}}
Home

@endsection