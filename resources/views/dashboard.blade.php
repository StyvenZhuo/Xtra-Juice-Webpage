@extends('layouts.app')

@section('title', 'Xtra Juice Admin Panel')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3 mb-3">Dashboard</h1>
</div>
<hr class="mb-3">

<div class="flex justify-around mt-5">
    <div class="border p-4 rounded shadow-md w-1/3">
        <h3 class="font-bold text-xl mb-2">Product Count</h3>
        <p class="text-lg">{{ $productCount }}</p>
    </div>
    <div class="border p-4 rounded shadow-md w-1/3">
        <h3 class="font-bold text-xl mb-2">Review Count</h3>
        <p class="text-lg">{{ $reviewCount }}</p>
    </div>
</div>
@endsection