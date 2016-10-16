# CakePHP Application Starter

master

[![Build Status](https://travis-ci.org/taras-budzyn/CakePHP-AppStarter.svg?branch=master)](https://travis-ci.org/taras-budzyn/CakePHP-AppStarter)
[![codecov](https://codecov.io/gh/taras-budzyn/CakePHP-AppStarter/branch/master/graph/badge.svg)](https://codecov.io/gh/taras-budzyn/CakePHP-AppStarter)
[![Code Climate](https://codeclimate.com/github/taras-budzyn/CakePHP-AppStarter/badges/gpa.svg)](https://codeclimate.com/github/taras-budzyn/CakePHP-AppStarter)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)
___
dev

[![Build Status](https://travis-ci.org/taras-budzyn/CakePHP-AppStarter.svg?branch=dev)](https://travis-ci.org/taras-budzyn/CakePHP-AppStarter)
[![codecov](https://codecov.io/gh/taras-budzyn/CakePHP-AppStarter/branch/dev/graph/badge.svg)](https://codecov.io/gh/taras-budzyn/CakePHP-AppStarter)
___
The base for creating applications with [CakePHP](http://cakephp.org) 3.3.x.

Framework with basic admin panel, posts, categories, users and tags (like simple blog website).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Install dependencies

  `composer install`

3. Edit `config/app.php` and setup the 'Datasources' access to MySQL database. Add already created empty DB for site.

4. Run migration to init DB tables

  `bin/cake migrations migrate`

Also it will create SuperAdmin user, so it will allow to access to Admin panel of site (email - admin@admin; pass - admin).
**NOTE:** You should change the password of this user or create new superadmin when will deploy site to production.


## Run application (only for development)

  `bin/cake server`
