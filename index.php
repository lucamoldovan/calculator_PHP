<?php
$cookie_name1 = "num";
$cookie_value1 = "";
$cookie_name2 = "op";
$cookie_value2 = "";

if (isset($_POST['num'])) {
    if ($_POST['num'] === 'c') {
        $num = "";
    } else {
        $num = $_POST['input'] . $_POST['num'];
    }
} else {
    $num = "";
}
if (isset($_POST['op'])) {
    $cookie_value1 = $_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

    $cookie_value2 = $_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");
    $num = "";
}
if (isset($_POST['equal'])) {
    $num = $_POST['input'];
    switch ($_COOKIE['op']) {
        case "+":
            $result = $_COOKIE['num'] + $num;
            break;
        case "-":
            $result = $_COOKIE['num'] - $num;
            break;
        case "*":
            $result = $_COOKIE['num'] * $num;
            break;
        case "/":
            $result = $_COOKIE['num'] / $num;
            break;
    }
    $num = $result;
}
?>




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body{
            background-color: #040D12;
        }
       
        .calc{
            
            margin: auto;
            background-color: #5C8374;
            border: 1px #93B1A6;
            width: 19%;
            height: 630px;
            border-radius: 20px;
            box-shadow: 10px 10px 40px;
        }
        .maininput{
            background-color: #5C8374;
            border: 1px white;
            height: 125px;
            width: 98.2%;
            font-size: 80px;
            color: white;
            font-weight: 00;
        }
        .numbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: #93B1A6;
        }
        .numbtn:hover{
            background-color: #183D3D;
            color: #040D12;
        }
        .calbtn{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: 30px;
            background-color: #183D3D;
        }
        .calbtn:hover{
            background-color: #040D12;
            color: #93B1A6;
        }
        .c{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: #183D3D;
        }
        .c:hover{
            background-color: #040D12;
            color: #93B1A6;
        }
        .equal{
            padding: 30px 35px;
            border-radius: 50px;
            font-weight: 500;
            font-size: large;
            background-color: #183D3D;
        }
        .equal:hover{
            background-color: #040D12;
            color: #93B1A6;
        }

    </style>
</head>
<body>
        <div class="calc">
            <form action="" method="post">
                <br>
                <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
                <input type="submit" class="numbtn" name="num"value="7">
                <input type="submit" class="numbtn" name="num"value="8">
                <input type="submit" class="numbtn" name="num"value="9">
                <input type="submit" class="calbtn" name="op"value="+"> <br><br>
                <input type="submit" class="numbtn" name="num"value="4">
                <input type="submit" class="numbtn" name="num"value="5">
                <input type="submit" class="numbtn" name="num"value="6">
                <input type="submit" class="calbtn" name="op"value="-"><br><br>
                <input type="submit" class="numbtn" name="num"value="1">
                <input type="submit" class="numbtn" name="num"value="2">
                <input type="submit" class="numbtn" name="num"value="3">
                <input type="submit" class="calbtn" name="op"value="*"><br><br>
                <input type="submit" class="c" name="num"value="c">
                <input type="submit" class="numbtn" name="num"value="0">
                <input type="submit" class="equal" name="equal"value="=">
                <input type="submit" class="calbtn" name="op"value="/">


            </form>
        </div>



</body>
</html>