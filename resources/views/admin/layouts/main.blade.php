<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<!--begin::Head-->
	<head>
		
		<title>@yield('title')</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{ config('app.ico') }}" />
		
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/admin') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/admin') }}/css/custom.css" rel="stylesheet" type="text/css" />

		@livewireStyles
	</head>
	
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				
				@include('admin.layouts.side-left')

				@include('admin.layouts.side-right')

			</div>
		</div>
		
		@include('admin.layouts.scroll-top')
	
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/admin') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('assets/admin') }}/js/scripts.bundle.js"></script>
		
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/admin') }}/js/custom/widgets.js"></script>
		
		@livewireScripts

		<script type="module" src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
		<script nomodule src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine-ie11.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

		<x-livewire-alert::scripts />

		@yield('footer')
		@stack('footer')
	</body>
</html>