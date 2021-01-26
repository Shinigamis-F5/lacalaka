@extends('layouts.layout')
@section('content')
<div class="bg-gray-800 pb-5">
    @livewire('visitor-party-details', ['party' => $party])
</div>
@endsection