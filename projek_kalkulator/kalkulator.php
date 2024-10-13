<?php
$cookie_name1="num";
$cookie_value1="";
$cookie_name2="op";
$cookie_value2="";

if(isset($_POST['num']))
{
 $num=$_POST['input'].$_POST['num'] ;
}
else{
    $num="";
}
if(isset($_POST['op']))
{
    $cookie_value1=$_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

    $cookie_value2=$_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
    $num="";
}
if(isset($_POST['equal']))
{
    $num=$_POST['input'];
    switch($_COOKIE['op'])
    {
        case "+":
            $result=$_COOKIE['num']+$num;
            break;
            case "-":
                $result=$_COOKIE['num']-$num;
                break;
                case "*":
                    $result=$_COOKIE['num']*$num;
                    break;
                    case "/":
                        $result=$_COOKIE['num']/$num;
                        break;
    }
    $num=$result;
}
if (isset($_POST['clear']))
{
  $num="";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
       html {
        background-color: white;
        font-family: Tahoma;
       }
       
       .calc {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 60vh;
        width: 100vw;
        width: 250px;
        padding: 8px;
        margin: 8px auto;
        background-color: #ababab;
        border-radius: 4px;
        box-shadow: inset -3px 3px 7px;
       }

       .maininput {
        height: 70px;
        width: 200px;
        font-size: 16px;
       }


       .numbtn {
        display: inline-block;
        margin: 2px;
        width: 43px;
        height: 35px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
       }

       .calbtn, .equal {
        display: inline-block;
        margin: 2px;
        width: 43px;
        height: 35px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        color: white;
        background-color: black;
       }

       .C {
        display: inline-block;
        margin: 2px;
        width: 43px;
        height: 35px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 4px;
        color: white;
        background-color: red;
       }

    </style>

</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br><br>
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
            <input type="submit" class="C" name="clear"value="C">
            <input type="submit" class="numbtn" name="num"value="0">
            <input type="submit" class="equal" name="equal"value="=">
            <input type="submit" class="calbtn" name="op"value="/">


        </form>
    </div>
    <h3>X RPL 3</h3>
    <h3>Kelompok 3</h3>
    <h4>1. Raya Alifah Setia</h4>
    <h4>2. Kinan Sulistya Damayanti</h4>
    <h4>3. Dania Laras Ardianti</h4>
    <h4>4. Hanadia Ziyyan Ramdhani</h4>
    <h4>5. Essa Putri Idaman</h4>
    </body>
</html>