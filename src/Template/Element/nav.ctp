<div class="container">

<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="navbar-header">
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <?php echo $this->Html->link("James", '/', [ 'class' => 'navbar-brand']); ?>
        
    </div>
    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><?php echo $this->Html->link("Test", ['controller' => 'pages', 'action' => 'test']); ?></li>
            <li><?php echo $this->Html->link("Timezone", '/'); ?></li>
            <li><?php echo $this->Html->link("Posts", [ 'controller' => 'posts', 'action' => 'index']); ?></li>
            <li><?php echo $this->Html->link("Users", [ 'controller' => 'users', 'action' => 'index']); ?></li>
            <li><?php echo $this->Html->link("Bookmarks", [ 'controller' => 'bookmarks', 'action' => 'index']); ?></li>
            <li><?php echo $this->Html->link("Tags", [ 'controller' => 'Tags', 'action' => 'index']); ?></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Social <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link("Facebook", "http://www.facebook.com", ['target' => '_blank']) ; ?></li>
                    <li><?php echo $this->Html->link("Twitter", "http://www.twitter.com", ['target' => '_blank']) ; ?></li>
                    <li><?php echo $this->Html->link("Google+", "http://plus.google.com", ['target' => '_blank']) ; ?></li>
                </ul>
            </li>
            <li><?php echo $this->Html->link("Logout", [ 'controller' => 'users', 'action' => 'logout']); ?></li>
        </ul>
    </div>
    
</nav>
    
</div>

