<?php use App\Services\Page; ?>
<!DOCTYPE html>
<html lang="en">
<?php
Page::part('head');
?>
<body>
<?php Page::part('navbar'); ?>
<div class="container">
    <h2>Sign UP</h2>
    <form class="mt-4" method="post" enctype="multipart/form-data" action="auth/register">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" >
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" >
        </div>
        <div class="mb-3">
            <label for="full_name" class="form-label">Full name</label>
            <input type="text" name="full_name" class="form-control" id="full_name" >
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">User Avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar" >
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" name="confirm_password" class="form-control" id="confirm_password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>



</html>