<?php
// src/Template/Layout/timezone.ctp
use Cake\Core\Configure;

$cakeVersion = Configure::version();
$this->assign('title', $title);
$this->prepend('title', "A prepended argument ");

?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        // echo $this->Html->css('cake.generic');
        ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?php
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->Html->script([
            'https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
            'global'
            ], [
                'block' => 'scriptBottom'
                ]
                );
        echo $this->Html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css');
        echo $this->Html->css('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
        ?>
        
    </head>
    <body>
        <div id="container">
            <div id="content">

                <?= $this->Flash->render('auth') ?>
<?= $this->Flash->render() ?>

                <?= $this->fetch('content') ?>
                <?php
                // Append into the 'script' block.
                $this->Html->scriptStart(['block' => true]);
                echo "console.log('I am in the JavaScript');";
                $this->Html->scriptEnd();
                ?>
            </div>

        </div>
        <div style="margin-left: 40px;">

            <footer>

                <?php
                echo $this->Html->link(
                        $this->Html->image('cake.power.gif', array('alt' => "The Cake Logo", 'border' => '0')), 'http://www.cakephp.org/', array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
                );
                ?>

                <span style="font-size: .7em;"><?php echo $cakeVersion; ?></span>

            </footer>
        </div>
<?php
// echo $this->Js->writeBuffer(); // Write cached scripts
echo $this->fetch('scriptBottom');  // fetch our scritBottom
echo $this->fetch('script');
?>
    </body>
</html>
