<div class='form'>
<div id='form_Information'>
If you are intrested in cooperation, please contact me!
</div>
<div class='contactForm'>
    <div>
        <input class='contactForm_imput' name='name' placeholder='name'>
        <input class='contactForm_imput' name='phone' placeholder='phone number'>
        <input class='contactForm_imput' name='mail' placeholder='e-mail'>
    </div>
    <div>
        <textarea class='contactForm_imput---Message' placeholder='message'></textarea>
    </div>
</div>
<button id='clear'>Clear</button>
<button id='send'>Send</button>            
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
            $('#form_Information').html('You can alsko contact me by: <br>Mail: <b>marcin.janerka@gmail.com</b><br>Phone: <b>+48 730 078 241</b>')
        }, 2000);

        
    })

    function clearInputs() {
        $('.contactForm_imput').val('');
        $('.contactForm_imput---Message').val('');
        // $('.contactForm_imput').css('border-color', 'red');
        // $('.contactForm_imput---Message').css('border-color', 'red');
    }

    
</script>