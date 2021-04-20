@extends('layouts.general')


@section('special-header')
    <link rel="stylesheet" href="{{ asset('css/shoppingcart.css') }}" />
@endsection


@section('main-body')
   <div class="container" style="margin-top: 30vh">
       <div class="card">
           <div class="card-header">
               Shopping cart
           </div>
            <div class="card-body" id="shopping-cart-body">
                
                
            </div>
       </div>
   </div>
@endsection

@section('special-end-page')
    <script src="{{ asset('scripts/shoppingcart.js') }}"></script>
@endsection