<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL</title>
    <link rel="stylesheet" href=" {{ asset ('css/lar.css')}}">
</head>
<body>
    <div class="dash">
        <nav>
            <ul class="side">
                <li><a class="nav" href="/project/public/" >home</a></li>
                <li><a class="nav" href="/project/public/contact/" >contact</a></li>
                @guest
                <li><a class="nav" href="/project/public/login">LOG IN</a></li>
                <li><a class="nav" href="/project/public/register">REGISTER</a></li>
                @endguest

                @auth
                    <form action="/project/public/logout" method="POST" >
                        @csrf
                        <li><button class="nav" >LOG OUT</button></li>
                    </form>
                
                @endauth
            </ul>
        </nav>
    </div>
    {{$slot}}
    
</body>
</html>