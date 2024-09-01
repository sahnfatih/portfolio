@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h2 class="text-2xl">Heading</h2>
        <p class="text-gray-600">Subheading</p>
    </div>

    <!-- Cards Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <!-- Experience Card -->
        <a href="/experience" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-bold mb-2">Experience</h3>
            <p>Body text for experience section.</p>
        </a>
        <!-- Education Card -->
        <a href="/education" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-bold mb-2">Education</h3>
            <p>Body text for education section.</p>
        </a>
        <!-- Projects Card -->
        <a href="/projects" class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-md text-center">
            <h3 class="text-lg font-bold mb-2">Projects</h3>
            <p>Body text for projects section.</p>
        </a>
    </div>
@endsection
