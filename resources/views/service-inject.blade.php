<html>
    <body>
        @inject('service', 'App\Services\SayHello')

        <h3>{{ $service->sayHello($name) }}</h3>
    </body>
</html>