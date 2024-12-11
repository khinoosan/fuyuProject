<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>documents</title>
</head>
<body>

    <nav>
        <ul>
            <li><a href="{{ route('rooms.index')}}">Rooms</a></li>
            <li><a href="{{ route('bookings.index')}}">Booking</a>s</li>
            <li><a href="{{ route('customers.index')}}">Customer</a>s</li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>

</body>
</html>
