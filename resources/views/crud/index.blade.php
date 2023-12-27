<h1> category index</h1>

<table border=1>
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
    @foreach ($data as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
        </tr>
    @endforeach
</table>
