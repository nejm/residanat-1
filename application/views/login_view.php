<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href=<?= css_url("jquery.mobile-1.4.2.min"); ?>>

    <script type="text/javascript" src=<?= js_url("jquery"); ?>></script>
    <script type="text/javascript" src=<?= js_url("jquery.mobile-1.4.2.min"); ?>></script>

</head>
<body>
<div data-role="page">
    <div data-role="header" class="ui-bar-a">
        <h1>Header</h1>
    </div>
    <div data-role="main" class="ui-content">
        <div id='login_form'>
            <form action='<?php echo base_url(); ?>login/' method='post' name='process'>
                <h2>User Login</h2>
                <label for='username'>Username</label>
                <input type='text' name='username' id='username'/>

                <label for='password'>Password</label>
                <input type='password' name='password' id='password'/>

                <input type='Submit' value='Login'/>
            </form>
            <?= validation_errors(); ?>
        </div>
    </div>
</div>
</body>
</html>