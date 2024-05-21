<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style>
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
    /* height: 100%; */
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


.unique {
    display: flex;
    justify-content: center;
}

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
           <a href="/controllers/logout.php" id="login_btn">LOGOUT</a>
        </div>
    </div>
</body>
</html>