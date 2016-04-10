<div class="container">
    <?php $this->extend('../Layout/signin'); ?>
    <?= $this->Form->create($users, ['class' => 'form-signin']); ?>
    <h2 class="form-signin-heading">Login</h2>
    <?= $this->Form->input('email') ?>
    <?= $this->Form->input('password') ?>
    <?= $this->Form->button('Login', ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    <?= $this->Form->end() ?>
    
    <table class="table" style="width: 300px; margin: auto;">
        <tr>
            <th colspan="2">Login Details</th>
        </tr>
        <tr>
            <th>User</th>
            <th>Pass</th>
        </tr>
        <tr>
            <td>me@example.com</td>
            <td>me</td>
        </tr>
    </table>
</div>