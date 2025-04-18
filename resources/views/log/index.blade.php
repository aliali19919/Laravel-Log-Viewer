<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logs {{ $totalLogs }}</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('layout.header')
    <a class="btn btn-ghost font-mono text-2xl p-[30px] cursor-text"> Total Logs: {{ $totalLogs }}</a>
    <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100">
        <table class="table table-zebra">

            <thead>
                <tr class="font-serif text-3xl">
                    {{-- <th>ID</th> --}}
                    <th>Level Name</th>
                    <th>Level</th>
                    <th>Context</th>
                    <th>Message</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($logs as $log)
                    <tr class="font-mono text-xl">

                        <td>{{ $log->level }}</td>
                        <td>{{ $log->levelNum }}</td>
                        <td>{{ $log->context }}</td>
                        <td>{{ $log->message }}</td>
                        <td>
                            <div class="flex gap-[20px] ">
                                <a href="{{ route('logs.show', $log->id) }}"
                                    class="btn btn-info text-2xl text-white transition-all duration-200 hover:scale-110">Details</a>
                                <form action="{{ route('logs.destroy', $log->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" value="Delete"
                                        class="btn btn-error text-2xl text-white transition-all duration-200 hover:scale-110">

                                </form>
                            </div>
                        </td>
                @endforeach
                </tr>
            </tbody>
        </table>
        <div class="my-[20px] p-[60px]">
            {{ $logs->links() }}
        </div>

    </div>
    @include('layout.footer')
</body>

</html>
