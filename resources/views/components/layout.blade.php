<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MeroJobSathi</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap');
</style>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href=" ">
                    <img src="{{ Vite::asset('resources/images/MerojobSathi.png') }}" width="150" alt="">
                </a>
            </div>
            <div class="space-x-6">
                <a href="/">Jobs</a>
                <a href="/">Careers</a>
                <a href="/">Salaries</a>
                <a href="/">Companies</a>
            </div>
            @auth
            <div class="flex space-x-6 font-bold">
                <a href="/jobs/create">Post a Job</a>
                <form method="POST" action="/logout">
                    @csrf
                    @method('DELETE')
                    <button>Log Out</button>
                </form>
            </div>
            @endauth
            @guest
            <div class="space-x-6">
                <a href="/register">Sign Up</a>
                <a href="/login">Log In</a>
            </div>

            @endguest
        </nav>

        <main class="max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
