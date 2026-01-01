<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Project Management Tool')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        accent: '#F59E0B',
                        dark: '#1F2937',
                        light: '#F9FAFB',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
                <div class="flex items-center">
                    <img src="https://via.placeholder.com/40x40" alt="Logo" class="h-10 w-10 rounded-full">
                    <span class="ml-3 text-xl font-bold text-gray-900">PM Tool</span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-900 hover:text-primary px-3 py-2 font-medium">Dashboard</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 font-medium">Projects</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 font-medium">Tasks</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 font-medium">Team</a>
                    <a href="#" class="text-gray-500 hover:text-primary px-3 py-2 font-medium">Reports</a>
                </nav>
                <div class="flex items-center">
                    <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                        <span class="sr-only">View notifications</span>
                        <i class="fas fa-bell"></i>
                    </button>
                    <div class="ml-3 relative">
                        <button class="flex text-sm rounded-full focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/32x32" alt="User">
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Company Info</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-gray-500 hover:text-primary">About Us</a></li>
                            <li><a href="#" class="text-gray-500 hover:text-primary">Careers</a></li>
                            <li><a href="#" class="text-gray-500 hover:text-primary">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Quick Links</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-gray-500 hover:text-primary">Dashboard</a></li>
                            <li><a href="#" class="text-gray-500 hover:text-primary">Projects</a></li>
                            <li><a href="#" class="text-gray-500 hover:text-primary">Tasks</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Services</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-gray-500 hover:text-primary">Project Management</a></li>
                            <li><a href="#" class="text-gray-500 hover:text-primary">Task Tracking</a></li>
                            <li><a href="#" class="text-gray-500 hover:text-primary">Team Collaboration</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-900">Contact</h3>
                        <ul class="mt-4 space-y-4">
                            <li class="text-gray-500">123 PM Street</li>
                            <li class="text-gray-500">info@pmtool.com</li>
                            <li class="text-gray-500">(123) 456-7890</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
                    <p class="text-gray-400 text-sm">© {{ date('Y') }} Project Management Tool. All rights reserved.</p>
                    <p class="text-gray-400 text-sm mt-4 md:mt-0">Made with ❤️ by LaraCopilot</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="bg-primary text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="#" class="text-gray-500 hover:bg-gray-50 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="#" class="text-gray-500 hover:bg-gray-50 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Tasks</a>
            <a href="#" class="text-gray-500 hover:bg-gray-50 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Team</a>
            <a href="#" class="text-gray-500 hover:bg-gray-50 hover:text-primary block px-3 py-2 rounded-md text-base font-medium">Reports</a>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-button').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });

            // User menu toggle
            $('#user-menu-button').click(function() {
                $('#user-menu').toggleClass('hidden');
            });

            // Close dropdowns when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('#user-menu-button').length && !$(e.target).closest('#user-menu').length) {
                    $('#user-menu').addClass('hidden');
                }
            });
        });
    </script>
</body>
</html>