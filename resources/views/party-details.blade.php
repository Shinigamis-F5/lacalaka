@extends('layouts.layout')
@section('content')
<div class="bg-gray-800 pb-5 h-screen">
    @livewire('visitor-party-details', ['party' => $party])
</div>
@endsection