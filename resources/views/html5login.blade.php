<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    @include('cssfiles')
</head>
<body>
   @include('headerfiles')
    <div class="materialContainer">
        <div class="box">

            <div class="title">LOGIN</div>

            <form action="/login" method="POST">
                @csrf 

                <div class="input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <span class="spin"></span>
                </div>

                <div class="input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <span class="spin"></span>
                </div>

                <div class="button login">
                    <button type="submit"><span>GO</span> <i class="fa fa-check"></i></button>
                </div>
            </form>

            <a href="" class="pass-forgot">Forgot your password?</a>

        </div>

        <div class="overbox">
            <div class="material-button alt-2"><span class="shape"></span></div>

            <div class="title">REGISTER</div>

            <div class="input">
                <label for="regname">Username</label>
                <input type="text" name="regname" id="regname">
                <span class="spin"></span>
            </div>

            <div class="input">
                <label for="regpass">Password</label>
                <input type="password" name="regpass" id="regpass">
                <span class="spin"></span>
            </div>

            <div class="input">
                <label for="reregpass">Repeat Password</label>
                <input type="password" name="reregpass" id="reregpass">
                <span class="spin"></span>
            </div>

            <div class="button">
                <button><span>NEXT</span></button>
            </div>

        </div>

    </div>

    @include('jsfiles')
</body>
</html>
