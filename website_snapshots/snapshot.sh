#!/bin/bash

URL=$1
NEWPATH=`echo "http://docs.python-guide.org/en/latest/writing/structure/" | awk -F"://" '{print $2}'`  # cut http://
NEWPATH=${NEWPATH%/} # cut trailing /

curl --create-dirs $URL -o $NEWPATH