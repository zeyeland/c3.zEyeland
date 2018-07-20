<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('islander_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('islander_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mind') ?></th>
                <th scope="col"><?= $this->Paginator->sort('spirit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('level') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('purse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('honor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('health') ?></th>
                <th scope="col"><?= $this->Paginator->sort('islander_focus') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->islander_id) ?></td>
                <td><?= h($user->islander_name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= $this->Number->format($user->body) ?></td>
                <td><?= $this->Number->format($user->mind) ?></td>
                <td><?= $this->Number->format($user->spirit) ?></td>
                <td><?= $this->Number->format($user->level) ?></td>
                <td><?= $this->Number->format($user->exp) ?></td>
                <td><?= $this->Number->format($user->purse) ?></td>
                <td><?= $this->Number->format($user->honor) ?></td>
                <td><?= $this->Number->format($user->health) ?></td>
                <td><?= h($user->islander_focus) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->islander_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->islander_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->islander_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->islander_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
