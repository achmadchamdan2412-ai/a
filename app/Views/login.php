<h3>Login</h3> 
<?= session()->getFlashdata('msg') ?> 
<form action="/login" method="post"> 
<?= csrf_field() ?> 
<label>Email</label> 
<input type="email" name="email" value="<?= set_value('email') ?>"> 
<small><?= isset($validation) ? $validation->getError('email') : '' ?></small> 
<br> 
<label>Password</label> 
<input type="password" name="password"> 
<small><?= isset($validation) ? $validation->getError('password') : '' ?></small> 
<br> 
<button type="submit">Login</button> 
</form> 