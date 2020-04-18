@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/image.jpg" class="rounded-circle" style="width:50%;">
        </div>
        <div class="col-9 pt-5">
            <h1>freeCodeGram</h1>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4"><strong>freeCodeCamp.org</strong></div>
            <div>We're a global community of millions of people learning to code together.
                We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2020/04/16/16/59/landscape-5051527_960_720.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2020/04/11/08/23/landscape-5029355_960_720.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://cdn.pixabay.com/photo/2020/03/18/05/29/swimming-pool-4942724_1280.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection
