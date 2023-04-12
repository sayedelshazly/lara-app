<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FirstApp</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: 'Times New Roman', Times, serif;
        }
        body{
            background-color:#020c25e1;
        }
        .nav{
            margin: 20px;
            height: 60px;
            background-color: rgba(84, 14, 150, 0.759);
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            letter-spacing: 2px;
        }
        .nav h1{
            color: orangered;
            text-transform: uppercase;
            margin-left: 30px;
        }
        .nav a{
            text-decoration: none;
            margin-left: 10px;
            color: #ffffff;
            text-transform: uppercase;
        }
        .home h1{
            text-transform: uppercase;
            text-align: center;
            color: #ffffff;
            margin-top: 250px;
        }
        .home span{
            color: orangered
        }
        .footer{
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(84, 14, 150, 0.759);
            margin-top: 470px;
            color: #ffffffa2;
        }
        .footer span{
            color: rgb(255, 77, 0);
            font-size: 20px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div id="/students">
        <div class="nav">
            <h1>STUDENTS</h1>

            @foreach ($students as $student)

            <a href='/students/{{ $student['id'] }}'>
                {{ $student['name'] }}
            </a>
                <br>

            @endforeach
        </div>
        <div class="home">
            <h1>Welcom in my first app with <span>Laravel</span></h1>
        </div>
        <div class="footer">
            <p>Made by <span>SELSHAZLY-33</span></p>
        </div>
    </div>
</body>
</html>

