# Read me 

[![Build Status](https://travis-ci.org/phpwarks/website.svg?branch=master)](https://travis-ci.org/phpwarks/website)

This project is run fully on [Docker](https://docker.com), but don't worry you only have to install the [Docker engine](https://docker.github.io/engine/installation/) and [docker-compose](https://docs.docker.com/compose/install/).

#### Building the project

`make build`; yep, that's it in regards to getting the site containers provisioned. This will set up the site to run locally via [Docker](https://docker.com). It will pull all the images required ready for you to start building.

Next up, run `make composer-install`. If all goes according to plan you should be able to see the `vendor` directory appear in the project root.

#### Starting up the project

`make run` will start up the docker and allow you to see the site via `http://0.0.0.0/`.

On a side note, you will notice you terminal window is being populated with aggregated logs from all containers. TO hide this, simply run `make ARGS="-d" run`.

__Directories:__

#### /app

This is generally the application configurations of the site

#### /public

The entry point for the web server.

#### /web

Where the magic happens. A URI will be associated with an action.
