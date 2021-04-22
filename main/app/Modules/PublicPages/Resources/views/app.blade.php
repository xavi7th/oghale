<!DOCTYPE html>
<html>

<head>
	<title>{{ $title ?? ''}} | {{config('app.name') }}</title>

	<meta charset="utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=yes">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="{{$metaDesc ?? 'Sales of phones etc '}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="{{ $ogUrl ?? rescue(fn() => route('app.home')) }}" />
	<meta property="og:title" content="{{ $title ?? ''}} | {{config('app.name') }}" />
	<meta property="og:description" content="{{$metaDesc ?? 'Sales of phones etc '}}" />
	<meta property="og:image" content="{{ asset($ogImg ?? '/img/diamondoffshoreelectricals-logo.png') }}" />

	@routes('public')

	<link rel="canonical" href="{{ $canonical ?? rescue(fn() => route('app.home'))}}" />
	<link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i">

	{{-- stylesheet links --}}
	<link rel="stylesheet" href="/fonts/web-fonts-with-css/css/fontawesome-all.min.css">

</head>

<body>
	@inertia
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>

	<script src="{{ mix('js/public-vendor.js') }}" async></script>
	<script src="{{ mix('js/manifest.js') }}" defer></script>
	<script src="{{ mix('js/vendor.js') }}" defer></script>
	<script src="{{ mix('js/app.js') }}" defer></script>
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">


</body>

</html>
