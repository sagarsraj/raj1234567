<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th,td{
        border:1px solid black
    }
    </style>
<body>

    <h1>data table</h1>
    <table>
        
        <thead>
            <tr>
                <th>name</th>
                <th>phone</th>
                <th>address</th>
                <th>Update</th>
                <th>delete</th>
          </tr>
</thead>

<tbody>
    @foreach($data as $cd)
    <tr>
        <td>{{ $cd->name}}</td>
        <td>{{ $cd->phone}}</td>
        <td>{{ $cd->address}}</td>
        <th><button><a href="{{ url('/edit'.$cd->name) }}">Update</a></button></th>
        <th><button><a href="{{ url('/data/delete')}}/{{$cd->name}}">delete</a></button></th>
</tr>
@endforeach
 
</tbody>
</table>

</body>
</html>