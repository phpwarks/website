##################################################################
# Build script for the PHP Warks site
#
# @author Nigel Greenway <github@futurepixels.co.uk>
##################################################################

####
## SASS variables
####
SASS_SRC=web/Core/Asset/Style/main.scss
SASS_DEST=public/css/style.css

####
## Project variables
####
PRODUCTION=prod

## End of variable setup ##

# Defaults for running `make` on its own
all: help

# Used for building the dependencies for the project
build: _building composer sass
	@echo "Build complete"

# Used for continuous development of the project locally
watch:
	sass --watch  --style compressed --trace $(SASS_SRC):$(SASS_DEST) --sourcemap=none

composer:
ifdef env
ifeq ($(env),$(PRODUCTION))
	@composer install --no-dev -o
else
	@composer install
endif
else
	@composer install
endif

# Compile SASS to a CSS file
sass:
	@sass $(SASS_SRC):$(SASS_DEST) --sourcemap=none --style compressed --trace

help:
	@echo "  PHPWarks build help"
	@echo ""
	@echo "      help              Show this help console"
	@echo "      watch             Watch the SASS"
	@echo "      build             Install all"
	@echo "      composer          Update/Install composer vendors"
	@echo "      sass              Compile CSS from the SASS files"
	@echo ""
	@echo "  Optional:"
	@echo ""
	@echo "      env               Used to set up the environment for production ready,"
	@echo "                        this will not install development dependencies."
	@echo "                        example:"
	@echo "                            eg: env=prod"

clean:
	@rm -rf ./vendor
	@rm -f $(SASS_DEST)
	@echo "Removed `vendor` and `$(SASS_DEST)` successfully"

_building:
	@echo "Installing project dependencies"
