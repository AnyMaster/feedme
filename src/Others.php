<?php
include_once('./simplepie/autoloader.php');
?>
<?php
$feed1 = new SimplePie();
$feed1->set_feed_url('http://feeds2.feedburner.com/SecurityTube');
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
$feed2->set_feed_url('http://securityweekly.com/podcast/psw.xml');
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
$feed3->set_feed_url('http://securityweekly.com/feed');
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
$feed4->set_feed_url('http://risky.biz/feeds/risky-business');
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
$feed5->set_feed_url('http://www.hackingarticles.in/feed/');
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
$feed6->set_feed_url('http://www.us-cert.gov/ncas/tips.xml');
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
$feed7->set_feed_url('http://blip.tv/rss/bookmarks/241768');
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
$feed8->set_feed_url('http://rss.packetstormsecurity.com/files/tags/tool/');
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
$feed9->set_feed_url('https://www.sans.org/reading-room/rss');
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
