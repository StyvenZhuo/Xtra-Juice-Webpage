@extends('layouts.app')

@section('title', 'Reviews Settings')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3 mb-3">Review Log</h1><hr class="mb-3"/>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Review</th>
                <th scope="col" class="px-6 py-3">Time Stamps</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($reviews->count() > 0)
                @foreach($reviews as $rs)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $loop->iteration }}
                        </th>
                        <td>{{ $rs->name }}</td>
                        <td>{{ $rs->email }}</td>
                        <td>{{ $rs->review }}</td>
                        <td>{{ $rs->created_at }}</td>
                        <td class="w-36">
                            <div class="flex">
                                <div class="h-14 pt-5 justify-center">
                                    <form action="{{ route('reviews/destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">No Review</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
