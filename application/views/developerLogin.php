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


<?php 

$this->load->view('master_page/ui_footer');

?>