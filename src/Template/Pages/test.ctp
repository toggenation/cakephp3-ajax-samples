

<?php 
$gfonts = "<link href='https://fonts.googleapis.com/css?family=Lato:400,300|Abel' rel='stylesheet' type='text/css'>";
$this->prepend('css', $gfonts); 

$script_append =
<<<SCRIPT
<script>
$(function(){
    $('.carousel').carousel({
        interval: 4000
    })
})    
</script>
SCRIPT;

$this->append('script', $script_append);
?>

<style>
    
    html, body {
        font-family: 'Lato', sans-serif;
        font-weight: 300;
        font-size: 16px;
        line-height: 1.7;
        background-color: #eeefe9;
        
    }
    
    h1, h2, h3, h4 {
        font-family: 'Abel', sans-serif;
    }
    b, strong {
        font-weight: 400;
    }
    
    
    
    .col-lg-offset-6 {
        background-color: pink;
    }
    
    .tab-content img {
        
        padding-left: 20px
    }
    .tab-pane {
        padding: 40px 10px 0px 10px;
    }
    .welcome {
        text-align: center;
    }
    .ftr {
        
        background: url(../img/bg.jpeg) repeat;
    }
    .ftr address, .ftr a, .ftr p {
        color: #fff;
    }
    .ftr img {
        padding: 20px 0px 0px 0px 
    }
    
    .carousel-inner > .item > img {
        position: absolute;
        top: 50px;
        left: 0;
        min-width: 100%;
        height: auto;
    }
    .carousel-inner > .item {
        height: 500px;
    }
    
    .carousel-inner {
        margin-bottom: 30px;
    }
    @media(min-width: 768px){
        
         .carousel-inner > .item {
        height: 700px;
    }
    }
    
    hr {
        color: #00d4b4;
        border-top: 1px solid;
    }
    img.img-circle {
        
        max-height: 228;
        max-width: 228;
    }
    
    .padded {
        padding: 100px 15px;
    }
</style>

 <div id='myCarousel' class='slide carousel'>
     <ol class="carousel-indicators" >
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>
        <div class='carousel-inner'>
            <div class="item active">
                <?php echo $this->Html->image('slide1.jpg'); ?>
                <div class="container active">
                    <div class="carousel-caption">
                        <h1>JMITS</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                        </p>
                        <p>
                            <?php echo $this->Html->link('Sign Up Today', "#", ['class' => 'btn btn-primary btn-large']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php echo $this->Html->image('slide2.jpg'); ?>
                <div class="container active">
                    <div class="carousel-caption">
                        <h1>JMITS Slide 2</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                        </p>
                        <p>
                            <?php echo $this->Html->link('Sign Up Today', "#",['class' => 'btn btn-primary btn-large']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <?php echo $this->Html->image('slide3.jpg'); ?>
                <div class="container active">
                    <div class="carousel-caption">
                        <h1>JMITS Slide 3</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                        </p>
                        <p>
                            <?php echo $this->Html->link('Sign Up Today', "#",['class' => 'btn btn-primary btn-large']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $this->Html->link(
                $this->Html->tag('span','', ['class' => 'glyphicon glyphicon-chevron-left']), 
                '#myCarousel', 
                [
                    'data-slide' => 'prev',
                    'class' => 'left carousel-control',
                    'escape'  => false]
                    ); ?>
     
          <?php echo $this->Html->link(
                $this->Html->tag('span','', ['class' => 'glyphicon glyphicon-chevron-right']), 
                '#myCarousel', 
                [
                    'data-slide' => 'next',
                    'class' => 'right carousel-control',
                    'escape'  => false]
                    ); ?>
    </div> <!-- end carousel -->
    
    <div class="container padded">
        <div class="row">
            <div class="col-lg-12">
                <h2>FOUR MODES</h2>
                <hr>
                
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <?php echo $this->Html->image('computer.jpeg', ['class' => 'img-responsive img-circle']);?>
                <h3>Computers</h3>
                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                <p><?php echo $this->Html->link('View Details &raquo;', '#', ['escape' => false, 'class' => 'btn btn-default'] );?></p>
            </div>
             <div class="col-sm-6 col-md-3">
                <?php echo $this->Html->image('ubuntu.jpeg', ['class' => 'img-responsive img-circle']);?>
                <h3>Linux and Ubuntu</h3>
                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                <p><?php echo $this->Html->link('View Details &raquo;', '#', ['escape' => false, 'class' => 'btn btn-default'] );?></p>
            </div>
            <div class="clearfix hidden-md hidden-lg"></div>
             <div class="col-sm-6 col-md-3">
                <?php echo $this->Html->image('switch.jpeg', ['class' => 'img-responsive img-circle']);?>
                <h3>Networking</h3>
                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                <p><?php echo $this->Html->link('View Details &raquo;', '#', ['escape' => false, 'class' => 'btn btn-default'] );?></p>
            </div>
             <div class="col-sm-6 col-md-3">
                <?php echo $this->Html->image('server.jpeg', ['class' => 'img-responsive img-circle']);?>
                <h3>Servers</h3>
                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec</p>
                <p><?php echo $this->Html->link('View Details &raquo;', '#', ['escape' => false, 'class' => 'btn btn-default'] );?></p>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-6 tabbable">
            <ul id="MyTabs" class="nav nav-tabs">
                <li class="active"><a href="#android" data-toggle="tab">Android</a></li>
                <li><a href="#blackberry" data-toggle="tab">Blackberry</a></li>
                <li><a href="#ios" data-toggle="tab">iOS</a></li>
                <li><a href="#windows" data-toggle="tab">Windows</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="android">
                    <p class="drop-cap">
                        <?php echo $this->Html->image('android.png', ['class' => 'pull-right']); ?>
                        
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,<br>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    </p>
                    
            </div>
                <div class="tab-pane fade in" id="blackberry"><p class="text-justify"><?php echo $this->Html->image('bb.jpeg', ['class' => 'pull-right']); ?>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque

eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
                <div class="tab-pane fade in" id="ios"><p><?php echo $this->Html->image('ios.jpeg', ['class' => 'pull-right']); ?>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
                <div class="tab-pane fade in" id="windows"><p><?php echo $this->Html->image('windows.png', ['class' => 'pull-right']); ?>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
         </div>
    </div> <!-- end tabs -->
    </div>
    
   
   
        <div class="col-md-8 col-md-offset-2 welcome">
            <h1>Welcome to our website</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-lg-4">
                 <div class="thumbnail">
      <?= $this->Html->image('dad.png', ['alt'=> "dad"]); ?>
      <div class="caption">
        <h3>Dad</h3>
       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
        <p><a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="thumbnail">
       <?= $this->Html->image('dad.png', ['alt'=> "dad"]); ?>
      <div class="caption">
        <h3>Dad</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
      </div>
    </div>
            </div>
            <div class="col-md-4 col-lg-4">
                 <div class="thumbnail">
                     <?= $this->Html->image('dad.png', ['alt'=> "dad"]); ?>
      <div class="caption">
        <h3>Dad</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient</p>
        <p><a href="#" class="btn btn-default" role="button">Button</a></p>
      </div>
    </div>
            </div>
        </div>
</div>
    
    <footer class="full-width">
        <div class="container">
            <div class="col-sm-6 col-md-4 widget">
                <h3>Stay in Touch</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
            </div>
            <div class="col-sm-6 col-md-4 widget">
                <h3>About our company</h3>
                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,</p>
                 </div>
            <div class="col-sm-6 col-md-4 widget">
                <h3>Client Login</h3>
                <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>
        </div>
        
    </footer>

<div class="ftr">
    <div class="container">
        <div class="row">
            <footer>
                <div class="pull-left ft_space">
                <address>
                    <h3>JMITS</H3>
                    11/79-81 Earl St<br>
                    Kew, VIC 3101<br>
                    <a href="mailto:james@jmits.com.au">james@jmits.com.au</a><br>
                    <abbr title="Phone">P:</abbr> 0428 964 633
                </address>
                    </div>
                <div class="pull-right ft_space">
                    <?php echo $this->Html->image('jmits.png', ['class' => 'img-repsonsive']);?>
                    <p>
                        &copy; James McDonald IT Services 2016
                    </p>
                </div>
            </footer>
        </div>    
    </div>
</div>
