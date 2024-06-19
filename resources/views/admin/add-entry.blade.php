<!DOCTYPE html>
<html >
    <head>
    <title>Add Entry</title>
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
           @if(Auth::user()->hasRole('accountant'))
           <a href="{{route('admin.view.entry')}}">view entry</a>
           @endif
            <a href="{{route('admin.logout')}}">Logout</a>
        </div> -->
        @include('admin.partials.sidebar')


        <div class="main-content">
            <h2>Add Entry</h2>
            <form method="POST" action="{{route('admin.save.entry')}}">
                @csrf
                <input type="hidden" name="id" value="{{@$acc->id}}">
                <label for="email">Name</label>
                <input type="text" id="" value="{{@$acc->name}}" name="name" required>
                <label for="email">type</label>
                <input type="text" id="" value="{{@$acc->type}}" name="type" required>
                <label for="password">select</label>
                <select name="in_ex">
                    <option>income</option>
                    <option>expense</option>
</select>
<label for="email">Amount</label>
                <input type="text" id="" name="amount" value="{{@$acc->amount}}" required>
                <button type="submit">save</button>
            </form>
        </div>
    </div>
</body>
    </html>
        