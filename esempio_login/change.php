<?php
session_start();
require 'daisyUI.php';
if (isset($_SESSION['id'])) {
    ?>
    <div class='m-3 flex place-content-center align-middle'>
        <form action="change.script.php" method="post">
            <input required type="password" name="pw-old" placeholder="Vecchia password"
                class="m-1 input input-bordered w-full">
            <input required type="password" name="pw-new" placeholder="Nuova password"
                class="m-1 input input-bordered w-full">
            <button class='m-1 btn btn-primary w-full'>Cambia</button>
        </form>
    </div>
    <?php
} else {
    ?>
    <p>E' necessario accedere prima</p>
    <a href="login.php">Accedi</a>
    <?php

}