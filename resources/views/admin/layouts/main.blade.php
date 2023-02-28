<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">
    <link href="{{ asset('dashboard_css/style.css') }}" rel="stylesheet">
	<title>Admin</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
                <section class="my-4">
                    @yield('admin')
                </section>
            </main>
        </div>
    </div>

    <script src="{{ asset('../dashboard_js/script.js') }}"></script>
</body>
</html>