<?php
include_once('./simplepie/autoloader.php');
?>
<?php
$feed1 = new SimplePie();
$feed1->set_feed_url('http://www.exploit-db.com/rss.xml');
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
$feed2->set_feed_url('http://rss.packetstormsecurity.com/files/tags/advisory/');
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
$feed3->set_feed_url('http://rss.packetstormsecurity.com/news/tags/zero_day/');
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
$feed4->set_feed_url('http://www.securityfocus.com/rss/vulnerabilities.xml');
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
$feed5->set_feed_url('http://cxsecurity.com/cverss/fullmap/');
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
$feed6->set_feed_url('http://blogs.technet.com/b/msrc/rss.aspx');
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
$feed7->set_feed_url('http://seclists.org/rss/microsoft.rss');
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
$feed8->set_feed_url('http://www.us-cert.gov/ncas/alerts.xml');
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
$feed9->set_feed_url('http://www.us-cert.gov/ncas/bulletins.xml');
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
$feed10->set_feed_url('http://www.us-cert.gov/ncas/current-activity.xml');
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
$feed11->set_feed_url('http://news.securitytracker.com/server/affiliate?61D319BD39309004');
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
