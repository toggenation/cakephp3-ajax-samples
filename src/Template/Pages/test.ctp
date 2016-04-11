<style>
    
    .col-lg-offset-6 {
        background-color: pink;
    }
    .tab-pane {
        padding: 40px 10px 0px 10px;
    }
    .welcome {
        text-align: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-6 tabbable">
            <ul id="MyTabs" class="nav nav-tabs">
                <li class="active"><a href="#android" data-toggle="tab">Android</a></li>
                <li><a href="#blackberry" data-toggle="tab">Blackberry</a></li>
                <li><a href="#ios" data-toggle="tab">iOS</a></li>
                <li><a href="#windows" data-toggle="tab">Windows</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="android">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
                <div class="tab-pane fade in" id="blackberry"><p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
                <div class="tab-pane fade in" id="ios"><p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
                <div class="tab-pane fade in" id="windows"><p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,</p>
                    
            </div>
         </div>
    </div>
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

