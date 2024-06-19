<!DOCTYPE html>
<html >
    <head>
    <title>view Entry</title>
    </head>
    <body >
    <div class="container">
        <!-- <div class="sidebar">
            <h2>Sidebar</h2>
            <a href="{{route('admin.create.accountant')}}">Create Accountant</a>
            @if(Auth::user()->hasRole('admin'))
            <a href="{{route('admin.view.accountant')}}">View Accountant</a>
            @endif
            @if(Auth::user()->hasRole('accountant'))
           <a href="{{route('admin.add.entry')}}">Add entry</a>
           @endif
            <a href="{{route('admin.logout')}}">Logout</a>
        </div> -->
        @include('admin.partials.sidebar')

        <div class="main-content">
            <h2>View Entry</h2>
           <table>
            <th>sl no:</th>
            <th>name</th>
            <th>type</th>
            <th>amount</th>
            <th>action</th>
            

            @foreach($entries as $data)
            <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->type}}</td>
            <td>{{$data->amount}}</td>
            <td>
                <a href="{{url('admin/edit-entry/'.$data->id)}}">Edit</a>
                <a href="{{url('admin/delete-entry/'.$data->id)}}">Delete</a>
            </td>
            </tr>
           @endforeach
           

        </table>
        </div>
    </div>
</body>
    </html>
        