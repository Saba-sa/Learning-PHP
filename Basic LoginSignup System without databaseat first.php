<!-- Create signup form → store users in an associative array:

$users = ["saba" => "1234", "ali" => "abcd"];


Login form → check credentials against $users.

If correct, create session → $_SESSION['user'] = $username;

Show "Welcome, $username" after login.

Upgrade: store users in a text file or MySQL database.

PHP concepts: sessions, associative arrays, form validation. -->