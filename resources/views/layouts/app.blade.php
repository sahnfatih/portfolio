<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatih ŞAHİN Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.5.2/cdn.js"></script>
    <script defer src="{{ asset('js/darkmode.js') }}"></script>
</head>
<body x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
      x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
      :class="{ 'dark': darkMode }"
      class="transition-all duration-300">
    <!-- Header -->
    <header class="bg-gray-100 dark:bg-gray-800 p-6 flex justify-between items-center shadow-lg">
        <h1 class="text-3xl font-bold dark:text-white">Fatih ŞAHİN</h1>
        <div class="flex items-center">
            <!-- Dark Mode Button -->
            <button @click="darkMode = !darkMode" class="p-2 rounded bg-gray-300 dark:bg-gray-600 text-gray-800 dark:text-gray-200">
                <span x-text="darkMode ? 'Light Mode' : 'Dark Mode'"></span>
            </button>
        </div>
    </header>

    <!-- Main Section -->
    <main class="container mx-auto my-8 p-4 text-center">
        <img src="{{ asset('images/profile.jpg') }}" alt="Fatih ŞAHİN" class="mx-auto rounded-full w-32 h-32 object-cover">
        <h2 class="text-4xl font-semibold mt-4">Welcome to My Portfolio</h2>
        <p class="text-gray-600">Discover my experience, education, and projects.</p>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <!-- Experience Card -->
            <a href="/experience" class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-bold mb-2 dark:text-white">Experience</h3>
                <p class="text-gray-600 dark:text-gray-400">Learn more about my professional experience.</p>
            </a>
            <!-- Education Card -->
            <a href="/education" class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-bold mb-2 dark:text-white">Education</h3>
                <p class="text-gray-600 dark:text-gray-400">Explore my academic background.</p>
            </a>
            <!-- Projects Card -->
            <a href="/projects" class="bg-white dark:bg-gray-700 p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                <h3 class="text-xl font-bold mb-2 dark:text-white">Projects</h3>
                <p class="text-gray-600 dark:text-gray-400">See my completed projects.</p>
            </a>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-100 dark:bg-gray-800 py-8 mt-16">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex space-x-4">
                <a href="https://www.instagram.com/fatihsahinhere" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://www.linkedin.com/in/yourusername" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-300">
                    <i class="fab fa-linkedin fa-lg"></i>
                </a>
                <a href="#" class="text-gray-500 dark:text-gray-400">UI Design</a>
                <a href="#" class="text-gray-500 dark:text-gray-400">UX Design</a>
                <a href="#" class="text-gray-500 dark:text-gray-400">Blog</a>
                <a href="#" class="text-gray-500 dark:text-gray-400">Support</a>
                <!-- Diğer sosyal medya ikonları buraya eklenebilir -->
            </div>

        </div>
    </footer>
</body>
</html>
