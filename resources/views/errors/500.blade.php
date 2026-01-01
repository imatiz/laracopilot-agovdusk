@extends('layouts.app')

@section('title', 'Server Error')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 text-center">
        <div>
            <h1 class="text-9xl font-extrabold text-red-600">500</h1>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                Server Error
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                We're sorry, but something went wrong on our end. Please try again later.
            </p>
        </div>

        <div class="mt-8">
            <a href="/" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                <i class="fas fa-arrow-left mr-2"></i>
                Back to Home
            </a>
        </div>

        <div class="mt-6">
            <p class="text-sm text-gray-500">
                If the problem persists, please contact our support team.
            </p>
        </div>
    </div>
</div>
@endsection