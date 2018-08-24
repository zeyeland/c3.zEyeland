<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->islander_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->islander_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->islander_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->islander_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Islander Name') ?></th>
            <td><?= h($user->islander_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Islander Focus') ?></th>
            <td><?= h($user->islander_focus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Islander Id') ?></th>
            <td><?= $this->Number->format($user->islander_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Body') ?></th>
            <td><?= $this->Number->format($user->body) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mind') ?></th>
            <td><?= $this->Number->format($user->mind) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Spirit') ?></th>
            <td><?= $this->Number->format($user->spirit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($user->level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exp') ?></th>
            <td><?= $this->Number->format($user->exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Purse') ?></th>
            <td><?= $this->Number->format($user->purse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Honor') ?></th>
            <td><?= $this->Number->format($user->honor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Health') ?></th>
            <td><?= $this->Number->format($user->health) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QP') ?></th>
            <td><?= $this->Number->format($user->quest_points) ?></td>
        </tr>
    </table>
</div>
