<?
$this->load->view("head");
?>
	<div id="login">
  <form action="" method="POST">
<div class="ui form segment">
  <div class="field">
    <label>Username</label>
    <div class="ui left labeled icon input">
      <input type="text" placeholder="Username" name="username">
      <i class="user icon"></i>
      <div class="ui corner label">
        <i class="icon asterisk"></i>
      </div>
    </div>
  </div>
  <div class="field">
    <label>Password</label>
    <div class="ui left labeled icon input">
      <input type="password" name="password">
      <i class="lock icon"></i>
      <div class="ui corner label">
        <i class="icon asterisk"></i>
      </div>
    </div>
  </div>
  <div class="ui error message">
    <div class="header">We noticed some issues</div>
  </div>
  <button class="ui blue submit button" type="submit">Login</button>
</div>
</form>
</div>
</body>
<style>
  
  #login{
    width: 30%;
    padding-left: 455px;
  }
</style>
</html>