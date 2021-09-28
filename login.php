<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>로그인 페이지</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            * {
                margin: 0px;
                padding: 0px;
                text-decoration: none;
                font-family: sans-serif;
            }

            body {
                width:100%;
                height:100%;
                background-color: #34495e;
            }

            .loginForm {
                position: absolute;
                width: 300px;
                height: 400px;
                padding: 30px, 20px;
                background-color: #FFFFFF;
                text-align: center;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 15px;
            }

            .loginForm h2 {
                text-align: center;
                margin: 30px;
            }

            .idForm {
                border-bottom: 2px solid #adadad;
                margin: 30px;
                padding: 10px 10px;
            }

            .passForm {
                border-bottom: 2px solid #adadad;
                margin: 30px;
                padding: 10px 10px;
            }

            .id {
                width: 100%;
                border: none;
                outline: none;
                color: #636e72;
                font-size: 16px;
                height: 25px;
                background: none;
            }

            .pw {
                width: 100%;
                border: none;
                outline: none;
                color: #636e72;
                font-size: 16px;
                height: 25px;
                background: none;
            }

            .btn {
                position: relative;
                left: 40%;
                transform: translateX(-50%);
                margin-bottom: 40px;
                width: 80%;
                height: 40px;
                background: linear-gradient(125deg, #81ecec, #6c5ce7, #81ecec);
                background-position: left;
                background-size: 200%;
                color: white;
                font-weight: bold;
                border: none;
                cursor: pointer;
                transition: 0.4s;
                display: inline;
            }

            .btn:hover {
                background-position: right;
            }

            .bottomText {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <form action="/controller/login.php" method="post" class="loginForm" onsubmit="return login()">
            <h2>Login</h2>
            <div class="idForm">
                <input type="text" class="id" name="id" placeholder="ID">
            </div>
            <div class="passForm">
                <input type="password" class="pw" name="pw" placeholder="PW">
            </div>
            <button type="submit" class="btn">
                LOG IN
            </button>
            <script>
                function login(){
                    let $id = $("input[name=id]").val();
                    let $pw = $("input[name=pw]").val();

                    if($id === ''){
                        alert('아이디를 입력해 주세요.');
                        return false;
                    }else if($pw === ''){
                        alert('패스워드를 입력해 주세요.');
                        return false;
                    }
                    return true;
                }
            </script>
            <div class="bottomText">
                Don't you have ID? <a href="#">sign up</a>
            </div>
        </form>
    </body>
</html>