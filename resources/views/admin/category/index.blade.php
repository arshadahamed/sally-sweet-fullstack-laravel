@extends('layouts.admin')

@section('content')

{{-- @if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif --}}

<div>
    <livewire:admin.category.index/>
</div>
@endsection
