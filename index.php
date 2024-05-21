<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
/* Ensure full height for the html and body elements */
html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* General Container Styling */
.container {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    background-color: #f6e1e5;
    box-sizing: border-box;
}

/* Navigation Bar Styling */
.nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #cecece;
    border-bottom: 1px solid #ddd;
    width: 100%;
    box-sizing: border-box;
}

.nav h2 {
    font-size: 24px;
    color: #333;
    margin: 0;
}

a#login_btn {
    padding: 10px 20px;
    font-size: 16px;
    color: white;
    background-color: indigo;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}

a#register_btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: indigo;
    border: none;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
}


.unique {
    display: flex;
    justify-content: center;
}

/* Body Styling */
.body {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
}

 </style>
<body>
    <div class="container">
        <div class="nav">
            <h2>HOGWARTS UNIVERSITY</h2>
           <a href="./view//partials/login.view.php" id="login_btn">LOGIN</a>
        </div>
        <div class="body">
            <h4>Dear learners summer courses registraion are open now.please enroll if not already</h4>
           <div class="unique">
           <a href="./view/partials/Register.view.php" id="register_btn">Register Now</a>
           </div> 
        </div>
    </div>
</body>
</html>