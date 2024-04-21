<?php 
$this->load->view('master_page/ui_header');
?>


<div id="wrap-body">
<div class="chunk">


<div id="sidebar">
<div class="side-block side-login">
<form method="post" action="#">
<h4 class="side-block-head"><a href="#">Login</a></h4>
<div class="side-block-body">

<fieldset>
<input type="text" tabindex="1" name="username" id="username" size="10" class="inputbox" title="Username" placeholder="Username" /><input type="password" tabindex="2" name="password" id="password" size="10" class="inputbox" title="Password" autocomplete="off" placeholder="Password" />
<br />
<label for="autologin" id="remember-me"><input type="checkbox" tabindex="4" name="autologin" id="autologin"/>Remember me</label>
<br />
<input type="submit" tabindex="5" name="login" value="Login" class="button1" />	
<input type="hidden" name="redirect" value="#" />
<input type="hidden" name="creation_time" value="1713677054" />
<input type="hidden" name="form_token" value="13bf9c750f9990a06160e580aadca7bbfcd16992" />
</fieldset>

</div>
</form>
</div>

</div>

<div id="forumlist">

<div id="forumlist-inner">



<div class="forabg">
<div class="inner">
<ul class="topiclist">
<li class="header">


<dl class="icon">
<dt><div class="list-inner"><a href="#">System In</a></div></dt>
<dd class="topics">Status</dd>
<dd class="posts">Reports</dd>
<dd class="lastpost">Action</dd>
</dl>
</li>
</ul>


<ul class="topiclist forums">

<li class="row">

<dl class="icon forum_read">

<dt title="No unread posts">

<div class="list-inner">
<a href="#" class="forumtitle">Informations</a>
<br />Placeholder forum.												
<div class="responsive-show" style="display: none;">Topics: <strong>1</strong></div>
</div>
</dt>
<dd class="topics">1 <dfn>Topics</dfn></dd>
<dd class="posts">1 <dfn>Posts</dfn></dd>
<dd class="lastpost">
<dfn>Last post</dfn>
<a href="#" title="Welcome to phpBB3" class="lastsubject">Welcome to phpBB3</a>
<br>
by <a href="#" style="color: #AA0000;" class="username-coloured">Admin</a><br>
<a href="#"><time datetime="2019-02-24T03:16:27+00:00">24 February 2019, 3:16</time></a>
</dd>
</dl>
</li>

</ul>



</div>
</div>

</div>

</div>


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