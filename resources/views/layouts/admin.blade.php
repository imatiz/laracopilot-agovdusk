<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
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
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="bg-white w-64 flex-shrink-0 border-r border-gray-200 hidden md:block">
            <div class="p-6">
                <a href="#" class="flex items-center">
                    <img src="https://via.placeholder.com/40x40" alt="Logo" class="h-10 w-10 rounded-full">
                    <span class="ml-3 text-xl font-bold text-gray-900">PM Admin</span>
                </a>
            </div>
            <nav class="mt-6 px-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100' : '' }}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-project-diagram mr-3"></i>
                    <span>Projects</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-tasks mr-3"></i>
                    <span>Tasks</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-users mr-3"></i>
                    <span>Team</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span>Reports</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-cog mr-3"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b border-gray-200">
                <div class="flex justify-between items-center px-6 py-4">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none md:hidden" id="mobile-menu-button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <h1 class="text-xl font-semibold text-gray-900 ml-4">@yield('page-title', 'Dashboard')</h1>
                    </div>
                    <div class="flex items-center">
                        <a href="/" class="text-gray-500 hover:text-gray-700 mr-4">
                            <i class="fas fa-globe"></i>
                            <span class="ml-1">View Website</span>
                        </a>
                        <button class="p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none">
                            <span class="sr-only">View notifications</span>
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="ml-3 relative">
                            <button class="flex text-sm rounded-full focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="https://via.placeholder.com/32x32" alt="User">
                            </button>
                            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden" id="user-menu" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                <div class="py-1" role="none">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                                    <form method="POST" action="{{ route('admin.logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden fixed inset-0 z-50 bg-gray-800 bg-opacity-75 hidden" id="mobile-menu">
        <div class="fixed inset-y-0 left-0 w-64 bg-white shadow-lg transform transition-transform duration-300 ease-in-out" id="mobile-menu-content">
            <div class="p-6">
                <a href="#" class="flex items-center">
                    <img src="https://via.placeholder.com/40x40" alt="Logo" class="h-10 w-10 rounded-full">
                    <span class="ml-3 text-xl font-bold text-gray-900">PM Admin</span>
                </a>
            </div>
            <nav class="mt-6 px-4">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100' : '' }}">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-project-diagram mr-3"></i>
                    <span>Projects</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-tasks mr-3"></i>
                    <span>Tasks</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-users mr-3"></i>
                    <span>Team</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-chart-bar mr-3"></i>
                    <span>Reports</span>
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 rounded-lg hover:bg-gray-100 mt-1">
                    <i class="fas fa-cog mr-3"></i>
                    <span>Settings</span>
                </a>
            </nav>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-button').click(function() {
                $('#mobile-menu').toggleClass('hidden');
                $('#mobile-menu-content').toggleClass('translate-x-0').toggleClass('-translate-x-full');
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

            // Close mobile menu when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('#mobile-menu-button').length && !$(e.target).closest('#mobile-menu-content').length) {
                    $('#mobile-menu').addClass('hidden');
                    $('#mobile-menu-content').addClass('-translate-x-full').removeClass('translate-x-0');
                }
            });
        });
    </script>
</body>
</html>