#!/bin/bash

BASE_PACKAGE_DIR="./src"
BASE_INVOKER_PACKAGE="TNT\\Ebay"
BASE_PACKAGE_NAME="ebay"
GITHUB_NAME="trollandtoad"

OPENAPI_GENERATOR=$(which openapi-generator-cli 2>/dev/null)
PHP_CS_FIXER=$(realpath ./vendor/bin/php-cs-fixer)
FILENAME_REGEX="^([a-zA-Z]+)_([a-zA-Z]+)_?([A-Za-z]+)*_(v[0-9])_(beta)*_?oas[23]\.yaml$"

# Ensure we can find the openapi-generator-cli executable.
if [[ ! -x "$OPENAPI_GENERATOR" ]]; then
  echo "Cannot find executable openapi-generator-cli file. Please try again."
  exit 1
fi

# Ensure composer is available.
if [[ ! -x "$PHP_CS_FIXER" ]]; then
  echo "Cannot find executable composer. Please try again."
  exit 1
fi

# Add bat file to php-cs-fixer script if running under a windows type environment.
if [[ "$OSTYPE" != "linux-gnu"* ]] || [[ "$OSTYPE" != "darwin"* ]] || [[ "$OSTYPE" != "freebsd"* ]]; then
  echo "Running under windows. Adding .bat to executable..."
  PHP_CS_FIXER="$PHP_CS_FIXER.bat"
fi

export PHP_POST_PROCESS_FILE="$PHP_CS_FIXER fix --config=./.php-cs-fixer.sdk.php --using-cache=no "

# Clean output directory.
rm -rf "$BASE_PACKAGE_DIR"

# Generate each API for Ebay.
for openapispec in ./api-specs/*_oas*.yaml; do
  # If we don't find the OpenAPI file, skip with
  if [[ -f "$openapispec" ]]; then

    # Clean file path name to get just the file name, and pull out the api name and sub name from the file name.
    CLEAN_API_SPEC_NAME="${openapispec#"./api-specs/"}"
    # Use regex to parse filename to grab pieces we need.
    [[ "$CLEAN_API_SPEC_NAME" =~ $FILENAME_REGEX ]];

    API_NAME="${BASH_REMATCH[1]}"
    API_SUB_NAME="${BASH_REMATCH[2]}"
    API_SUB_NAME_PROPER="${API_SUB_NAME^}"
    API_VERSION="${BASH_REMATCH[4]}"

    # Check for optional 2nd sub-name part.
    if [[ "${BASH_REMATCH[3]}" != "" ]]; then
      API_SUB_NAME="$API_SUB_NAME-${BASH_REMATCH[3]}"
      API_SUB_NAME_PROPER="$API_SUB_NAME_PROPER${BASH_REMATCH[3]^}"
    fi

    # Check for beta indicator.
    if [[ "${BASH_REMATCH[5]}" != "" ]]; then
      API_SUB_NAME="${API_SUB_NAME}-beta"
      API_SUB_NAME_PROPER="${API_SUB_NAME_PROPER}Beta"
    fi

    echo "===========> Generating OpenAPI library from file $openapispec with API name $API_NAME/$API_SUB_NAME"
    echo ""

    # Run command to generate openapi library.
    "$OPENAPI_GENERATOR" generate -i "$openapispec" -g php -o "$BASE_PACKAGE_DIR/${API_NAME^}/$API_SUB_NAME_PROPER/${API_VERSION^}" \
    --additional-properties=invokerPackage="$BASE_INVOKER_PACKAGE"\\"${API_NAME^}"\\"$API_SUB_NAME_PROPER"\\"${API_VERSION^}" \
    --additional-properties=packageName="$GITHUB_NAME"/"$BASE_PACKAGE_NAME"-"$API_NAME"-"$API_SUB_NAME"-"$API_VERSION" \
    --additional-properties=composerPackageName="$GITHUB_NAME"/"$BASE_PACKAGE_NAME"-"$API_NAME"-"$API_SUB_NAME"-"$API_VERSION" \
    --global-property=apiTests=false --global-property=modelTests=false --additional-properties=srcBasePath=\"\" \
    --git-user-id \""$GITHUB_NAME"\" --git-repo-id \""$BASE_PACKAGE_NAME"-"$API_NAME"-"$API_SUB_NAME"-"$API_VERSION"\" \
    -t ./templates --enable-post-process-file

    # Make test directory for each library.
    mkdir -p ./tests/Unit/${API_NAME^}/$API_SUB_NAME_PROPER/${API_VERSION^}

    echo ""
  else
    echo "Cannot find OpenAPI spec file at $openapispec, Skipping file..."
  fi
done
