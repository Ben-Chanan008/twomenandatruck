<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide.min.css" integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="{{ asset('message-alerts/src/css/style.css') }}">
	<script src="{{ asset('message-alerts/src/main.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<title>{{ $page }} | Two Men and A Truck</title>
    @vite('resources/css/app.css')
	@stack('styles')
</head>

<body class="relative">
	{{ $slot }}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js" integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
	@stack('scripts')
</body>

</html>
