<?php

/**
 * Gravatar url generator
 * @param  string  $email Email
 * @param  integer $size  Image size
 * @return string         Gravatar url
 */
function gravatar_url($email, $size = 40)
{
    return 'http://gravatar.com/avatar/' . md5($email) . "?s={$size}";
}

function link_to_task(Task $task)
{
    return link_to_route('user.tasks.show', $task->title, [$task->user->username, $task->id]);
}
