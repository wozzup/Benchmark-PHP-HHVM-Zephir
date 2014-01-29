#! /usr/bin/env bash
ARG=1000
if [ "$1" != "" ]; then
    ARG="$1"
fi
/usr/bin/env time /usr/bin/env php -n -d "extension=treffynnonoptimizer/ext/modules/treffynnonoptimizer.so" -f test.php "$ARG" > /dev/null