<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bookmark'), ['controller' => 'Bookmarks', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="users index large-9 medium-8 columns content">
<h2>
    Bookmarks tagged with <?= $this->Text->toList($tags) ?>
</h2>

<section>
<?php foreach ($bookmarks as $bookmark): ?>
    <article>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link($bookmark->title, $bookmark->url, ['target' => '_blank']) ?></h4>
        <small><?= $this->Text->autoLink(h($bookmark->url)) ?></small>
        <!-- Use the TextHelper to format text -->
        <?= $this->Text->autoParagraph($bookmark->description) ?>
    </article>
<?php endforeach; ?>
</section>
</div>