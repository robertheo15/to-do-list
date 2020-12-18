@extends('layouts.app')

@section('content')
@include('layouts.carousell')
<div class="container">
    <div class="row justify-content-center">
        @include('layouts.product')
    </div>
</div>
@endsection
