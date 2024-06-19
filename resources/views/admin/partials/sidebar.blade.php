<div class="sidebar">
            <h2>Sidebar</h2>
            <a href="{{route('admin.create.accountant')}}">Create Accountant</a>
            @if(Auth::user()->hasRole('admin'))
            <a href="{{route('admin.view.accountant')}}">View Accountant</a>
            @endif
            @if(Auth::user()->hasRole('accountant'))
           <a href="{{route('admin.add.entry')}}">Add entry</a>
           @endif
           @if(Auth::user()->hasRole('accountant'))
           <a href="{{route('admin.view.entry')}}">view entry</a>
           @endif
            <a href="{{route('admin.logout')}}">Logout</a>
        </div>