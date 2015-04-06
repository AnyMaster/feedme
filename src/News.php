<?php
include_once('./simplepie/autoloader.php');
?>
<?php
$feed1 = new SimplePie();
$feed1->set_feed_url('http://rss.packetstormsecurity.com/news/');
$feed1->force_feed(true);
$feed1->force_fsockopen(true);
$feed1->init();
$feed1->set_cache_location('cache');
?>
<h4><?php print $feed1->get_title(); ?></h4>
<ul>
<?php foreach ($feed1->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed2 = new SimplePie();
$feed2->set_feed_url('http://rss.packetstormsecurity.com/files/');
$feed2->force_feed(true);
$feed2->force_fsockopen(true);
$feed2->init();
$feed2->set_cache_location('cache');
?>
<h4><?php print $feed2->get_title(); ?></h4>
<ul>
<?php foreach ($feed2->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed3 = new SimplePie();
$feed3->set_feed_url('http://www.theregister.co.uk/security/headlines.atom');
$feed3->force_feed(true);
$feed3->force_fsockopen(true);
$feed3->init();
$feed3->set_cache_location('cache');
?>
<h4><?php print $feed3->get_title(); ?></h4>
<ul>
<?php foreach ($feed3->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed4 = new SimplePie();
$feed4->set_feed_url('http://feeds.feedburner.com/SecurityBloggersNetwork');
$feed4->force_feed(true);
$feed4->force_fsockopen(true);
$feed4->init();
$feed4->set_cache_location('cache');
?>
<h4><?php print $feed4->get_title(); ?></h4>
<ul>
<?php foreach ($feed4->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed5 = new SimplePie();
$feed5->set_feed_url('https://isc.sans.edu/rssfeed_full.xml');
$feed5->force_feed(true);
$feed5->force_fsockopen(true);
$feed5->init();
$feed5->set_cache_location('cache');
?>
<h4><?php print $feed5->get_title(); ?></h4>
<ul>
<?php foreach ($feed5->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed6 = new SimplePie();
$feed6->set_feed_url('http://www.heise.de/security/news/news-atom.xml');
$feed6->force_feed(true);
$feed6->force_fsockopen(true);
$feed6->init();
$feed6->set_cache_location('cache');
?>
<h4><?php print $feed6->get_title(); ?></h4>
<ul>
<?php foreach ($feed6->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed7 = new SimplePie();
$feed7->set_feed_url('http://www.ehackingnews.com/feeds/posts/default');
$feed7->force_feed(true);
$feed7->force_fsockopen(true);
$feed7->init();
$feed7->set_cache_location('cache');
?>
<h4><?php print $feed7->get_title(); ?></h4>
<ul>
<?php foreach ($feed7->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed8 = new SimplePie();
$feed8->set_feed_url('http://news.cnet.com/8300-1009_3-83.xml');
$feed8->force_feed(true);
$feed8->force_fsockopen(true);
$feed8->init();
$feed8->set_cache_location('cache');
?>
<h4><?php print $feed8->get_title(); ?></h4>
<ul>
<?php foreach ($feed8->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed9 = new SimplePie();
$feed9->set_feed_url('https://news.google.com/news/feeds?pz=1&cf=all&ned=us&hl=en&q=hacking&output=rss');
$feed9->force_feed(true);
$feed9->force_fsockopen(true);
$feed9->init();
$feed9->set_cache_location('cache');
?>
<h4><?php print $feed9->get_title(); ?></h4>
<ul>
<?php foreach ($feed9->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed10 = new SimplePie();
$feed10->set_feed_url('https://news.google.com/news/feeds?pz=1&cf=all&ned=us&hl=en&q=computer+security&output=rss');
$feed10->force_feed(true);
$feed10->force_fsockopen(true);
$feed10->init();
$feed10->set_cache_location('cache');
?>
<h4><?php print $feed10->get_title(); ?></h4>
<ul>
<?php foreach ($feed10->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed11 = new SimplePie();
$feed11->set_feed_url('http://feeds.feedburner.com/TheHackersNews');
$feed11->force_feed(true);
$feed11->force_fsockopen(true);
$feed11->init();
$feed11->set_cache_location('cache');
?>
<h4><?php print $feed11->get_title(); ?></h4>
<ul>
<?php foreach ($feed11->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed12 = new SimplePie();
$feed12->set_feed_url('http://seclists.org/rss/isn.rss');
$feed12->force_feed(true);
$feed12->force_fsockopen(true);
$feed12->init();
$feed12->set_cache_location('cache');
?>
<h4><?php print $feed12->get_title(); ?></h4>
<ul>
<?php foreach ($feed12->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed13 = new SimplePie();
$feed13->set_feed_url('http://www.infosecisland.com/rss.html');
$feed13->force_feed(true);
$feed13->force_fsockopen(true);
$feed13->init();
$feed13->set_cache_location('cache');
?>
<h4><?php print $feed13->get_title(); ?></h4>
<ul>
<?php foreach ($feed13->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed14 = new SimplePie();
$feed14->set_feed_url('http://datalossdb.org/latest_incidents_remote_sync.rss');
$feed14->force_feed(true);
$feed14->force_fsockopen(true);
$feed14->init();
$feed14->set_cache_location('cache');
?>
<h4><?php print $feed14->get_title(); ?></h4>
<ul>
<?php foreach ($feed14->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed15 = new SimplePie();
$feed15->set_feed_url('http://www.zdnet.com/blog/security/rss.xml');
$feed15->force_feed(true);
$feed15->force_fsockopen(true);
$feed15->init();
$feed15->set_cache_location('cache');
?>
<h4><?php print $feed15->get_title(); ?></h4>
<ul>
<?php foreach ($feed15->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed16 = new SimplePie();
$feed16->set_feed_url('http://software-security.sans.org/blog/feed/');
$feed16->force_feed(true);
$feed16->force_fsockopen(true);
$feed16->init();
$feed16->set_cache_location('cache');
?>
<h4><?php print $feed16->get_title(); ?></h4>
<ul>
<?php foreach ($feed16->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed17 = new SimplePie();
$feed17->set_feed_url('http://news.hitb.org/rss.xml');
$feed17->force_feed(true);
$feed17->force_fsockopen(true);
$feed17->init();
$feed17->set_cache_location('cache');
?>
<h4><?php print $feed17->get_title(); ?></h4>
<ul>
<?php foreach ($feed17->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed18 = new SimplePie();
$feed18->set_feed_url('http://www.securelist.com/en/rss/weblog');
$feed18->force_feed(true);
$feed18->force_fsockopen(true);
$feed18->init();
$feed18->set_cache_location('cache');
?>
<h4><?php print $feed18->get_title(); ?></h4>
<ul>
<?php foreach ($feed18->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed19 = new SimplePie();
$feed19->set_feed_url('http://www.infosecwriters.com/isw.xml');
$feed19->force_feed(true);
$feed19->force_fsockopen(true);
$feed19->init();
$feed19->set_cache_location('cache');
?>
<h4><?php print $feed19->get_title(); ?></h4>
<ul>
<?php foreach ($feed19->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed20 = new SimplePie();
$feed20->set_feed_url('http://www.zone-h.org/rss/news');
$feed20->force_feed(true);
$feed20->force_fsockopen(true);
$feed20->init();
$feed20->set_cache_location('cache');
?>
<h4><?php print $feed20->get_title(); ?></h4>
<ul>
<?php foreach ($feed20->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed21 = new SimplePie();
$feed21->set_feed_url('http://www.securitynewsportal.com/infosyssec/securitynewsportal.rss');
$feed21->force_feed(true);
$feed21->force_fsockopen(true);
$feed21->init();
$feed21->set_cache_location('cache');
?>
<h4><?php print $feed21->get_title(); ?></h4>
<ul>
<?php foreach ($feed21->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed22 = new SimplePie();
$feed22->set_feed_url('http://www.esecurityplanet.com/rss.xml');
$feed22->force_feed(true);
$feed22->force_fsockopen(true);
$feed22->init();
$feed22->set_cache_location('cache');
?>
<h4><?php print $feed22->get_title(); ?></h4>
<ul>
<?php foreach ($feed22->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed23 = new SimplePie();
$feed23->set_feed_url('http://www.v3.co.uk/feeds/rss/category/security');
$feed23->force_feed(true);
$feed23->force_fsockopen(true);
$feed23->init();
$feed23->set_cache_location('cache');
?>
<h4><?php print $feed23->get_title(); ?></h4>
<ul>
<?php foreach ($feed23->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed24 = new SimplePie();
$feed24->set_feed_url('http://feeds.feedburner.com/hacker10hacker10');
$feed24->force_feed(true);
$feed24->force_fsockopen(true);
$feed24->init();
$feed24->set_cache_location('cache');
?>
<h4><?php print $feed24->get_title(); ?></h4>
<ul>
<?php foreach ($feed24->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed25 = new SimplePie();
$feed25->set_feed_url('http://feeds.feedblitz.com/BetweenTheDots');
$feed25->force_feed(true);
$feed25->force_fsockopen(true);
$feed25->init();
$feed25->set_cache_location('cache');
?>
<h4><?php print $feed25->get_title(); ?></h4>
<ul>
<?php foreach ($feed25->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed26 = new SimplePie();
$feed26->set_feed_url('http://feeds.feedburner.com/securitynewsportal/bVvB?format=xml');
$feed26->force_feed(true);
$feed26->force_fsockopen(true);
$feed26->init();
$feed26->set_cache_location('cache');
?>
<h4><?php print $feed26->get_title(); ?></h4>
<ul>
<?php foreach ($feed26->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed27 = new SimplePie();
$feed27->set_feed_url('http://feeds.feedburner.com/CiscoBlogThePlatform');
$feed27->force_feed(true);
$feed27->force_fsockopen(true);
$feed27->init();
$feed27->set_cache_location('cache');
?>
<h4><?php print $feed27->get_title(); ?></h4>
<ul>
<?php foreach ($feed27->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
