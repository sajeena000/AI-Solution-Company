@extends('admin.layouts.main')

@section('content')

 <!-- Table Start -->
 <div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h2 class="mb-4">Feedback Details</h2>
{{-- <div class="container">
    <h1>Feedback Details</h1> --}}
    <p><strong>Name:</strong> {{ $feedback->name }}</p>
    <p><strong>Email:</strong> {{ $feedback->email }}</p>
    <p><strong>Rating:</strong> {{ $feedback->rating }}</p>
    <p><strong>Message:</strong> {{ $feedback->message }}</p>
    <a href="{{ route('admin.feedback.index') }}" class="btn btn-secondary">Back to List</a>
</div>
@endsection
