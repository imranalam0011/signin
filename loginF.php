<html>
<head>
    <title>LOGIN FORM</title>
<style>
    body{
    }
    .login-page {
        width: 360px;
        padding:10% 0 0;
        margin: auto;
    }
.form .h1{
    font-family: sans-serif;
    color: aliceblue;
}
.para{
    font-family: sans-serif;
    color: aliceblue;
}
    .form{
        position: relative;
        z-index: 1;
        background:#FFA800;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
    }
    .form input{
        font-family: sans-serif;
        outline: 1;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
    }
    .form-group{
        margin-bottom:20px;
        margin:4px 0;
	    padding:0px;
        color: #000;
        font-weight: bold;
    }
    .form .submit{
       font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background:#FF5300;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #ffffff;
        font-size: 14px;
        cursor: pointer;
       }
    .form submit:hover,.form submit:active{
        background: #43A047;
    }
.topnav {
  background-color: #333;
  overflow: hidden;
}
.img {
  opacity: 0.5;
}
.table .th.td{ 
    background: rgba(0,0,0,0.7);
    color: white;
    padding-top: 30px;
    padding-bottom: 12px;
    text-align: left;
    padding: 8px;
    border-collapse: collapse;
    width: 50%;
    border: 2px #2b2b2b solid;
    color: gray;

}
</style>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="login-form" action="" method="post">
                <h1 class="h1">LOGIN</h1>
                <input type="text" name="name" placeholder="Enter User Name">
                <input type="password" name="password" placeholder="Enter Password">
                <input class="submit" type="submit" name="submit" value="submit">

            </form>
            <font style="color:white">Click here to clean <a href="logout.php" tite="Logout">Session</a></font>
        </div>
    </div>
</body>

</html>
