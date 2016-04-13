<div class="container"> <!-- posts -->
    <div class="row">
        <div class="col-md-2">
            <nav class="nav nav-stacked" id="actions-sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li class="heading"><?= __('Actions') ?></li>
                    <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?></li>
                    <li><?=
                        $this->Html->link(
                                __('View as XML'), [
                            'action' => 'index', '_ext' => 'xml'], ['title' => 'View all Posts as XML'])
                        ?></li>
                    <li><?=
                        $this->Html->link(
                                __('View as JSON'), [
                            'action' => 'index', '_ext' => 'json'], ['title' => 'View all Posts as JSON'])
                        ?></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-10">

            <h3><?= __('Posts') ?></h3>
            <?php if (!empty($qs)): ?>
                <ul>
                    <?php foreach ($qs as $k => $v): ?>
                        <li><?php echo $k . " : " . $v; ?> </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('title') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= $this->Number->format($post->id) ?></td>
                            <td><?= h($post->title) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <nav>
                <ul class="pagination">
                    <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape' => false]) ?>
                     <?= $this->Paginator->numbers([
                'after' => '</li>',
                'before' => '<li class="pagination">'
            ]) ?>
                    <?= $this->Paginator->next(__('next') . ' &raquo;' , ['escape' => false]) ?>
                </ul>
               
                <p><?= $this->Paginator->counter() ?></p>
            </nav>
        </div>
    </div>  
</div>