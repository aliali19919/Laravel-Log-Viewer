<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('layout.header')
    <div class="max-w-xl mx-auto my-[300px]">
        <div class="card shadow-xl bg-base-100 animate-fade-in-up">
            <div class="card-body text-center">
                <h1 class="text-4xl font-bold text-primary my-[20px]">Welcome to Ali's LogViewer</h1>
                <p class="text-base-content text-2xl font-mono">
                    A simple way to explore logs from all your apps in one place.
                </p>
                <a href="{{ route('logs.index') }}"
                    class="btn btn-primary my-[20px] text-xl mx-auto hover:scale-105 transition-transform duration-300">View
                    Logs</a>
            </div>
        </div>
    </div>
    </div>
    @include('layout.footer')
</body>

</html>
