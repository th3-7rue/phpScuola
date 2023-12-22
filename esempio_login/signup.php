<?php
require 'daisyUI.php';

?>

<body class="m-3">

    <div class="h-screen flex items-center justify-center w-full">
        <form action="signup.script.php" method="post" class="flex flex-col w-full">
            <label for="username">Username</label>
            <input required name="username" type="text" placeholder="Username" class="input input-bordered w-full ">
            <label for="password">Password</label>
            <input required name="password" type="password" placeholder="Password" class="input input-bordered w-full ">
            <button class="btn btn-primary mt-1">Registrati</button>
        </form>
    </div>
</body>