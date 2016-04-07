<nav class="large-3 medium-4 columns" id="actions-sidebar">

</nav>

<div class="bookmarks view large-9 medium-8 columns content">

<h1>Login</h1>
<dl>
    <dt>Email</dt>
    <dd>me@example.com</dd>
    <dt>Password</dt>
    <dd>me</dd>
</dl>
<?= $this->Form->create() ?>
<?= $this->Form->input('email') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>

</div>