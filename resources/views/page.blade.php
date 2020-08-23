@extends('layouts.pagelayout')


@section('title', 'Livewire Test')


@push('after-style')

@endpush


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-header">Contact Information</div>
                <div class="card-body mt-1">
                    <livewire:contact-index></livewire:contact-index>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('after-script')

@endpush