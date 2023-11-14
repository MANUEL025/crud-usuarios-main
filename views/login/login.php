<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

        * {
            margin: 0;
            padding: 0;
            font-family: calibri;
            box-sizing: border-box;
        }

        #main-container {
            padding: 100px;
            width: 100%;
            height: 100%;
            transform: scale(0.8);
            /* scale it view the preview perfectly */
        }

        .centered-flex {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            width: 400px;
            min-width: 400px;
            flex-direction: column;
            border: 1px solid rgba(255, 255, 255, 0.097);
            display: flex;
            align-items: center;
            border-radius: 30px;
            position: relative;
            background: rgba(19, 19, 19, 0.736);
        }

        .icon {
            position: absolute;
            width: 85px;
            height: 85px;
            border: 1px solid #2a2a2a;
            border-radius: 50%;
            transform: translateY(-50%);
            background: #0a0a0a;
        }

        .fa {
            font-size: 50px;
            color: #a2a2a2;
        }

        .title {
            position: relative;
            margin: 60px 0 10px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        form {
            flex-direction: column;
            padding: 25px 25px 10px;
            height: 100%;
            position: relative;
            width: -webkit-fill-available;
        }

        .msg {
            display: block;
            color: #fa2929;
            position: absolute;
            top: 5%;
        }

        .field {
            display: flex;
            position: relative;
            width: 100%;
        }

        .field .fa {
            position: absolute;
            font-size: 14px;
            right: 10px;
            bottom: 10px;
        }

        input:-webkit-autofill {
            -webkit-box-shadow: 0 0 0 30px rgb(14 14 14) inset;
        }

        input:-webkit-autofill {
            -webkit-text-fill-color: #bababa !important;
        }

        form input {
            display: block;
            outline: none;
            width: 100%;
            border: none;
            font-size: 16px;
            color: #d2d2d2;
            margin: 25px 0 5px;
            caret-color: #cccccc;
            background: transparent;
            padding: 10px 25px 3px 0;
            border-bottom: 1px solid #404040;
        }

        .action {
            justify-content: space-between;
            width: 100%;
            font-size: 14px;
        }

        .action label {
            cursor: pointer;
            color: #7d7d7d;
        }

        .action input {
            width: auto;
            margin: 0 8px 0 0;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #9b9b9b;
        }

        .btn-container {
            padding: 20px;
            transition: .2s linear;
        }

        #btn {
            padding: 5px 20px;
            border: none;
            background: rgb(25, 62, 97);
            color: white;
            font-weight: 600;
            font-size: 16px;
            border-radius: 15px;
            transition: .3s;
            margin: 25px 0;
        }

        #btn:hover {
            cursor: pointer;
        }

        .signup {
            color: rgb(70, 70, 70);
            margin-top: 10px;
        }

        .shift-left {
            transform: translate(-120%);
        }

        .shift-right {
            transform: translate(120%);
        }

        .shift-top {
            transform: translateY(-150%);
        }

        .shift-bottom {
            transform: translateY(150%);
        }

        .no-shift {
            transform: translate(0%, 0%);
        }
        body {
    margin: 0;
    padding: 0;
    background-image: url('assets/images/fondologin.avif');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
    </style>
    <title>Login Page</title>
</head>

<body>
    <div id="main-container" class="centered-flex">
        <div class="form-container">
            <div class="icon centered-flex"><i class="fa fa-user"></i></div>
            <div class="title">LOGIN</div>
            <form id="login-form" class="centered-flex">
                <div class="msg"></div>
                <div class="field">
                    <input type="text" placeholder="Username" id="uname">
                    <i class="fa fa-user"></i>
                </div>
                <div class="field">
                    <input type="password" placeholder="Password" id="pass">
                    <i class="fa fa-lock"></i>
                </div>
                <div class="action centered-flex">
                    <label for="remember" class="centered-flex">
                        <input type="checkbox" id="remember"> Remember me
                    </label>
                    <a href="#">Forget Password ?</a>
                </div>
                <div class="btn-container">
                    <button id="btn"><a href="?c=products&m=index">Login</button>
                    </a>
                </div>
               
            </form>
        </div>
    </div>
    
 
 <script>
               const uname = document.getElementById('uname');
const pass = document.getElementById('pass');
const btn = document.getElementById('btn');
const btnContainer = document.querySelector('.btn-container');
const form = document.querySelector('form');
const msg = document.querySelector('.msg');
btn.disabled = true;

function shiftButton() {
    showMsg();
    const positions = ['shift-left', 'shift-top', 'shift-right', 'shift-bottom'];
    const currentPosition = positions.find(dir => btn.classList.contains(dir));
    const nextPosition = positions[(positions.indexOf(currentPosition) + 1) % positions.length];
    btn.classList.remove(currentPosition);
    btn.classList.add(nextPosition);
    btn.disabled = true;
}

function showMsg() {
    const isEmpty = uname.value === '' || pass.value === '';
    btn.classList.toggle('no-shift', !isEmpty);

    // Validación de usuario y contraseña simulada
    const validUsername = 'admin';
    const validPassword = '1234';

    if (!isEmpty) {
        if (uname.value === validUsername && pass.value === validPassword) {
            msg.innerText = '¡Genial! Ahora puedes continuar.';
            msg.style.color = '#92ff92';
            btn.classList.add('no-shift');
        } else {
            msg.style.color = 'rgb(218 49 49)';
            msg.innerText = 'Usuario o contraseña incorrectos.';
            btn.disabled = true; // Deshabilitar el botón si la contraseña es incorrecta
        }
    } else {
        msg.style.color = 'rgb(218 49 49)';
        msg.innerText = 'Complete los campos, por favor.';
        btn.disabled = true;
    }
}
        function shiftButton() {
            showMsg();
            const positions = ['shift-left', 'shift-top', 'shift-right', 'shift-bottom'];
            const currentPosition = positions.find(dir => btn.classList.contains(dir));
            const nextPosition = positions[(positions.indexOf(currentPosition) + 1) % positions.length];
            btn.classList.remove(currentPosition);
            btn.classList.add(nextPosition);
        }

        
        btnContainer.addEventListener('mouseover', shiftButton);
        btn.addEventListener('mouseover', shiftButton);
        btn.addEventListener('touchstart', shiftButton);
        form.addEventListener('input', showMsg);
    </script>
</body>

</html>