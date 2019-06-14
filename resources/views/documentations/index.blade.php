@extends('layouts.app')

@section('title')
  Documentations
@endsection

@section('content')

  <docs>
    <div class="mb-3">
     <h3 class="h4 text-success font-weight-bold mb-4">Docs</h4>
   </div>
   <hr />
   <div class="container">
     <div class="row">
       @forelse ($docs as $doc)
         <div class="col-sm">
           @card(['doc' => $doc])
           @endcard
         </div>
       @empty
         @alert(['type' => 'danger'])
           There are no doumentations created yet!
         @endalert
       @endforelse
     </div>
 </div>
  </docs>
@endsection
