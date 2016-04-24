<?php echo $this->Html->script('add_edit', [
    'inline' => false,
    'block' => 'script']) ?>

<nav class="col-md-2">
    <ul class="nav side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="col-md-10">
    <?= $this->Form->create($post, 
            [   'data-ajax' => 'ajax_edit',
                'data-redirect' => $this->Url->build(['action' => 'index']),
                'url' => [
                    'action' => 'ajax_edit'
                    ]
        ]) ?>
    <fieldset>
        <legend><?= __('Edit Post') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
        ?>
    </fieldset>
    <div id="loadingDiv" style="display:none;">
        <?php echo $this->Html->image('ajax-loader.gif', array('alt' => 'Loading...')); ?>
    </div>
    <?= $this->Form->button(__('Submit'), ['class' => 'primary']) ?>
    <?= $this->Form->end() ?>
</div>
