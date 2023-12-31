@extends('layout')
@section('content')
    <div class="flex items-center justify-between">
        <h1 class="text-2xl text-blue-800 font-bold m-3">Your Droplets</h1>
        <a class="p-3 pt-1 font-bold text-2xl border text-white bg-blue-800 leading-6 mr-3" href="/add"> + </a>
    </div>
    <livewire:droplet-list>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl text-blue-800 font-bold m-3">Your Netlify Sites</h1>
        <livewire:make-netlify-site/>
    </div>
    <livewire:netlify-list>
    <div class="flex items-center justify-between">
        <h1 class="text-2xl text-blue-800 font-bold m-3">Your Vercel Sites</h1>
        <livewire:make-vercel-site/>
    </div>
    <livewire:vercel-site-list>
@endsection