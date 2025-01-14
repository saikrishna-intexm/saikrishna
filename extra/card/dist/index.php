<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ScratchCard 2</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Welcome to ScratchCard 2</h1>
    </header>
    
    <p>This is a fun scratch card game where you can reveal hidden content by scratching the card. Try it out now!</p>

    <div id="js--sc--container"></div>

    <!-- Scripts -->
    <script src="../build/scratchcard.min.js"></script>
    <script type="text/javascript">
        window.addEventListener('load', function () {
          var scContainer = document.getElementById('js--sc--container');
          var sc = new ScratchCard('#js--sc--container', {
            enabledPercentUpdate: true,
            scratchType: SCRATCH_TYPE.LINE,
            // brushSrc: './images/brush.png',
            containerWidth: scContainer.offsetWidth,
            containerHeight: 300,
            imageForwardSrc: './images/scratchcard.png',
            imageBackgroundSrc: '',
            htmlBackground: '<p class="test"><strong>Hello i am HTML content !</strong></p>',
            clearZoneRadius: 30,
            percentToFinish: 50, // When the percent exceeds 50 on touchend event the callback will be exec.
            nPoints: 30,
            pointSize: 4,
            callback: function () {
              alert('Now the window will reload !');
              window.location.reload();
            }
          })
          sc.init();
        });
    </script>
    
</body>
</html>
