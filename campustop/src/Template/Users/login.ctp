
<?php 
    echo $this->Html->css('reset');
    echo $this->Html->css('structure');
 ?> 
 

<body class="hold-transition login-page">

     <?php echo $this->Form->create('User',array('class'=>'box login')); ?>
           <?= $this->Flash->render('auth') ?>
            <fieldset class="boxBody">
            <label>Username</label>
               <?php echo $this->Form->input('username',array('type'=>'text','placeholder'=>'Enter Username','label'=>False,'tabindex'=>1)); ?>
            <label>Password</label>
              <?php echo $this->Form->input('password',array('type'=>'password','placeholder'=>'Enter Password','label'=>False,'tabindex'=>1)); ?>
            </fieldset>
            <footer>
              <input type="submit" class="btnLogin" value="Login" tabindex="4">
            </footer>
    </form>
</body>