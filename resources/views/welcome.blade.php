<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action ="{{ route('employee.import') }}">
        @csrf
        <label for="file">Csv Import</label>
        <input type="file" name="file" >
        <button type="submit">Submit</button>
    </form>
</body>
</html>