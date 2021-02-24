<html>
<body>
<h1>Hello, {{ $user }}</h1>
        @foreach ($users as $user)
            <p>This is user {{ $user->id }}</p>
        @endforeach
</body>
</html>