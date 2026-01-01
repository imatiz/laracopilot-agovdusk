@extends('layouts.app')

@section('title', 'Project Management Tool')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">
            Manage Your Projects <br class="hidden sm:block">Efficiently
        </h1>
        <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">
            Streamline your workflow with our powerful project management tool. Track progress, collaborate with your team, and achieve your goals faster.
        </p>
        <div class="mt-8 flex justify-center">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary hover:bg-indigo-700">
                Get Started
            </a>
            <a href="#" class="ml-4 inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                Learn More
            </a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Key Features</h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                Everything you need to manage your projects effectively
            </p>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Feature 1 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900">Project Tracking</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Create and manage projects with ease. Set deadlines, assign team members, and track progress.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-secondary text-white">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900">Task Management</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Break down projects into tasks, assign them to team members, and track their completion.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-accent text-white">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="mt-4">
                        <h3 class="text-lg font-medium text-gray-900">Team Collaboration</h3>
                        <p class="mt-2 text-base text-gray-500">
                            Work together with your team in real-time. Comment on tasks, share files, and stay updated.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="mb-16 bg-white rounded-lg shadow overflow-hidden">
        <div class="px-4 py-5 sm:p-6">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900">About Our Tool</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                    We created this tool to help teams work more efficiently and achieve their goals
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <img src="https://via.placeholder.com/600x400" alt="About Us" class="rounded-lg shadow-md">
                </div>
                <div>
                    <p class="text-lg text-gray-600 mb-4">
                        Our project management tool is designed to help teams of all sizes manage their projects effectively. With our intuitive interface and powerful features, you can track progress, collaborate with your team, and achieve your goals faster.
                    </p>
                    <p class="text-lg text-gray-600">
                        Whether you're managing a small project or a large enterprise initiative, our tool provides the tools you need to stay organized and on track. Try it today and see the difference it can make in your workflow.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="mb-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">What Our Users Say</h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-gray-500">
                See how our tool has helped teams around the world
            </p>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <!-- Testimonial 1 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/48x48" alt="User">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Sarah Johnson</h3>
                            <p class="text-sm text-gray-500">Project Manager, TechCorp</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-base text-gray-500">
                            "This tool has completely transformed how we manage our projects. The task tracking and team collaboration features are amazing."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/48x48" alt="User">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Michael Chen</h3>
                            <p class="text-sm text-gray-500">CTO, Innovate Inc</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-base text-gray-500">
                            "The reporting features have given us valuable insights into our project performance. Highly recommended for any team."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="p-6">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://via.placeholder.com/48x48" alt="User">
                        <div class="ml-4">
                            <h3 class="text-lg font-medium text-gray-900">Emily Rodriguez</h3>
                            <p class="text-sm text-gray-500">Product Manager, Global Solutions</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-base text-gray-500">
                            "As a remote team, this tool has been essential for keeping everyone on the same page and meeting deadlines."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary rounded-lg shadow overflow-hidden">
        <div class="px-4 py-5 sm:p-6 text-center">
            <h2 class="text-3xl font-bold text-white">Ready to Get Started?</h2>
            <p class="mt-4 max-w-2xl mx-auto text-xl text-indigo-100">
                Join thousands of teams using our project management tool to stay organized and productive.
            </p>
            <div class="mt-8 flex justify-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-primary bg-white hover:bg-gray-50">
                    Sign Up Now
                </a>
            </div>
        </div>
    </div>
</div>
@endsection