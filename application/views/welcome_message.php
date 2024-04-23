<?php 
$this->load->view('master_page/ui_header');
?>


<div id="wrap-body">
<div class="chunk">


<div id="sidebar">
<div class="side-block side-login">


<form method="POST" action="<?php echo base_url('user_login'); ?>">
<h4 class="side-block-head"><a href="#">Login</a></h4>
<div class="side-block-body">

<fieldset>

<input type="text" tabindex="1" name="portalusername" id="username" size="10" class="inputbox" title="Username" placeholder="Username" />

<input type="password" tabindex="2" name="portalpassword" id="password" size="10" class="inputbox" title="Password" autocomplete="off" placeholder="Password" />
<br />

<label for="autologin" id="remember-me"><input type="checkbox" tabindex="4" name="autologin" id="autologin"/>Remember me</label>

<br />
<input type="submit" tabindex="5" name="login" value="Login" class="button1" />	


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



<?php 
$this->load->view('master_page/ui_footer');
?>