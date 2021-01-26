@extends('layouts.layout')
@section('content')
<div class="mx-auto container xl:px-0 px-4 py-16">
    @livewire('visitor-party-details', ['party' => $party])
</div>
@endsection