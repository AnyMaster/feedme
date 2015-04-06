DEBUG=1
dict = {'CAT1': 'News', 'CAT2': 'MLs', 'CAT3': 'SocialMedia', 'CAT4': 'Vulns', 'CAT5': 'CyberCrime', 'CAT6': 'Blogs', 'CAT7': 'Malware', 'CAT8': 'CTF', 'CAT9': 'Others'};

for category, cat_name in dict.items():
	if DEBUG == 1:
		print "%s is %s" % (category, cat_name)

	lines = open('links/' + cat_name + '.txt').read().splitlines()
	f = open('src/' + cat_name + '.php','w') 
	
	counter = 0
	
	f.write("<?php\n")
	f.write("include_once('./simplepie/autoloader.php');\n")
	f.write("?>\n")
	
	for line in lines:
		if DEBUG == 1:
			print line
		counter += 1	
                f.write("<?php\n")
                f.write("$feed" + str(counter) + " = new SimplePie();\n")
                f.write("$feed" + str(counter) + "->set_feed_url('" + line + "');\n")
                f.write("$feed" + str(counter) + "->force_feed(true);\n")
                f.write("$feed" + str(counter) + "->force_fsockopen(true);\n")
                f.write("$feed" + str(counter) + "->init();\n")
                f.write("$feed" + str(counter) + "->set_cache_location('cache');\n")
                f.write("?>\n")
                f.write("<h4><?php print $feed" + str(counter) + "->get_title(); ?></h4>\n")
                f.write("<ul>\n")
                f.write("<?php foreach ($feed" + str(counter) + "->get_items(0, 5) as $item): ?>\n")
                f.write("<li>\n")
                f.write('<a href="<?php print $item->get_permalink(); ?>">\n')
                f.write('<?php print $item->get_title(); ?></a>\n')
                f.write('</li>\n')
                f.write('<?php endforeach; ?>\n')
                f.write('</ul>\n')
	f.close()
