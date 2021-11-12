<!DOCTYPE html>
<html>
    @include('header')
    <div>
        <div class="mwi-full-layout">
            <div class="mwi-full-content"mwi-full-width-content>
                <header>
                    <img src="images/Logo.png" class="mwi-logo" alt="Midwestern Interactive" />
                    <div class="mwi-navigation">
                        <a href="/contact">contact</a>
                    </div>
                </header>
                <div class="mwi-card-layout">
                    <div class="mwi-card">
                        <div class="mwi-card-icon">
                            <img src="images/Talkie.png" alt="Talkie Image" />
                        </div>
                        <h2>Heading Two</h2>
                        <p>Integer accumsan molestle nisl, id faucibus urna accumnsan quis. Proin vulputate, mauris semper maximus.</p>
                        <div class="mwi-toolbar"><a href="#" class="mwi-toolbar-link">Learn More</a></div>
                    </div>
                    <div class="mwi-card">
                        <div class="mwi-card-icon">
                            <img src="images/Rabbit.png" alt="Rabbit Image" />
                        </div>
                        <h2>Heading Two</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <div class="mwi-toolbar"><a href="#" class="mwi-toolbar-link">Learn More</a></div>
                    </div>
                    <div class="mwi-card">
                        <div class="mwi-card-icon">
                            <img src="images/Shield.png" alt="Shield Image" />
                        </div>
                        <h2>Heading Two</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                        <div class="mwi-toolbar"><a href="#" class="mwi-toolbar-link">Learn More</a></div>
                    </div>
                </div>
                <div class="mwi-copy-section">
                    <h1><span class="mwi-underline">Heading</span> One</h1>
                        <p>
                            Remove the duplicates in 2 Javascript objects and output the list of distinct names in an unordered list when <a href="#mwi-bottom" onclick="mwi.generateCandidatesList();">this link</a> is clicked. 
                        </p>
                        <p>
                            If the operation completed already, notify the user that this has already been done.
                        </p>
                    </div>
                    <ul id="mwi-list"></ul>
                </div>
            </div>
        </div>
        <a name="mwi-bottom"></a>
    </body>
</html>