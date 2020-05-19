
<div>
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>
          <h1>Login Form</h1>
          <div>
            <?= $this->Form->control('username',['type'=>'text','class'=>'form-control', 'label' => false,'placeholder'=>'Username']) ?>
          </div>
          <div>
            <?= $this->Form->control('password',['type'=>'password','class'=>'form-control', 'label' => false,'placeholder'=>'Password']) ?>
          </div>
          <div>
          <?= $this->Form->button(__('Login',['class'=>'btn btn-default submit'])); ?>
          
      <a class="reset_pass" href="#">Lost Admin password?</a>
          </div>

       <?= $this->Form->end() ?>
      </section>
    </div>
  </div>
</div>

