<div class='form'>
    <div id='form_Information'>
    If you are intrested in cooperation, please contact me!
    </div>
    <form  class='form_box' action="form.php" onsubmit="return sendMail()" method="post">
        <div class='contactForm'>
            <div>
                <input class='contactForm_imput' name='name' required placeholder='name'> 
                <input class='contactForm_imput' name='subject' required placeholder='subject'>
                <input class='contactForm_imput' name='email' required placeholder='e-mail'>
            </div>
            <div>
                <textarea class='contactForm_imput---Message' required name='message' placeholder='message'></textarea>
            </div>
        </div>
        
        <button id='clear'>Clear</button>
        <button type="submit" name="submit" id='send'>Send</button> 
    </form>
           
</div> 
<style>
</style>
    

<script>
    
    $(".form_box").validate({
        rules: {
            name: "required",
            subject: "required",
            message: "required",
            email: {
              required: true,
              email: true
            }
          },
          messages: {
            name: "<div class='form_error'>Please enter your name</div>",
            subject: "<div class='form_error'>Please specify subject</div>",
            message: "<div class='form_error'>Please remember about message for me</div>",
            email: {
              required: "<div class='form_error'>I need your email address to contact you</div>",
              email: "<div class='form_error'>Your email address must be in the format of name@domain.com</div>"
            }
          }
    });
   
    $('#clear').click(function(e){
        e.preventDefault();
        clearInputs();
    });

    function sendForm(){        
        clearInputs();
        $('#form_Information').html('<div class="green"> Your message was send! Thank you!<div>');
        setTimeout(function(){
            $('#form_Information').html('You can also contact me directly by: <br>Mail: <b>marcin.janerka@gmail.com</b><br>Phone: <b>+48 730 078 241</b>')
        }, 2000);

        
    };

    function clearInputs() {
        $('.contactForm_imput').val('');
        $('.contactForm_imput---Message').val(''); 
    }
function sendMail() {
    $.ajax({
      type: "POST",
      url: "form.php",
      data: {
        name : name,
        subject : subject,
        email: email,
        email_body: email_body
      },
      success: function(data){
          sendForm()
      }
    });
    return false;
}
    
</script>