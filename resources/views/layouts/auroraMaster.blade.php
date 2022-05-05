<!DOCTYPE html>
<html>
<head>
    <title> My Hello </title></head>
<body>
<nav>
    @yield("navigation-bar")
    <br /> <img src='http://www.aurora.edu/images/common/au_primary_mobile.png' />
        <section>
            <h2>Content Here</h2>
            @yield("content")
        </section>
    <footer>
        <hr /> <span style="size:10px">
    AU All rights reserved
    </span>
    </footer>
    </nav>
    </body>
 </html>
