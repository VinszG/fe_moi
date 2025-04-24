<!-- resources/views/admin/ratings/index.blade.php -->

@extends('layouts.admin')

@section('content')
    <div class="container mx-auto py-8">
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-xl font-semibold mb-4">Daftar Rating Produk</h1>
        
        <div class="space-y-6">
            @foreach($comments as $comment)
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="text-lg font-semibold text-gray-800">{{ $comment->user->name ?? 'Anonymous' }}</h4>
                        <div class="text-yellow-400 flex space-x-1">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $comment->rating)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957h4.163c.969 0 1.371 1.24.588 1.81l-3.37 2.451 1.286 3.957c.3.921-.755 1.688-1.54 1.118L10 13.348l-3.37 2.452c-.784.57-1.838-.197-1.539-1.118l1.285-3.957-3.37-2.451c-.783-.57-.38-1.81.588-1.81h4.163l1.286-3.957z"/></svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957h4.163c.969 0 1.371 1.24.588 1.81l-3.37 2.451 1.286 3.957c.3.921-.755 1.688-1.54 1.118L10 13.348l-3.37 2.452c-.784.57-1.838-.197-1.539-1.118l1.285-3.957-3.37-2.451c-.783-.57-.38-1.81.588-1.81h4.163l1.286-3.957z"/></svg>
                                @endif
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-700 italic">{{ $comment->message ?? 'No comment' }}</p>

                    <!-- Tombol Verifikasi -->
                    @if(!$comment->verified)
                        <form action="{{ route('admin.product_ratings.verify', $comment->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="text-blue-500 hover:text-blue-700">Verifikasi</button>
                        </form>
                    @else
                        <p class="text-green-500 text-sm">Sudah diverifikasi</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
@endsection
