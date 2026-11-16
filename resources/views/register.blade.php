<form action="/register" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="number" name="age" placeholder="Age">

    <button type="submit">Register</button>
</form>