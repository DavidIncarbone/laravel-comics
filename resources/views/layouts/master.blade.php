<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>

    @vite("resources/sass/app.scss","resources/js/app.js")

</head>
<body>

      
     @include("partials.header")

     {{-- Contenuto della pagina --}}

     @yield("contenuto")

     
    
    @include("partials.footer")
    
</body>
</html>