<!-- File: src/Template/Users/login.ctp -->

<!-- <div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div> -->

<!DOCTYPE html>
<html lang="en">
  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form ">
          <section class="login_content">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create() ?>
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" type="submit">Log in</a>
          <a class="reset_pass" href="#">Lost Admin password?</a>
              </div>
            <?= $this->Form->end() ?>
          </section>
        </div>        
      </div>
    </div>    
  </body>
</html>
