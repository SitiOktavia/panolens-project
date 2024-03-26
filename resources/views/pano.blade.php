<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Tour 360degree View</title>
    <title>My first three.js app</title>
    <style>
        body { margin: 0; }
    </style>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/three.js/105/three.min.js') }}"></script>
    <script src="{{ asset('js/panolens.min.js') }}"></script>
    @vite( 'resources/js/app.js' )
    @vite( 'resources/css/app.css' )
</head>
<body>
    <div class="pano-container justify-center p-[40px]">

        <div class="fixed py-[10px] px-[20px]">
            <img class="max-w-[100px] max-h-[120px]" src="{{ asset('img/logo-trans.png') }}">
        </div>

        <div class="pano-image w-full h-[600px]"></div>;

    </div>
</body>
</html>