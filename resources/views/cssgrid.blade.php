<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSS GRID</title>
    <style>
        * {
            margin:0;
            padding:0;
        }
        html, *::after, *::before {
            box-sizing: border-box;
        }

        body {
            box-sizing: border-box;
            color:#333;
            font:0.956rem/1.5 Arial, Helvetica, Verdana, sans-serif;
        }

        .grid-container {
            display: grid;
            max-width:95%;
            margin:0 auto;
            grid-template-columns: repeat(9,1fr);
            grid-gap:5px;
        }

        .grid-container > .grid-item {
            padding:20px;
        }
        .grid-item {
            background-color:aqua;
        }

        .grid-container .grid-item:nth-child(even) {
            background-color:cornflowerblue;
        }

        @media only screen and ( min-width:100px ) {
            .grid-container {
                grid-template-columns: 1fr ;
            }
        }

        @media only screen and ( min-width:720px ) {
            .grid-container {
                grid-template-columns: repeat(4, 1fr) ;
            }
        }

        @media only screen and ( min-width:996px ) {
            .grid-container {
                grid-template-columns: repeat(9, 1fr) ;
            }
        }

    </style>
</head>
<body>

    <div class="grid-container">
        <div class="grid-item">Box 1</div>
        <div class="grid-item">Box 2</div>
        <div class="grid-item">Box 3</div>
        <div class="grid-item">Box 4</div>
        <div class="grid-item">Box 5</div>
        <div class="grid-item">Box 6</div>
        <div class="grid-item">Box 7</div>
        <div class="grid-item">Box 8</div>
        <div class="grid-item">Box 9</div>
    </div>
    
</body>
</html>