# feedme
My own infosec news aggregator.

I wrote this while ago to keep me up to date with the large amount of infosec news showing up everyday.

It uses SimplePie (a very fast and easy-to-use feed parser, written in PHP). You can find it here http://simplepie.org/. For the lazy ones I've already included it in the repository.

The installation is pretty straightforward. Place the files on a directory of your web server and that's it. 

Basically you only need to add links to text files separated by category and run a python script (feedMe.py) that will create the PHP code needed. Next create a cronjob that runs feedme_dump.sh whenever you want and the news will be updated.

Should be pretty easy to modify and add more categories as long as you have a basic understanding of PHP and Python.

I should be updating the links from time to time since I started using it again, but do not expect any other updates. Feel free to use it as you whish.

![Alt text](screenshot.png?raw=true "Look and Feel")
