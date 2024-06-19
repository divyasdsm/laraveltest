<!DOCTYPE html>
<html >
    <head>
    <title>Add Accountant</title>
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
            <h2>Add Accountant</h2>
            <form method="POST" action="{{route('admin.save.accountant')}}">
                @csrf
                <input type="hidden" name="id" value="{{@$acc->id}}">
                <label for="email">Name</label>
                <input type="text" id="" value="{{@$acc->name}}" name="name" required>
                <label for="email">Email</label>
                <input type="email" id="email" value="{{@$acc->email}}" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" value="{{@$acc->password}}" name="password" required>
                <button type="submit">save</button>
            </form>
        </div>
    </div>
</body>
    </html>
        