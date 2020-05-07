#Package
* Get package `package template` from git
* Read MD file
* Try to install bin/*.sh
* Skipp shell scripts on failed.
* Set up all manually

#Make db
* create db
* create user
* add permissions.

#Install Wordpress
* next -> next -> next

#Making plugin
* Admin page.
split html, js and php to separated files
skipp autoload to make this plugin ASAP
skipp nonce security steps, as not required in task
create Crawler class with engine
create Storage class to take responsibility for save cache and permanent data, external to avoid breaking SOLID
create gitHub repo with tests - Travis fails on bash script 
```bash
The command "if [[ ! -z "$WP_VERSION" ]] ; then
```

[![Build Status](https://travis-ci.com/bluebat-pl/wpmedia.svg?branch=master)](https://travis-ci.com/bluebat-pl/wpmedia)..
