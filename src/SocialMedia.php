<?php
include_once('./simplepie/autoloader.php');
?>
<?php
$feed1 = new SimplePie();
$feed1->set_feed_url('http://www.reddit.com/r/netsec/.rss');
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
$feed2->set_feed_url('http://www.reddit.com/r/blackhat/.rss');
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
$feed3->set_feed_url('http://www.reddit.com/r/computerforensics/.rss');
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
$feed4->set_feed_url('http://www.reddit.com/r/Malware/.rss');
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
$feed5->set_feed_url('http://www.reddit.com/r/ReverseEngineering/.rss');
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
$feed6->set_feed_url('http://www.reddit.com/r/rootkit/.rss');
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
$feed7->set_feed_url('http://www.reddit.com/r/SocialEngineering/.rss');
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
$feed8->set_feed_url('http://www.reddit.com/r/pwned/.rss');
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
$feed9->set_feed_url('http://www.reddit.com/r/crypto/.rss');
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
$feed10->set_feed_url('http://www.reddit.com/r/Cyberpunk/.rss');
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
$feed11->set_feed_url('http://www.reddit.com/r/HackBloc/.rss');
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
$feed12->set_feed_url('http://www.reddit.com/r/netsecstudents/.rss');
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
$feed13->set_feed_url('http://www.reddit.com/r/securityCTF/.rss');
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
$feed14->set_feed_url('http://www.reddit.com/r/vrd/.rss');
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
$feed15->set_feed_url('http://www.reddit.com/r/xss/.rss');
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
