<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>

<body>
    <form action="{{ route('register') }}" method=post>
        @csrf
        <div>
            <label for="name">Name</label> <br>
            <input type="text" name="name" id="name" placeholder="enter your name">
        </div>
        <div>
            <label for="email">email</label> <br>
            <input type="email" name="email" id="email" placeholder="enter a valid email address">
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" placeholder="enter a strong password">
        </div>
        <div>
            <label for="password_confirmation">
                Confirm your password
            </label> <br>
            <input type="password" name="password_confirmation" id="password_confirmation">

        </div>
        <div>
            <input type="submit" value="register">
        </div>

    </form>
</body>

</html>
