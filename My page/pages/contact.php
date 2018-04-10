<div class='form'>
<div id='form_Information'>
If you are intrested in cooperation, please contact me!
</div>
<form class='contactForm' action="../form.php" method="POST">
    <div>
        <input class='contactForm_imput' name='name'  placeholder='name'>
        <input class='contactForm_imput' name='subject' placeholder='phone number'>
        <input class='contactForm_imput' name='mail'  placeholder='e-mail'>
    </div>
    <div>
        <textarea class='contactForm_imput---Message' name='message' placeholder='message'></textarea>
    </div>
</form>
<button id='clear'>Clear</button>
<button type="submit" name="submit" id='send'>Send</button>            
</div> 
<style>
.green{
    color: green;
    text-decoration: underline;
}   
</style>
<script>
    $('#clear').click(function(){
        clearInputs();
    })

    $('#send').click(function(){        
        clearInputs();
        $('#form_Information').html('<div class="green"> Your message was send! Thank you!<div>')
        setTimeout(function(){
            $('#form_Information').html('You can also contact me directly by: <br>Mail: <b>marcin.janerka@gmail.com</b><br>Phone: <b>+48 730 078 241</b>')
        }, 2000);

        
    })

    function clearInputs() {
        $('.contactForm_imput').val('');
        $('.contactForm_imput---Message').val('');
        // $('.contactForm_imput').css('border-color', 'red');
        // $('.contactForm_imput---Message').css('border-color', 'red');
    }

    
</script>