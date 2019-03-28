<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./semantic/semantic.css">
    <link rel="stylesheet" href="./style.css">
    <script src="./semantic/semantic.js"></script>
    <script src="./js/script.js"></script>
   
    <title>Document</title>
</head>

<body>
    <div class="ui grid">
        <div class="computer only row">
            <div class="column">
                <div class="ui top fixed menu">
                    <div class="borderless item">
                        <a href="index.html"><img class="logo" src="/images/logotext.png"></a>
                    </div>
                    <div class="right menu">
                        <a class="item">Technology</a>
                        <a class="item">Products</a>
                        <a class="item">Antennas</a>
                        <a class="item">Company</a>
                        <a class="item">Press</a>
                        <a class="item">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="tablet mobile only row">
            <div class="column">
                <div class="ui fixed menu">
                    <a id="mobile_item" class="item"><i class="bars icon"></i></a>
                    <div class="borderless right item">
                        <a href="index.html"><img class="logo" src="/images/logotext.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui pushable segment">
        <div class="ui sidebar vertical menu david">
            <div class="placeholder" style="height: 4em;"></div>
            <a class="item">Menu Item A</a>
            <a class="item">Menu Item B</a>
            <a class="item">Menu Item C</a>
            <a class="item">Menu Item D</a>
        </div>
        <div class="pusher">
            <div class="placeholder" style="height: 3.8em;"></div>
            <div class="ui fluid intro-container">
                
            </div>
            <div id="content" class="ui segment">
            
            </div>
        </div>
    </div>
      

    <div class="wrapper-for-site">
        <div class="container-for-first-picture"> 

        </div>
    </div>
    
</body>
</html>