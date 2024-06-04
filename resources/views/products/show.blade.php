@extends('layouts.app')
 
@section('title', 'Show Product')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Product</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Menu</label>
            <div class="mt-2">
                {{ $product->menu }}
            </div>
        </div>
 
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Price</label>
            <div class="mt-2">
                {{ $product->price }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Product Code</label>
            <div class="mt-2">
                {{ $product->id_product }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
                {{ $product->descript }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Picture</label>
            <div class="mt-2">
                <img src="{{ (!empty($product->pic))? url('storage/images/upload/'.$product->pic):url('storage/images/no_image.jpg') }}" alt="Product Image">
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Status</label>
            <div class="mt-2">
                {{ $product->stat }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection