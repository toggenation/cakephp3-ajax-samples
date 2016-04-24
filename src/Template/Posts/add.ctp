<?php echo $this->Html->script('add_edit', [
    'inline' => false,
    'block' => 'script'
    ]) ?>

<div class="container-fluid">
<nav class="col-md-2">
    <ul class="side-nav nav nav-stacked">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="col-md-10">
    <?=
    $this->Form->create(
            $post, [
        'url' => [
            'action' => 'ajax_edit'
        ],
        'data-redirect' => $this->Url->build(['action' => 'index']),
        'data-ajax' => 'ajax_edit'
            ]
    )
    ?>
    <fieldset>
        <legend><?= __('Add Post') ?></legend>
        <?php
        echo $this->Form->input('title');
        echo $this->Form->input('body');
        ?>
    </fieldset>

    <div id="loadingDiv" style="display:none;">
        <?php echo $this->Html->image('ajax-loader.gif', array('alt' => 'Loading...')); ?>
    </div>

    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>

</div>
    </div>