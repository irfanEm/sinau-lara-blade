<html>
<body>
    <form action="">
        <input type="checkbox" name="test" id="test" @checked($user['premium']) value="premium">
        <input type="text" name="test" id="test" @readonly(!$user['admin']) value="{{ $user['nama'] }}">
    </form>
</body>
</html>