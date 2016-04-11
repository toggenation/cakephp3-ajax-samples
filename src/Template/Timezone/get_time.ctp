
<?php echo $this->Html->script('global', ['inline' => false, 'block' => 'script']); ?>
<div class="container">
<div class="row">
        <nav class="nav col-md-2">
            <ul class="nav nav-stacked">
                <li class="heading">Go elsewhere</li>
                <li><?php echo $this->Html->link('Posts', ['controller' => 'posts', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link('Users', ['controller' => 'users', 'action' => 'index']); ?></li>
                 <li><?php echo $this->Html->link('Bookmarks', ['controller' => 'bookmarks', 'action' => 'index']); ?></li>
                  <li><?php echo $this->Html->link('Tags', ['controller' => 'tags', 'action' => 'index']); ?></li>
                  <li><?php echo $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li>
            </ul>
        </nav>
        <div class="col-md-6">
            <!-- src/Template/Timezone/get_time.ctp -->
            

            <h2>CakePHP City Time Retriever</h2>
            <p>The form below allows you to enter the name of a city and get its current local time through AJAX using jQuery. 
                You can view the tutorial for the setup of CakePHP 2.x <a href="http://miftyisbored.com/a-complete-tutorial-on-cakephp-and-ajax-forms-using-jquery/">here </a> </p>

            <div id="loading" style="display: none;">
                <div class="alert alert-info" role="alert">
                    <i class="fa fa-spinner fa-spin"></i> Please wait...</div>
            </div>

            <div id="cityUpdate"></div>
            <?php
            echo $this->Form->create(
                    $timezone, [
                'url' => [
                    'action' => 'ajax_get_time'
                ],
                'name' => 'TimezoneForm',
                'data-update' => 'cityUpdate', // the id of the div we want to return data to       
                'data-loading' => 'loading', // the id of the div we want to display the loading spinner
            ]);
            echo $this->Form->input('city', array('label' => 'Enter the city name', 'placeholder' => 'Enter the name of the city'));
            echo $this->Form->submit('Get City Time', array(
                'class' => 'btn btn-primary',
                'title' => 'Get Time', 'id' => 'citySubmit'));
            echo $this->Form->end();
            ?>
            <p></p>
            <p>Enter any of the following cities in the text-field above to get their current local time: 
                <?php echo $this->Html->nestedList($city_list); ?>
            </p>

            <?php //debug($timezone);  ?>
        </div>
    </div>
    </div>