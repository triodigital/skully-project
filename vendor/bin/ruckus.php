#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../ruckusing/ruckusing-migrations"
BIN_TARGET="`pwd`/ruckus.php"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
