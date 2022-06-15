<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-memo 로그인</title>
</head>
<body>
    <?php require_once("header.php"); ?>
    <h1>php-memo 로그인</h1>
    <form method="POST" action="login.post.php">
    <p>
        아이디(이메일) : 
        <input type="text" name="login_id" />
    <p>
    <p>
        비밀번호 : 
        <input type="password" name="login_pw" />
    <p>               
    <p><input type="submit" value="로그인"></p>
    </form>
    
</body>
</html>