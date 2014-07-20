epigone
===
A simple WordPress boilerplate theme.

# Featured

* Gulp
* Bower
* BrowserSync
* Profound Grid

# Require

* node.js
* gulp.js
* Sass >= 3.2.5

# Getting Started

### 1. Install

Go to the theme directory and type this command.

	$ git clone https://github.com/1shiharaT/epigone.git epigone

or [download](https://github.com/roots/roots/archive/master.zip) it and then rename the directory to the name of your theme or website.

### 2. npm install

Navigate to the theme directory & then run from the command line:

	$ npm install

### 3. Setting gulpfile.js

1. change BrowserSync settings.

	// browser sync
	gulp.task('browserSync', function() {
		browserSync.init(null, {
			notify: true,
			proxy: {
				host: "your-domain.dev", // replace
				// port: 3333
			},
			ghostMode: {
				clicks: true,
				location: true,
				forms: true,
				scroll: false
			}
		});
	});

2. 1 line added to wp-config.php

define( 'EPIGONE_DEVELOPMODE', true );


3. Starting the Gulp.

	$ gulp watch



