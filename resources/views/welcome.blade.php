<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="5">
    <tr>
        <td width="200" valign="top">
            <h3 style="margin:0px; margin-right:400px;">SET</h3>
            server > 0 - Save to exact server.<br>
            server = 0 (default) - Automatic saving to a less loaded server.<br>
            server = -1 - Direct saving to the database.<br>
            server = -2 - Saving in all instances.<br>
            server = -3 - Saving in all instances and DB.<br><br>
            <!-- <label for="cmd">key:</label>
            <input type="text" id="cmd" name="cmd">
             <label for="cmd">value:</label><input type="text" id="cmd" name="cmd">
            <label for="cmd">server:</label>
            <input type="text" id="cmd" name="server" placeholder="all">
            <input type="submit" value="+" name="submit"><br><br> -->
            <!-- <input type="submit" value="save" name="submit"> -->

        </td>
        <td valign="top">
            <h3 style="margin:0px;">GET</h3>
            server > 0 - Search on a specific server. (speed: fast)<br>
            server = 0 (default) - Deep search. (speed: slow)<br>
            server = -1 - DB search. (speed: medium)<br><br>
            <!-- <label for="cmd">key:</label>
            <input type="text" id="cmd" name="cmd">
            <label for="cmd">server:</label>
            <input type="text" id="cmd" name="server" placeholder="all">
            <input type="submit" value="+" name="submit"><br><br> -->
        </td>
    </tr>
</table>
<form action="/" method="post">
    @csrf
    <textarea placeholder="Write your query here!" style="height:100px; width: 400px"></textarea><br>
    <input type="submit" value="run" name="submit">
</form>
</body>
</html>
