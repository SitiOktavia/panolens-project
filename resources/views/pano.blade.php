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
</head>
<body>
    <div style="position:fixed; padding:10px; z-index:9">
        <img src="{{ asset('img/logo-trans.png') }}" style="max-width:100px; max-height: 120px;">
    </div>
    <div class="pano-image" style="width: 100%; height: 600px;"></div>;
    
</body>
</html>