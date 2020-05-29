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
                <a href="#">Add New Posts</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>25</strong> posts</div>
                <div class="pr-4"><strong>8,814</strong> followers</div>
                <div class="pr-4"><strong>654</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{ $user->profile->url }}" target="_blank">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img 
                src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/100979272_2595361190722897_7996006178229564290_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=RPxuxOhpVj4AX9wujxv&amp;oh=ba81ef3f90d6bce3e1a3ebdeb16c1ef5&amp;oe=5EFA9540"
                alt=""
                class="w-100"
            >
        </div>
        <div class="col-4">
            <img 
                src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c343.0.753.753a/s640x640/94138667_104853351122624_2916029702674612780_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=jhZ4O7Ca5bMAX_38iUj&amp;oh=ce99b12b31fc4231c604922109219444&amp;oe=5EFB30AC"
                alt=""
                class="w-100"
            >
        </div>
        <div class="col-4">
            <img 
                src="https://instagram.fbeg4-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/94108782_546734445984063_492243886679143424_n.jpg?_nc_ht=instagram.fbeg4-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=r7U5UaoPYJkAX8CT82T&amp;oh=97c20c2d63b34cbf9d89514d26fb4a14&amp;oe=5EFBEA52"
                alt=""
                class="w-100"
            >
        </div>
    </div>
</div>
@endsection
