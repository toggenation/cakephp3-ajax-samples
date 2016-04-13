
<div class="container" style="margin-bottom: 50px;">

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
             <li <?php  if ( $this->Here->is_here(['controller' => 'pages', 'action' => 'display', 'clients']) ) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Clients", ['controller' => 'pages', 'action' => 'display', 'clients']); ?></li>
            <li <?php  if ( $this->Here->is_here(['controller' => 'pages', 'action' => 'display', 'test']) ) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Test", ['controller' => 'pages', 'action' => 'display', 'test']); ?></li>
            <li <?php  if ( $this->Here->is_here(['controller' => 'timezone', 'action' => 'getTime'])) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Timezone", ['controller' => 'timezone', 'action' => 'getTime']); ?></li>
            <li <?php  if ( $this->Here->is_here([ 'controller' => 'posts', 'action' => 'index'] )) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Posts", [ 'controller' => 'posts', 'action' => 'index']); ?></li>
            <li <?php  if ( $this->Here->is_here([ 'controller' => 'users', 'action' => 'index'] )) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Users", [ 'controller' => 'users', 'action' => 'index']); ?></li>
            <li <?php  if ( $this->Here->is_here( [ 'controller' => 'bookmarks', 'action' => 'index'])) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Bookmarks", [ 'controller' => 'bookmarks', 'action' => 'index']); ?></li>
            <li <?php  if ( $this->Here->is_here( [ 'controller' => 'Tags', 'action' => 'index'])) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Tags", [ 'controller' => 'Tags', 'action' => 'index']); ?></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" > Social <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link("Facebook", "http://www.facebook.com", ['target' => '_blank']) ; ?></li>
                    <li><?php echo $this->Html->link("Twitter", "http://www.twitter.com", ['target' => '_blank']) ; ?></li>
                    <li><?php echo $this->Html->link("Google+", "http://plus.google.com", ['target' => '_blank']) ; ?></li>
                </ul>
            </li>
            <li <?php  if ($this->Here->is_here([ 'controller' => 'users', 'action' => 'logout']) ) { echo 'class="active"'; } ; ?>><?php echo $this->Html->link("Logout", [ 'controller' => 'users', 'action' => 'logout']); ?></li>
        </ul>
    </div>
    
</nav>
</div>

<?php //debug($this->request); ?>