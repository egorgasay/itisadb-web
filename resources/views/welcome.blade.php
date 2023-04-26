<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="5" style="font-size: 20px">
    <tr>
        <td width="200" valign="top">
            <h3 style="margin:0px; margin-right:400px;">SET</h3>
            server > 0 - Save to exact server.<br>
            server = 0 (default) - Automatic saving to a less loaded server.<br>
            server = -1 - Direct saving to the database.<br>
            server = -2 - Saving in all instances.<br>
            server = -3 - Saving in all instances and DB.<br><br>

        </td>
        <td valign="top">
            <h3 style="margin:0px;">GET</h3>
            server > 0 - Search on a specific server. (speed: fast)<br>
            server = 0 (default) - Deep search. (speed: slow)<br>
            server = -1 - DB search. (speed: medium)<br><br>
        </td>
        </td>
        <td valign="top">
            <h3 style="margin:0px;">Servers</h3>
            <?php
            $arr = explode("<br>", $servers);
            foreach ($arr as $v) {
                echo "$v<br>";
            }
            ?>
        </td>
    </tr>
</table>

<center>
    <?php
    $arr = explode(PHP_EOL, $result);
    if (count($arr) > 1) {
        echo "<h3 style=\"margin:0px;\">Result</h3>";
        foreach ($arr as $v) {
            echo "$v<br>";
        }
    } else if ($err_msg) {
        echo $err_msg."<br><br>";
    }

    ?>

    <form action="/" method="post">
        @csrf
        <input type="submit" value="Execute" style="font-size: 29px" name="submit"><br><br>
        <textarea placeholder="Write your query here!                Example set test quest;" style="height:20em; width: 600px; font-size: 29px" name="cmd"></textarea><br>

    </form>
</center>
</body>
</html>
