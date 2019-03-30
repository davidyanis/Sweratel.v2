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
    <title>Sweratel</title>
</head>

<body>
    <div class="ui grid">
        <div class="computer only row">
            <div class="column">
                <div id="mainNav" class="ui top fixed menu">
                    <div class="borderless item">
                        <a href="index.php"><img class="logo" src="/images/logotext.png"></a>
                    </div>
                    <div class="right menu">
                        <a class="borderless item active" href="#technology">Technology</a>
                        <a href="#products" class="borderless item">Products</a>
                        <a href="#antennas" class="borderless item">Antennas</a>
                        <a href="#company" class="borderless item">Company</a>
                        <a href="#press" class="borderless item">Press</a>
                        <a href="#contact" class="borderless item">Contact</a>
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
            <div class="placeholder" style="height: 5em;"></div>
            <a href="#technology" class="borderless item active">Technology</a>
            <a href="#products" class="borderless item">Products</a>
            <a href="#antennas" class="borderless item">Antennas</a>
            <a href="#company" class="borderless item">Company</a>
            <a href="#press" class="borderless item">Press</a>
            <a href="#contact" class="borderless item">Contact</a>
        </div>
        <div class="pusher">
            <div class="placeholder" style="height: 4.8em;"></div>
            <div id="technology" class="section ui fluid intro-container">
                <h1 class="ui aligned header">Kort text som beskriver företaget..</h1>
            </div>
            <div class="ui black message">
                <p>Sweratel’s website is currently undergoing a major re-work with enhanced graphical design to be released in Q1, 2019.</p>
            </div>
            <div id="products" class="ui center aligned container">
                <h1 class="ui horizontal divider header">
                    Our products
                </h1>
                    <div class="sub header product-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
                
                <button class="ui inverted blue button">Learn more</button>
            </div>
            <div class="ui fluid antenna-container">
                <h1 class="ui grey center aligned header">Antennas</h1>
            </div>

            <div class="ui container">
            <div class="ui stackable three cards">
                <div class="card">
                    <div class="image">
                    <img src="./images/antenna.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Antenna namn</div>
                        <div class="description">
                            Beskrivning..
                        </div>
                    </div>
                    <button class="ui bottom attached inverted blue button">Read more</button>
                </div>
                <div class="card">
                    <div class="image">
                    <img src="./images/antenna.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Antenna namn</div>
                        <div class="description">
                            Beskrivning..
                        </div>
                    </div>
                    <button class="ui bottom attached inverted blue button">Read more</button>
                </div>
                <div class="card">
                    <div class="image">
                    <img src="./images/antenna.jpg">
                    </div>
                    <div class="content">
                        <div class="header">Antenna namn</div>
                        <div class="description">
                            Beskrivning..
                        </div>
                    </div>
                    <button class="ui bottom attached inverted blue button">Read more</button>
                </div>
            </div> 
            </div>
            <div class="ui placeholder"></div>
            <div class="ui inverted segment">
                <h1 class="ui horizontal divider header container">
                    Company
                </h1>
                <div class="sub header product-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
            </div>
            <div class="ui container">
                <h1 class="ui horizontal divider header container">
                    Press release
                </h1>
                <div class="sub header product-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
            </div>
            <footer>
                Contact us
            </footer>
    </div>
    </div>
    
     

    <div class="wrapper-for-site">
        <div class="container-for-first-picture"> 

        </div>
    </div>
    
</body>
</html>