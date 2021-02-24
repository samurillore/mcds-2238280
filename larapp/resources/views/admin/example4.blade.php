<html>
<body>
<h1>Hello, {{ $i }}</h1>
    @switch($i)
            @case(1)
                <h1>Este es el caso 1, el valor fue {{ $i }}</h1>
                @break

            @case(2)
            <h1>Este es el caso 2, el valor fue {{ $i }}<</h1>
                @break

            @default
                <h1>Este es el caso por defecto, el valor fue {{ $i }}</h1>
        @endswitch


        @for ($j = $i; $j < $i+10; $j++)
            The current value is {{ $j }}</br>
        @endfor

</body>
</html>