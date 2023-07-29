<table Border=1px>
   
    <tr>
        <th>name</th>
        <th>email</th>
        <th>delete</th>
        <th>update</th>
    
    
</tr>
@foreach($users as $row)
<tr><td>{{$row->name}}</td>
<td>{{$row->email}}</td>
<th><a href="{{url('/data/delete')}}/{{$row->name}}"><button>Delete</button></a></th>
<th><a href="{{url('/update')}}/{{$row->name}}"><button>update</button></a></th>
</tr>
@endforeach