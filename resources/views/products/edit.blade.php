<html>
<body>
    @php
    $routeVariable = 'store'; // Define la variable que necesitas
    @endphp
    @include('includes.formprod', ['routeVariable' => $routeVariable])
</body>
</html>