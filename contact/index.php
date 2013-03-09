<?php 
  include("../assets/inc/config.inc");
  $ROOT = '../'; // Set root for relative paths
  $thisPage="contact"; 
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo contactTitle ?></title>
  <?php include("../assets/inc/head.inc.php"); ?>
  <!-- Forms -->
</head>
<body id="contact">
  <?php include("../assets/inc/nav/nav.inc.php"); ?>
  <?php include("../assets/inc/socialbar.inc.php"); ?>
  <section class="content">
    <div class="colonnade">
      <article class="lt_column">
        <h2>
          <?php echo contactHead ?></h2>
        <p>
          Pencil Media builds digital products that produce measurable results. With Pencil Media, pixel-perfect development means absolute precision and accuracy, and nothing less.
        </p>
        <p>
          If you are interested in a quote, we will contact you in a short amount of time.
        </p>
      </article>
      <aside class="rt_column">
        <form enctype="multipart/form-data" method="post" id="contactForm" name="contactForm" action="sent.php">
          <fieldset>
            <legend>Get in touch</legend>
            <p class="instructions">
              <span class="required">*</span>
              represent required fields
            </p>
            <p>
              <label>
                Name
                <span class="required">*</span>
              </label>
              <input type="text" id="name" name="name" tabindex="1" required />
              <span id="nameInfo">&nbsp;</span>
            </p>
            <p>
              <label>Phone</label>
              <input type="tel" name="phone" onFocus="getIt(this)" tabindex="2"  />
            </p>
            <p>
              <label>
                Email
                <span class="required">*</span>
              </label>
              <input type="email" id="email" name="email" tabindex="3"  required />
              <span id="emailInfo">&nbsp;</span>
            </p>
            <p>
              <label>Awareness</label>
              <select name="awareness" tabindex="4" >
                <option>Choose</option>
                <option>Yelp</option>
                <option>Internet Search</option>
                <option>Personal Referral/Recommendation</option>
              </select>
            </p>
            <p>
              <label>
                Message
                <span class="required">*</span>
              </label>
              <textarea id="message" name="message" rows="6" cols="20" tabindex="5" required></textarea>
              <span id="messageInfo">&nbsp;</span>
            </p>
            <p>
              <a type="submit" id="send" class="button submit" href="javascript:submitForm();" tabindex="6">
                <span>Yes, get back to me</span>
              </a>
              <!--<button type="submit" id="send" class="button submit" tabindex="6" >
              <span>Send My Information</span>
            </button>
            -->
            </p>
          </fieldset>
        </form>
      </aside>
    </div>
  </section>
  <?php include("../assets/inc/foot.inc.php"); ?>
  <script src="../assets/js/contact.js"></script>
  <script type="text/javascript">
  function submitForm() { 
  //global vars
  var form = $("#customForm");
  var name = $("#name");
  var email = $("#email");
  var message = $("#message");

  if( name.val().length == 0 || email.val().length == 0 || message.val().length == 0 ) {
  $('<div class=\'alert alert-block alert-error\'>Please fill all required fields.</div>').insertBefore('.colonnade');
  return false;
  } else {
  document.contactForm.submit();
  }
  }
  </script>
  <script src="../assets/js/validation.js"></script>
</body>
</html>