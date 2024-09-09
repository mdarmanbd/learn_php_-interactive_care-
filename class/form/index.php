<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC Tours & Travels</title>
    <link rel="stylesheet" href="style.css">
    <style>
        html, body, ul, p, div, span, img, form, h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 720px;
            margin: 0 auto;
        }
        h1 {
            padding: .8em 0;
            margin-bottom: .8em;
            border-bottom: 1px solid #dcdcdc;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        textarea {
            display: block;
            width: 100%;
            padding: .5em;
        }
        button[type="submit"] {
            display: block;
            padding: 1em 3em;
            background: rgb(110, 105, 245);
            border: none;
            color: white;
            cursor: pointer;
        }
        .field-title {
            display: block;
            font-weight: bold;
            margin-bottom: .5em;
        }
        textarea {
            min-height: 10vh;
        }
        .field-group {
            display: block;
            margin-bottom: 1.25em;
        }
        ul.errors {
            padding: 1em;
            margin-bottom: 1.25em;
            background:rgba(247, 112, 94, .2);
            border: 1px solid rgba(247, 112, 94, .5);
            list-style-position: inside;
            border-radius: 3px;
        }
        .success {
            padding: 1em;
            margin-bottom: 1.25em;
            background:rgba(143, 247, 94, 0.2);
            border: 1px solid rgba(143, 247, 94, .5);
            border-radius: 3px;
        }
        .success ul {
            list-style-position: inside;
            margin-top: .5em;
        }
        em {
            font-weight: bold;
        }
        .ideas {
            margin: .5em 0;
        }
        .ideas h2 {
            font-size: 1.15em;
        }
        .ideas h3 {
            font-size: 1.125em;
        }
        .ideas ul {
            list-style: none;
            margin: .5em 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            column-gap: 5px;
        }
        .ideas ul li img {
            display: block;
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Find Tours</h1>
        <form action="form.php" method="post">
            <div class="field-group">
                <label for="name" class="field-title">First Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="field-group">
                <label for="email" class="field-title">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter email for contact">
            </div>
            <div class="field-group">
                <label for="region" class="field-title">Where would you like to go?</label>
                <select name="region" id="region">
                    <option value="">--Select a Region--</option>
                    <option value="Asia">Asia</option>
                    <option value="Oceania">Oceania</option>
                    <option value="Africa">Africa</option>
                    <option value="Europe">Europe</option>
                    <option value="North America">North America</option>
                    <option value="Latin America">Latin America</option>
                </select>
            </div>
            <div class="field-group">
                <p class="field-title">Preferred seaons:</p>
                <input type="radio" name="season" id="summer" value="Summer">
                <label for="summer">Summer</label>
                <input type="radio" name="season" id="winter" value="Winter">
                <label for="winter">Winter</label>
                <input type="radio" name="season" id="spring" value="Spring">
                <label for="spring">Spring</label>
                <input type="radio" name="season" id="autumn" value="Autumn">
                <label for="autumn">Autumn</label>
                <input type="radio" name="season" id="monsoon" value="Monsoon">
                <label for="monsoon">Monsoon</label>
                <input type="radio" name="season" id="monsoon" value="Sun">
                <label for="monsoon">sun</label>
            </div>
            <div class="field-group">
                <p class="field-title">Your interests:</p>
                <input type="checkbox" name="interests[]" id="photography" value="Photography">
                <label for="photography">Photography</label>
                <input type="checkbox" name="interests[]" id="trekking" value="Trekking">
                <label for="trekking">Trekking</label>
                <input type="checkbox" name="interests[]" id="star-gazing" value="Star Gazing">
                <label for="star-gazing">Star Gazing</label>
                <input type="checkbox" name="interests[]" id="bird-watching" value="Bird Watching">
                <label for="bird-watching">Bird Watching</label>
                <input type="checkbox" name="interests[]" id="camping" value="Camping">
                <label for="camping">Camping</label>
                <input type="checkbox" name="interests[]" id="camping" value="Amping">
                <label for="camping">Amping</label>
            </div>
            <div class="field-group">
                <label for="participants" class="field-title">No. of Participants</label>
                <input type="number" name="participants" id="participants">
            </div>
            <div class="field-group">
                <label for="message" class="field-title">Tell about your requirements:</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <div class="field-group">
                <button type="submit">Send</button>
            </div>
         
        </form>
    </div>
    
</body>
</html>