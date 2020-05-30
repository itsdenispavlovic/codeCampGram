@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img 
                src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-19/s150x150/81629666_599233980897961_3720436160833519616_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&_nc_ohc=l7VTkALd70UAX-nKjV1&oh=8ef2f5e4a81ab5c0f5f6db8b54556f83&oe=5EFAD7AC" 
                alt=""
                class="rounded-circle"
            />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Posts</a>
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>8,814</strong> followers</div>
                <div class="pr-4"><strong>654</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img 
                        src="/storage/{{ $post->image }}"
                        alt=""
                        class="w-100"
                    >
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
