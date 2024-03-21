@extends('layouts.master')

@section('content')
<div class="product-section">
    @foreach ($products as $item)
    <x-chair_cart>

    </x-chair_cart>
    @endforeach
</div>

@endsection
