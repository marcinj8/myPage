<div class='abtMe'>
    <div class='inline'>
        <div class='abtMe_Photo'>
            <img id='myPhoto' src="img/20180305_103641.jpg" alt="Marcin Janerka" style="width:150px">
        </div>
        <div class='abtMe_Content'>
            Hello! I want to indroduce myself. From few years I worked in trade but I always wanted to programming. Now I'm trying to start my new adventure with Front-end. Below you can see my skills. You can see my few projects in next overlap. If you are intrested in cooperation, please contact me.
        </div>
    </div>
<div class='inline abtMe_Skills'>
    <div>
        Working with:
        <uL>
            <li  class='abtMe_Skill'>HTML5/CSS3</li>
            <li class='abtMe_Skill'>JavaScript</li>
            <li class='abtMe_Skill'>jQuery</li>
            <li class='abtMe_Skill'>AJAX</li>
            <li class='abtMe_Skill'>RWD</li>
        </uL>
    </div>
    <div>
        Experience with:
        <uL>
            <li class='abtMe_Skill'>Angular 2</li>
            <li class='abtMe_Skill'>GIT</li>
            <li class='abtMe_Skill'>PhotoShop</li>
            <li class='abtMe_Skill'>Wordpress</li>
            <li class='abtMe_Skill'> OOCSS and BEM (CSS methodology) </li>
        </uL>
    </div>
</div>
<button id='showSkills'>Skills</button>
</div>
<script>
$('#showSkills').click(function () {
    if ($('.abtMe_Skills').css('display') == 'none') {
        $('.abtMe_Skills').css('display','block');
        $('#showSkills').text('Back');
        $('.abtMe_Content').css('display','none');
    } else {
        $('.abtMe_Skills').css('display','none')
        $('#showSkills').text('Skills')
        $('.abtMe_Content').css('display','block')
    }
})
</script>