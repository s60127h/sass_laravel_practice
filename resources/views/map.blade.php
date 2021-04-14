@extends('layout')
@extends('navbar')

@section('title')
    電子地圖
@stop

@section('content')
    這裡要放leaflet
    https://leafletjs.com/download.html
@stop

<div id="map">
    <app></app>
</div>

<script src="{{ mix('js/app.js') }}"></script>
