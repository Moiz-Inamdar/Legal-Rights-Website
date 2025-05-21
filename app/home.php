<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RIGHTS</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-image: url('https://t4.ftcdn.net/jpg/04/96/55/43/360_F_496554310_1squir9vawoqmr5kN1AuLvh2zFExAxo1.jpg');
    
    background-repeat: no-repeat;
    background-size: cover;
}

.container {
    width: 80%;
  
    margin: 0 auto;
}

header {
    background: #333;
    color: #fff;
    padding: 1rem 0;
    height: 50px;
}

header h2 {
    float: left;
    margin-left: -30px;
    margin-top: -10px;
}

header nav {
    float: right;
    margin-right: 10px;
}

header nav ul {
    list-style: none;
}

header nav ul li {
    display: inline;
    margin-left: 20px;
}

header nav ul li a {
    color: #fff;
    text-decoration: none;
}

header::after {
    content: "";
    display: table;
    clear: both;
}

footer {
    background: #333;
    color: #fff;
    text-align: center;
    position: fixed;
    width: 100%;
    height: 30px;
    bottom: 0;
}

main {
    padding: 2rem 0;
}
.one{
    margin-left : 100px;
    margin-top: 20px;
    padding: 25px;
    
}
button{
    
    margin-top: 10px;
    height: 200px;
    width: 350px;
    font-size: 50px;
    border-radius: 15px;
            color: whitesmoke;
            transition: background-color 0.3s ease;
}

        button:hover {
            transform: scale(1.1);
            color:white;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h2>Legal Awareness</h2>
            <nav>
                <ul>
                <li><a href="/">Home</a></li>
            <li><a href="/rights">Rights</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/login">Login</a></li>

                </ul>
            </nav>
        </div>
    </header>

    <main>
    <div class="one">
        <button ><Strong><a href="/rights" style="text-decoration:none; font-style:italic">RIGHTS</a></Strong></button><br>
        <button><strong><a href="/articles" style="text-decoration:none;font-style:italic">ARTICLES</a></strong></button>

    </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Legal Awareness. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
   <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('https://t4.ftcdn.net/jpg/04/96/55/43/360_F_496554310_1squir9vawoqmr5kN1AuLvh2zFExAxo1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

nav {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

.logo {
    font-size: 24px;
    font-style: italic;
}

.nav-links {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

.nav-links li {
    margin: 0 10px;
}

.nav-links a {
    color: whitesmoke;
    text-decoration: none;
    padding: 10px 15px;
    display: block;
    transition: background 0.3s;
}



section {
    padding: 20px;
    margin: 20px;
}

section h1 {
    margin-top: 0;
}
a{
    text-decoration: none !important;
    
}
.one{
    margin-left : 100px;
    margin-top: 50px;
    padding: 25px;
    
}
button{
    margin-top: 20px;
    height: 200px;
    width: 350px;
    font-size: 50px;
    border-radius: 15px;
            color: whitesmoke;
            transition: background-color 0.3s ease;
}
        button:hover {
            transform: scale(1.1);
            color:white;
        }


   </style>
</head>
<body>
    <nav>
        <div class="logo">LEGAL AWARENESS</div>
        <ul class="nav-links">
            <li><a href="/">Home</a></li>
            <li><a href="/rights">Rights</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="one">
        <button><a href="/rights">RIGHTS</a></button><br>
        <button><a href="/articles">ARTICLES</a></button>

    </div>

   
</body>
</html>

















 // $b=0;
// $a ="hello world"."<br>";
// echo $a;

// Define("exam","Hello everyone"."<br>");
// echo exam;

// switch($b){
//     case 1: echo "Number is $b";
//     break;
//     case 2:echo"Numer is $b ";
//     break;
//     default:echo"Invalid number";
// }

// // While Loop
// $x =1;
// while($x<=2){
//     echo "<br>"."Hello";
//     $x++;
// }

// // do while loop
// $y=1;
// do{
//     echo "<br>"."Hi $y";
//     $y++;
// }while($y<1);

// //For Loop
// for($i=0;$i<=3;$i++){
//     echo "<br>"."Moiz"."<br>";
// }

// //Function and Array
// function message(){
//     echo "This is a function";
//     $cars = array('bmw','toyota');  //indexed array  echo $cars[0]
//     echo "<pre>";
//     print_r($cars);

//     $age = array('raj'=>20,'rahul'=>18); //associated array
//     print_r($age);

//     $data = array(                       // multi dimensional array
//         $cars = array('bmw','toyota'),
//         $age = array('raj'=>20,'rahul'=>18)
//     );
//     echo "<pre>";
//     print_r($data);
// }
// message();

// echo MI;!!! we can define MI in constants.php !!!
// rename env to .env to set database
// to create tables we create a folder in database/migrations/folder_name
//crntl G to search crntl H for replace -->


