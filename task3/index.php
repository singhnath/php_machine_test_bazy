<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placeholder Replacement</title>
</head>
<body>
    <div id="demo"></div>
    <script>
        let string = "@Name@ ipsum dolor sit amet, consectetur adipiscing elit. Praesent in mollis magna. Donec eu elit pellentesque, maximus nisl vitae, cursus velit. Sed Loremnibh sed elit auctor tincidunt. Donec tempor est id nunc ullamcorper rhoncus. Phasellus nec arcu et dui varius ullamcorper commodo quis ligula. Etiam ultrices nisi @email@, ut euismod elit tempor sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor turpis vel nisi fermentum, a sodales magna egestas. Vestibulum lobortis elit sed neque rhoncus, sit amet @mobile@ magna blandit. @designation@ nec leo ac diam euismod fringilla.";

        let name = "RRRR";
        let email = "RRR@RRR.com";
        let mobile = "9988775566";
        let designation = "Software Developer";

        // Replace placeholders with actual values
        string = string.replace(/@Name@/g, name);
        string = string.replace(/@email@/g, email);
        string = string.replace(/@mobile@/g, mobile);
        string = string.replace(/@designation@/g, designation);
           
        console.log(string);
        document.getElementById('demo').innerText += string;
    </script>
</body>
</html>
