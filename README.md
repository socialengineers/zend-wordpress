# Zend Wordpress ![Project Status](http://stillmaintained.com/wdalmut/zend-wordpress.png)  -  [![Build Status](https://secure.travis-ci.org/wdalmut/zend-wordpress.png)](http://travis-ci.org/wdalmut/zend-wordpress?branch=master)

## Brief Description

This is a Wordpress XMLRPC connector for Zend Framework based projects, other PHP frameworks based applications and baseline PHP applications.

This library allows you to connect and perform operations on remote Wordpress installations from other applications. You can add pages, posts, work with authors and use many other Wordpress features remotely.

## Features

 * Connect to multiple Wordpress blogs with one connection
 * Get user list and user information from remote blogs
 * Create, Retrive, Update and Delete pages (Pages CRUD)
 * Create, Retrive, Update and Delete posts (Posts CRUD)
 * Change page status, draft, publish and so on.
 * Change posts status, draft, publish and so on.
 * Get tags form your blog instance
 * Get categories from your blog instance
 * Get comments from articles
 * Create, edit and moderate comments for articles (Comments CRUD)
 * Get users of all your blogs or any specific blog
 * PEAR Packages available http://pear.walterdalmut.com
 * Finder and Sorter methods available on all available fields.

This library use the ZF1 autoloader, and it is written for working on PHP 5.x or later.

## Base Wordpress connection

```php
<?php
$wp = new Wally_Wordpress("your-site-name.com", "username", "password");

//Retrive page list and use magic finder methods for get a single page.

//Get all pages
$pages = $wp->getPages();
$page = $pages->findOneByUsername("walter");

//Sort pages ascending by title
$pages->sortByTitleOrderAsc(); //Sort ascending by title
```

