@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div>
                <div class="mb-4">
                    <a href="{{route('user.posts',$post->user)}}" class="font-bold">{{ $post->user->name }}</a> <span
                    class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    <p class="mb-2">{{ $post->body }}</p>
                    @auth
                    @can('delete', $post)
                        <form action="{{route('post.destroy',$post)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-blue-500">Delete</button>
                        </form>
                    @endcan
                    @endauth
                    <div class="flex items-center">
                        @auth
                        @if (!$post->likedBy(auth()->user()))
                        <form action="{{route('postsLikes', $post)}}" method="post" class="mr-1">
                            @csrf
                            <button type="submit" class="text-blue-500">Like</button>
                        </form> 
                        @else
                            <form action="{{route('postsLikes', $post)}}" method="post" class="mr-1">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-blue-500">Unlike</button>
                            </form> 
                        @endif
                        @endauth
            
                        <span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
@endsection