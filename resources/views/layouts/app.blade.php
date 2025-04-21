<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking System</title>
   
</head>
<body>
    <div class="container mx-auto p-4">
        <header>
            <nav>
                <a href="{{ route('patients.index') }}" class="text-blue-500">Patients</a> |
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

            </nav>
        </header>

        <main>
        @yield('content')

        </main>
    </div>
</body>
</html>
