@extends('layouts.admin')

{{-- @inject('banner', 'App\Models\Banner') --}}

@section('content')

<div class="h4 mb-5">ბანერის შეცვლა</div>
@if ($errors->any())
    <div class="alert alert-success">ბანერი შეიცვალა!</div>
@endif
<div id="banner-wrapper">
    <img src="/images/banner-image/{{ $banner->image_name }}">
    <figcaption class="ml-1 mb-4 font-weight-bold text-black">{{ $banner->banner_description }}
        <br>
        ზომა: {{ $banner->resolution }}
    </figcaption>
    <img src="{{ $banner->image_name }}" alt="" class="image mb-5">
    <form action="/admin/banners/{{ $banner->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <i title="სურათის ზომათა შეფარდება უნდა იყოს {{ $banner->size }} ან მისი პარალელური" class="ion-help-circled"></i>
        <label class="" for="image">სურათი {{ $banner->size }}</label>
        <input type="file" name="image" multiple required>
        <br><br>
        @if ( $banner->id < 5 )
        <label class="" for="url">Url</label> <i title="გადმოაკოპირეთ იმ გვერდის სრული ბმული რომელზეც &#013;მოცემული ბანერიდან გადამისამართება მოხდება" class="ion-help-circled"></i>
        <input class="form-control" type="text" name="url" required>
        <br>
        @endif
        @if ( $banner->id === 1 OR $banner->id === 2 )
        <label class="" for="header_small">პატარა სათაური</label>
        <input class="form-control" type="text" name="header_small" placeholder="current value: {{ $banner->slider_title_small }}" required>
        <br>
        <label class="" for="header_big">დიდი სათაური</label>
        <input class="form-control" type="text" name="header_big" placeholder="current value: {{ $banner->slider_title_bold }}" required>
        <br>
        <label class="" for="slider_button_title">ღილაკის ტექსტი</label>
        <input class="form-control" type="text" name="slider_button_title" placeholder="current value: {{ $banner->slider_button_title }}" required>

        <br>
        @endif
        <button class="btn btn-primary" type="submit">შეცვლა</button>

    </form>
</div>
@endsection
