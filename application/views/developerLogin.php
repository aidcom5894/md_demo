<?php 

$this->load->view('master_page/ui_header');

?>


<div id="wrap-body">
<div class="chunk">

<form action="#" method="post" id="login" data-focus="username">
<div class="panel">
<div class="inner">

<div class="content">
<fieldset class="fields1">
<dl>
<dt><label for="username">Username:</label></dt>
<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="" class="inputbox autowidth" /></dd>
</dl>
<dl>
<dt><label for="password">Password:</label></dt>
<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="inputbox autowidth" autocomplete="off" /></dd>
</dl>
<dl>
<dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4" /> Remember me</label></dd>					<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> Hide my online status this session</label></dd>
</dl>

<input type="hidden" name="redirect" value="./ucp.php?mode=login&amp;redirect=index.php%3Fstyle%3D3&amp;style=3&amp;style=3" />
<input type="hidden" name="creation_time" value="1713667806" />
<input type="hidden" name="form_token" value="3375ada1df82ab64c97443a06af1970d42219721" />


<dl>
<dt>&nbsp;</dt>
<dd><input type="hidden" name="sid" value="93c5ab625063b5516eb6e55d1a33d83d" />
<input type="hidden" name="redirect" value="index.php?style=3" />
<input type="submit" name="login" tabindex="6" value="Login" class="button1" /></dd>
</dl>
</fieldset>
</div>

</div>
</div>



</form>

</div>
</div>



<div id="wrap-footer">
<div id="site-footer-nav" role="navigation">
<div class="chunk">
<ul class="site-footer-nav" role="menubar">
<li class="breadcrumbs">
<span class="crumb"><a href="./index.php?style=3" data-navbar-reference="index">Board index</a></span>
</li>

<li class="rightside">All times are <span title="UTC">UTC</span></li>
<li class="rightside"><a href="./ucp.php?style=3&amp;mode=delete_cookies" data-ajax="true" data-refresh="true" role="menuitem">Delete cookies</a></li>
<li class="rightside"><a href="./ucp.php?style=3&amp;mode=privacy" title="Privacy" role="menuitem">Privacy</a></li>
<li class="rightside"><a href="./ucp.php?style=3&amp;mode=terms" title="Terms" role="menuitem">Terms</a></li>
</ul>
</div>
</div>

<div id="site-footer-area">
<div class="chunk">
<div class="grid-4">
<h5> Ariki - phpBB3 Flat Theme </h5>
<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
<div class="grid-4">
<h5>Contact</h5>
<ul class="cfooter-contact">
<li>
<i class="fa fa-building"></i>
Somewhere 100/40
</li>
<li>
<i class="fa fa-phone"></i>
500 200 600
</li>
<li>
<i class="fa fa-mobile"></i>
125 521 125
</li>
<li>
<i class="fa fa-envelope"></i>
localhost@localhost.localhost
</li>
</ul>
</div>
<div class="grid-4">
<h5>You Must Know</h5>
<ul class="cfooter-links">
<li>
<a href="#">Our Rules</a>
</li>
<li>
<a href="#">Frequently Asked Questions</a>
</li>
<li>
<a href="#">BBCode Examples</a>
</li>
<li>
<a href="#">Empty Links</a>
</li>
</ul>
</div>
<div class="grid-4">
<h5>Social Links</h5>
<p> You Can Find Us There:</p>
<ul class="cfooter-social">
<li>
<a href="#"><i class="fa fa-tumblr"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-instagram"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-pinterest"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-facebook"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-github"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-dropbox"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-steam"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitch"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-twitter"></i></a>
</li>
<li>
<a href="#"><i class="fa fa-foursquare"></i></a>
</li>
</ul>
</div>
</div>
</div>


<?php 

$this->load->view('master_page/ui_footer');

?>