<div class='form'>
    <div id='form_Information'>
    If you are intrested in cooperation, please contact me!
    </div>
    <form  action="form.php" method="post">
        <div class='contactForm'>
            <div>
                <input class='contactForm_imput' name='name'  placeholder='name'> <span class="error"> <?php echo $nameErr;?></span>
                <input class='contactForm_imput' name='subject' placeholder='subject'>
                <input class='contactForm_imput' name='email'  placeholder='e-mail'>
            </div>
            <div>
                <textarea class='contactForm_imput---Message' name='message' placeholder='message'></textarea>
            </div>
        </div>
        
        <button id='clear'>Clear</button>
        <button type="submit" name="submit" id='send'>Send</button> 
    </form>
           
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
    });

    $('#send').click(function(){        
        // clearInputs();
        $('#form_Information').html('<div class="green"> Your message was send! Thank you!<div>');
        setTimeout(function(){
            $('#form_Information').html('You can also contact me directly by: <br>Mail: <b>marcin.janerka@gmail.com</b><br>Phone: <b>+48 730 078 241</b>')
        }, 2000);

        
    });

    function clearInputs() {
        $('.contactForm_imput').val('');
        $('.contactForm_imput---Message').val(''); 
    }

    
</script>