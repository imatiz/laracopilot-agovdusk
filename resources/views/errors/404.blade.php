@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 text-center">
        <div>
            <h1 class="text-9xl font-extrabold text-primary">404</h1>
            <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                Page Not Found
            </h2>
            <p class="mt-2 text-sm text-gray-600">
                Sorry, we couldn't find the page you're looking for.
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
                Or try searching for something else:
            </p>
            <div class="mt-2 flex justify-center">
                <input type="text" class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Search...">
            </div>
        </div>
    </div>
</div>
@endsection