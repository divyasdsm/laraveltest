<!DOCTYPE html>
<html >
    <head>
    <title>Login</title>
    </head>
    <body >
        <form method="POST" action="{{route('admin.login.submit')}}">
            @csrf()
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <button type="submit" >Login</button>
        </form>
        <!-- <a href="{{url('admin/login')}}">Login</a> -->
    </body>
    </html>
        