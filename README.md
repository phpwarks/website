# Read me

Run `$ vagrant up` and give it around 8 minutes to build.

> There is a know issue where the `php-fpm` service does not start, to rectify, simply run `$ sudo service php-fpm start`.

To build all required assets, simply run `make build`, then composer will be installed and SASS compiling will be ran.

> Run `make help` for more information

__Directories:__

#### /app

This is generally the application configurations of the site

#### /public

The entry point for the web server.

#### /web

Where the magic happens. A URI will be associated with an action.