<?php
require(__DIR__ . DS . 'helpers.php');

/*
* Pages
*/
kirby()->hook('panel.page.create', function ($page) {
	gitCommitContent('create(page): ' . $page->uri());
});
kirby()->hook('panel.page.update', function ($page) {
    echo "Saving!";
    gitCommitContent('update(page): ' . $page->uri());
});
kirby()->hook('panel.page.delete', function ($page) {
    gitCommitContent('delete(page): ' . $page->uri());
});
kirby()->hook('panel.page.sort', function ($page) {
    gitCommitContent('sort(page): ' . $page->uri());
});
kirby()->hook('panel.page.hide', function ($page) {
    gitCommitContent('hide(page): ' . $page->uri());
});
kirby()->hook('panel.page.move', function ($page) {
    gitCommitContent('move(page): ' . $page->uri());
});

/*
* File
*/
kirby()->hook('panel.file.move', function ($file) {
    gitCommitContent('move(file): ' . $file->page()->uri() . '/' . $file->filename());
});
kirby()->hook('panel.file.upload', function ($file) {
    gitCommitContent('upload(file): ' . $file->page()->uri() . '/' . $file->filename());
});
kirby()->hook('panel.file.replace', function ($file) {
    gitCommitContent('replace(file): ' . $file->page()->uri() . '/' . $file->filename());
});
kirby()->hook('panel.file.rename', function ($file) {
    gitCommitContent('rename(file): ' . $file->page()->uri() . '/' . $file->filename());
});
kirby()->hook('panel.file.update', function ($file) {
    gitCommitContent('update(file): ' . $file->page()->uri() . '/' . $file->filename());
});
kirby()->hook('panel.file.sort', function ($file) {
    gitCommitContent('sort(file): ' . $file->page()->uri() . '/' . $file->filename());
});
kirby()->hook('panel.file.delete', function ($file) {
    gitCommitContent('delete(file): ' . $file->page()->uri() . '/' . $file->filename());
});

/*
* Accounts
*/
kirby()->hook('panel.user.create', function ($user) {
    gitCommitAccounts('create(user): ' . $user->username());
});
kirby()->hook('panel.user.update', function ($user) {
    gitCommitAccounts('update(user): ' . $user->username());
});
kirby()->hook('panel.user.delete', function ($user) {
    gitCommitAccounts('delete(user): ' . $user->username());
});

/*
* Avatars
*/
kirby()->hook('panel.avatar.upload', function ($avatar) {
    gitCommitAvatars('upload(avatar): ' . $avatar->filename());
});
kirby()->hook('panel.avatar.delete', function ($avatar) {
    gitCommitAvatars('delete(avatar): ' . $avatar->filename());
});
