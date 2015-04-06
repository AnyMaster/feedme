#!/bin/sh
# should be run from cron like:
# 0 0,4,8,12,16,20 * * * root     /var/www/feeds/feedme_dump.sh
cd /var/www/feedme/src
php News.php > /var/www/feedme/src/tab1.html
php MLs.php > /var/www/feedme/src/tab2.html
php SocialMedia.php > /var/www/feedme/src/tab3.html
php Vulns.php > /var/www/feedme/src/tab4.html
php CyberCrime.php > /var/www/feedme/src/tab5.html
php Blogs.php > /var/www/feedme/src/tab6.html
php Malware.php > /var/www/feedme/src/tab7.html
php CTF.php > /var/www/feedme/src/tab8.html
php Others.php > /var/www/feedme/src/tab9.html
