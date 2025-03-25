<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Details</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="max-w-md mx-auto mt-[300px]">
        <div
            class="card shadow-lg bg-base-100 hover:scale-[1.02] hover:shadow-xl transition-transform duration-300 ease-in-out">
            <div class="card-body space-y-[50px]">
                <h2 class="card-title text-primary text-4xl font-serif">Level: {{ $log->level }}</h2>
                <p class="text-xl font-mono text-base-content ">💬 {{ $log->message }}</p>
                <div class="text-right text-xl font-mono text-base-content">🗓️ {{ $log->created_at }}</div>
                <a href="{{ route('logs.index') }}"
                    class="btn btn-primary text-2xl text-white transition-all duration-200 hover:scale-110"> Back To
                    Logs</a>
            </div>
        </div>
    </div>
</body>

</html>
