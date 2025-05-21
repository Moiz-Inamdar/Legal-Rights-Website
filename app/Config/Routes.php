<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Amdin Routes

$routes->get('login', 'AdminController::login');
$routes->post('login', 'AdminController::authLogin');
$routes->get('logout', 'AdminController::logout');
$routes->get('reset-password', 'AdminController::resetPassword');
$routes->post('reset-password', 'AdminController::passwordUpdate');
$routes->get('admin/rights', 'AdminController::rightlist', ['filter' => ['authorize']]);
$routes->post('admin/right-save', 'AdminController::rightSave', ['filter' => ['authorize']]);
$routes->get('admin/articles', 'AdminController::articlelist',['filter' => ['authorize']]);
$routes->post('admin/article-save', 'AdminController::articleSave',['filter' => ['authorize']]);
$routes->post('admin/delete-data', 'AdminController::deleteData',['filter' => ['authorize']]);

$routes->get('admin/categories', 'AdminController::categoryList', ['filter' => ['authorize']]);
$routes->post('admin/category-save', 'AdminController::categorySave', ['filter' => ['authorize']]);
$routes->get('admin/laws', 'AdminController::lawList');
$routes->post('admin/law-save', 'AdminController::lawSave');
// Web/User routes
$routes->get('/', 'Home::index');
$routes->get('rights', 'Home::userRights');
$routes->get('right/(:num)', 'Home::rightDetail/$1');
$routes->get('articles', 'Home::userArticles');
$routes->get('article/(:num)', 'Home::articleDetail/$1');
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');



































# extra links

$routes->post('right-save', 'AdminController::rightSave');
$routes->get('categories', 'AdminController::categoryList');
$routes->post('category-save', 'AdminController::categorySave');
$routes->get('laws', 'AdminController::lawList');
$routes->post('law-save', 'AdminController::lawSave');
$routes->get('articles', 'AdminController::articlelist');
$routes->post('article-save', 'AdminController::articleSave');
$routes->post('delete-data', 'AdminController::deleteData');


