<div class="container" id="register">
  <div class="loginmodal-container">
  <?php if (isset($login_fail)) : ?>
    <div class="alert alert-danger"><?php echo $this->lang->line('admin_login_error') ; ?></div>
  <?php endif ; ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open($submit_path, 'class="form-signin" id="registrarseForm" role="form"') ; ?>
      <h2 class="form-signin-heading"><?php echo $this->lang->line('forgot_pwd_header') ; ?></h2>
      <p class="lead"><?php echo $this->lang->line('forgot_pwd_instruction') ;?></p>
      <!-- ver como queda asi y despues borrar la tabla para que quede con los form-group -->
      <!-- <table border="0">
          <tr>
              <td><?php //echo $this->lang->line('signin_new_pwd_email') ; ?></td>
          </tr>
          <tr>    
              <td><?php //echo form_input($usr_new_pwd_1); ?></td>
          </tr>
          <tr>    
              <td><?php //echo form_input($usr_new_pwd_2); ?></td>
          </tr>
      </table> -->

      <div class="form-group">
        <label for="usr_new_pwd_1">Ingrese su nueva contraseña</label>
        <?php echo form_input($usr_new_pwd_1); ?>
      </div>
      <div class="form-group">
        <label for="usr_new_pwd_2">Repita su nueva contraseña</label>
        <?php echo form_input($usr_new_pwd_2); ?>
      </div> 

      <button class="btn btn-lg btn-success btn-block" type="submit"><?php echo $this->lang->line('common_form_elements_go') ; ?></button>
      <br />
    <?php echo form_close() ; ?>
</div>
</div>