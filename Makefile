##################################################################
# Build script for the PHP Warks site
#
# @author Nigel Greenway <github@futurepixels.co.uk>
##################################################################

####
## SASS variables
####
SASS_SRC=web/Core/Assets/Styles/main.scss
SASS_DEST=public/css/style.css

####
## Project variables
####
ENV?=dev
PRODUCTION=prod
PROJECT_DIRECTORY := $(shell pwd)
## End of variable setup ##

# Defaults for running `make` on its own
all: help

# Used for building the dependencies for the project
build: _building _build composer-install yarn sass
	@echo "Build complete"
	@echo "Please add phpwarks.dev to your hosts file."

# Start the docker containers
run:
	@docker-compose up $(ARGS)

# Used for continuous development of the project locally
watch:
	sass --watch  --style compressed --trace $(SASS_SRC):$(SASS_DEST) --sourcemap=none

composer-install:
ifeq (${ENV},${PRODUCTION})
	@docker run --rm -v ${PROJECT_DIRECTORY}:/app composer/composer install -o
else
	@docker run --rm -v ${PROJECT_DIRECTORY}:/app composer/composer install
endif

yarn:
	@yarn
	@cp node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js public/js/
	@cp -R node_modules/font-awesome/fonts/ public/fonts/

# Compile SASS to a CSS file
sass:
	@sass $(SASS_SRC):$(SASS_DEST) --sourcemap=none --style compressed --trace

help:
	@echo "  PHPWarks build help"
	@echo ""
	@echo "      help              Show this help console"
	@echo "      watch             Watch the SASS"
	@echo "      build             Install all"
	@echo "      run               Run `docker-compose up`."
	@echo "                        You have the possibilities to pass docker-composer arguments like so:"
	@echo "                        `make ARGS=-d` will run the command but without tailing the logs"
	@echo "      composer-install  Update/Install composer vendors"
	@echo "      sass              Compile CSS from the SASS files"
	@echo ""
	@echo "  Optional:"
	@echo ""
	@echo "      env               Used to set up the environment for production ready,"
	@echo "                        this will not install development dependencies. This defaults"
	@echo "                        to dev."
	@echo "                        example:"
	@echo "                            eg: env=prod"

clean:
	@rm -rf ./vendor
	@rm -f $(SASS_DEST)
	@echo "Removed `vendor` and `$(SASS_DEST)` successfully"

_building:
	@echo "Installing project dependencies"

_build:
	@docker-compose build
