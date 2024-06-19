<!DOCTYPE html>
<html >
    <head>
    <title>Login</title>
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
            
        </div>
    </div>
</body>
    </html>
        