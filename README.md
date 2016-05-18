# design.rax.io

[![Build Status](https://travis-ci.com/araiford/design.rax.io.svg?token=SU2zWAESxgz3Fsdqmsv4&branch=master)](https://travis-ci.com/araiford/design.rax.io)

This repo contains the source code for the internal blog of Rackspace Experience Design. For details on infrastructure hosting the site, including firewalls and logins see our [Rackspace Wiki page](https://one.rackspace.com/display/RED/design.rax.io).


# Dev Environment Setup

This article will walk you through setting up a local development environment.  

This does not cover setting up a database server.  We rely on the idea that most people with moderate development skills likely know how to use [MAMP or MAMP PRO](https://www.mamp.info/en/) to setup MySQL locally.

This walkthrough assumes you have already cloned the repo to your box.

The steps are as follows:

1. [Install NodeJS](#install-nodejs)
2. [Install Gulp](#install-gulp-bower)
3. [Install Node Packages](#install-node-packages)
4. [Install Libraries](#install-libraries)
5. [Point The Build Script at Your Local URL](#point-red-at-localhost)
6. [Build the Theme](#build-theme)
7. [Start the Server](#start-server)


----


<a id="install-nodejs"></a>
## 1. Install NodeJS

- Install NVM (Node Version Manager)
```
curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.31.0/install.sh | bash
```
- Close your terminal window and re-open it
- Install Node with NVM
```
nvm install node
```

----


<a id="install-gulp-bower"></a>
## 2. Install Bower & Gulp

* Install bower and gulp
```
npm install -g gulp
npm install -g bower
```

----


<a id="install-node-packages"></a>
## 3. Install Node Packages

- Navigate to the directory the red theme is in: wp-content/themes/red
- Install node packages
```
npm install
```
----


<a id="install-libraries"></a>
## 4. Install libraries

- Install app libraries (Bootstrap and jQuery)
```
bower install
```
- If bower install fails because it couldn't connect to github and you are on the Rackspace Netwowrk, then run:
```
git config --global url."https://".insteadOf git://
```

----


<a id="point-red-at-localhost"></a>
## 5. Point The Build Script at Your Local URL

- In wp-content/themes/red/assets/manifest.json change dev URL to your local dev URL
- Below is just an example:
```
"config": {
    "devUrl": "http://localhost:8888/design.rax.io/"
  }
```

----


<a id="build-theme"></a>
## 6. Build the Theme

- run following in the red theme folder 
```
gulp build
```
- This does all the SASS, JS and image precompiling.


----


<a id="start-server"></a>
## 7. Start the Server

- run following in the red theme folder 
```
gulp watch
```
- this will start a web server that proxies to the Local URL you specified.
- This is purely for purpose of using BrowserSync, which automatically refreshes your browser when you save changes to the code.

----



## Code Commits

We follow the commit syntax defined in the (AngularJS Contribution Guide)[https://github.com/angular/angular.js/blob/master/CONTRIBUTING.md#user-content-type].

