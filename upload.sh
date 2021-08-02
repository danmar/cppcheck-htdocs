#!/bin/bash
# Usage:
# upload.sh USER

cp -R . ~/tmp
cd ~/tmp
rm -rf .git
rm .gitattributes
rm .gitignore
rm LICENSE
rm README.md
rm upload.sh

scp -r . $1,cppcheck@web.sf.net:htdocs/

cd ~
rm -rf tmp
