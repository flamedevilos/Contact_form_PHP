<!-- PHP Script -->
<?php include 'connection.php'; ?>
<!-- Header -->
<?php include 'partial/header.php'; ?>

<!-- contact Form section -->
<div class="container">

  <!-- Title -->
  <div class="title">
    <h1>Contact</h1>
      <p>Please send your request and we will responce soon as possible.</p>
  </div>

  <!-- Contact Form -->
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="contact-form">

  <!-- Error message -->  
    <?php
      if (! empty($errors)) { ?>
        <div class="alert alert-danger alert-dismissible fade show alert" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        <?php
          foreach ($errors as $error) {
            echo $error .'<br>';
          }
          ?>
        </div>
      <?php } ?>

      <!-- Success Alert -->
      <?php 
        if (isset($success)) {
          echo $success;

        }
      ?>
  <br>

  <div class="row">
    <div class="col-auto">
      <select class="form-select" name="title">
        <option selected>Title *</option>
        <option value="Mr">Mr.</option>
        <option value="Mrs">Mrs.</option>
        <option value="other">Other</option>
      </select>
    </div>
    <div class="col md-10">
      <input type="text" class="form-control" placeholder="Full name *" name="name" value="<?php if (isset($name)) { echo $name;} ?>" />
      <i class="fa-solid fa-user"></i>
      <span class="alert-field">
        Your name must to be more than <strong>3</strong> characters.
      </span>
    </div>
  </div>

    <input class="form-control" type="text" placeholder="example@email.com *" name="email" value="<?php if (isset($email)) { echo $email;} ?>" /><i class="fa-solid fa-envelope"></i>
    <span class="alert-field">
        Invalid Email.
      </span>
    <input class="form-control" type="text" placeholder="Subject *" name="subject" value="<?php if (isset($subject)) { echo $subject;} ?>" /><i class="fa-solid fa-pen"></i>
    <span class="alert-field">
        Subject must to be more than <strong>7</strong> characters.
      </span>
    <textarea class="form-control" placeholder="Leave your request here *..." name="message" value="<?php if (isset($message)) { echo $message;} ?>"></textarea><i class="fa-solid fa-pen-to-square"></i>
    <span class="alert-field">
        Your request must to be more than <strong>10</strong> characters.
    </span> 


    <div class="d-grid gap-2 col-6 mx-auto">
      <button class="btn btn-light" type="submit">Send</button>      
    </div>
    
  </form>

</div>


    
<!-- Footer -->
<?php include 'partial/footer.php'; ?>
