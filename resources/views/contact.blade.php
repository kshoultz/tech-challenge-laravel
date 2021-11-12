<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta 
            name="viewport" 
            content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Midwestern Interactive</title>

        <!-- Import fonts: -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">

        <!-- Import External Stylesheets -->
        <link rel="stylesheet" href="/css/app.css" />
        
        <!-- Import External Javascript: -->
        <script src="js/main.js"></script>

    </head>
    <body class="mwi-split-layout">
        <div class="mwi-full-layout mwi-split-dark-container">
            <div class="mwi-full-content mwi-dark-content">
                <header>
                    <img src="images/Logo.png" class="mwi-logo" alt="Midwestern Interactive" />
                    <div class="mwi-navigation" >
                        <a href="/" class="mwi-navigation-condensed">home</a>
                    </div>
                </header>
                <div class="mwi-copy-section">
                    <h1 class="mwi-conditional-space">
                        <span class="mwi-underline">Heading</span> One
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do dos eiusmod tempor incididunt ut labore et trace 
                        dolore magna aliqua.
                    </p>
                    <p>
                        Proin sagittis nisl rhoncus mattis rhoncus. at augue eget
                        arcu dictum varius duis at consectetur lorem. 
                    </p>
                </div>
            </div>
        </div>
            
        <div class="mwi-split-light-container">
            <div class="mwi-light-content">
                <header class="mwi-navigation-expanded">
                    <span></span>
                    <div class="mwi-navigation">
                        <a href="/">home</a>
                    </div>
                </header>
                <form class="mwi-form">
                    <h2>Heading Two</h2>
                    <div class="mwi-fields-container">
                        <input placeholder="First Name" />
                        <input placeholder="Last Name" />
                        <input placeholder="Title" />
                        <input placeholder="Email" required="required" />
                        <textarea placeholder="Message"></textarea>
                    </div>
                    <div class="mwi-toolbar">
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
            
        </body>
    </body>
</html>