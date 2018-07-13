@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'public_location' => asset("/"),
    'githubAuth' => config('services.github.client_id'),

    'salary_ranges'=> [
      "less than or Php 9,000",
      "Php 10,000 ~ Php 14,999",
      "Php 15,000 ~ Php 19,999",
      "Php 20,000 ~ Php 24,999",
      "Php 25,000 ~ Php 29,999",
      "Php 30,000 ~ Php 39,999",
      "Php 40,000 ~ Php 49,999",
      "Php 50,000 ~ Php 70,999",
      "Php 70,000 ~ Php 99,999",
      "Php 100,000 and above",
      ],

    'work_experiences'=> [
      "No Experience",
      "Less or 1 yr. Experience",
      "2 to 4 yrs.",
      "5+ yrs."
      ],

      'programming_languages' => \App\ProgrammingLanguage::all(),

      'technologies' => \App\Technology::all()
];

$polyfills = [
    'Promise',
    'Object.assign',
    'Object.values',
    'Array.prototype.find',
    'Array.prototype.findIndex',
    'Array.prototype.includes',
    'String.prototype.includes',
    'String.prototype.startsWith',
    'String.prototype.endsWith',
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

</head>
<body>
  <div id="app"></div>

  {{-- Global configuration object --}}
  <script>window.config = @json($config);</script>

  {{-- Polyfill JS features via polyfill.io --}}
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features={{ implode(',', $polyfills) }}"></script>

  {{-- Load the application scripts --}}
  @if (app()->isLocal())
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  @else
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    
    <script src="{{ asset('js/material-dashboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/bootstrap-notify.js')}}"></script>
    <script src="{{ asset('js/plugins/chartist.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
 
  @endif
</body>
</html>