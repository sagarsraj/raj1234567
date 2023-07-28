<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel project</title>
</head>
<body>
    <form action="dataInsert" method="post" enctype="multipart/form-data">
        @csrf

        <label for ="name" class="control-lable">Name:</lable>
        <input type="text" name="name" class="control-lable"><br>

        <label for ="phone" class="control-lable">Phone:</lable>
        <input type="text" name="phone" class="control-lable"><br>

        <label for ="address" class="control-lable">Address:</lable>
        <input type="text" name="address" class="control-lable"><br>

        <input type ="submit" value="submit">

</form>



    
</body>
</html>