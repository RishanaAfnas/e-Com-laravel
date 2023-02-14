@extends('master')
@section('content')
<div class=" container custom-product ">
   <div class="row align-items-start  ">
    <div class="col">
        <h5> <a href="#" class="text-primary">Filter</a></h5>
     </div>
     <div class="col">
       <div class="trending-wrapper filter" >
           <h4 class="mb-3" >Result for Products</h4>
           @foreach ($products as $item)
            <div class="searched-item ">
             <a href="detail/{{$item['id']}}">
             <img class="trending-image mb-4" src="{{$item['gallery']}}" >
             <div class="">
               <h2 class="text-primary">{{$item['name']}}</h2>
               <h5 class="mb-5 ">{{$item['description']}}</h5>
           
              
             </div>
           </a>
           </div>
           @endforeach
           
       
         </div>
     </div>
     <div class="col">

     </div>

   </div>
  
</div>

@endsection

