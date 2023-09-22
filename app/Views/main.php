<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="save" method="post">
                <label> studentID </label>
                <input type="text" name="studentID" placeholder="studentID">
                <br>
                <label> fullName </label>
                <input type="text" name="fullName" placeholder="fullName">
                <br>
                <label> yearLevel </label>
                <input type="text" name="yearLevel" placeholder="yearLevel">
                <br>
                <label> Program </label>
                <input type="text" name="Program" placeholder="Program">
                <br>
                <input type="submit" value="save">
    </form>
    <table border="1"> 
        <tr>
            <th>studentID</th>
            <th>fullName</th>
            <th>yearLevel</th>
            <th>Program</th>
        </tr>
        <?php foreach ($main as $M): ?>
            <tr>
                <th> <?=$M['studentID']?> </th>
                <th> <?=$M['fullName']?> </th>
                <th> <?=$M['yearLevel']?> </th>
                <th> <?=$M['Program']?> </th>
            </tr>
            <?php endforeach; ?>    
    </table>
</body>
</html>