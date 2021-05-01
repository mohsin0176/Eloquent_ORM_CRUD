
    <table border="1">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>Created At</td>
            <td>Action</td>
        </tr>
        @foreach($todoArr as $todo)
            <tr>
            <td>{{$todo->id}}</td>
            <td>{{$todo->name}}</td>
            <td>{{$todo->created_at}}</td>
            <td><a href="todo_delete/{{$todo->id}}">Delete</td>
        </tr>
        @endforeach

    </table>
    
