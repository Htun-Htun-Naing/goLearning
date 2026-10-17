<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel')}}</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />

    <!-- TailwindCSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Boxicons Icon Font -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!-- Inter Font Family 400;500;600 Regular;Medium;Semi-bold -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Myanmar Font -->
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
    <!-- site wise styles -->
   {{-- <script src="{{asset('js/dark.js')}}" defer></script> --}}



    <!-- npm install later -->
    <!-- https://github.com/tailwindlabs/tailwindcss-line-clamp -->
    <script>
        // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
        if (
          localStorage.getItem('dark') === 'true' ||
          (!('dark' in localStorage) &&
            window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
          document.documentElement.classList.add('dark');
        } else {
          document.documentElement.classList.remove('dark');
        }
      </script>
</head>

<body class="text-gray-600 font-normal">

{{$slot}}

</body>
</html>
