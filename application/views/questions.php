<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="style.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.min.js"></script> 

</head>
<body>
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>MBIU DAY</strong>
    </h5>
    <div class="scrollbar scrollbar-primary">
  <div class="force-overflow">
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
<!-- <form> -->

<?= form_open('questions/process_form',array('id' =>'my_form','method'=>'post'))?>
<h5>Every year, the four communities of the Mbiu Nation wait with great anticipation for the MBIU DAY. A day in which unites all tribes, bringing them together through various ways such as games and parties and ends with a great big bonfire. Take the following test and find out which tribe you belong to.
</h5>
<h5>Question 1:</h5>
<h5>Mbiu day is fast approaching, and the whole nation is abuzz. Which of the following describes you more;</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="Question1a" name="Question1">
  <label class="form-check-label" for="Question1a">Eagerly and anxiously awaiting the day (p)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="Question1b" name="Question1">
  <label class="form-check-label" for="Question1b">Indifferent about it but excited nonetheless (q)</label>
</div>


<h5>Question 2:</h5>
<h5>Mbiu day is a day filled with tons of activities and entertainment to partake in. With regards to how you spend your day and activities, is your schedule;</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="Question2a" name="Question2">
  <label class="form-check-label" for="Question2a">Well planned and meticulous (q)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="materialChecked" name="Question2">
  <label class="form-check-label" for="Question2b">Flexible with easy adaptable to any changes (p) (q)</label>
</div>

<h5>Question 3:</h5>
<h5>All communities during the Mbiu day will be interacting with one another. Who you choose to go with for the activities greatly determines your entire days structure. Who would you want to go celebrate the day with;
</h5>

<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="materialUnchecked" name="Question3">
  <label class="form-check-label" for="Question3a">Friends (p)</label>
</div>

<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="materialChecked" name="Question3">
  <label class="form-check-label" for="Question3b">Family (p)</label>
</div>
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="materialUnchecked" name="Question3">
  <label class="form-check-label" for="Question3c">Lone wolf (q)</label>
</div>
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="materialUnchecked" name="Question3">
  <label class="form-check-label" for="Question3d">Significant other (q)</label>
</div>
<h5>Question 4:</h5>
<h5>You have picked your companions for the day and it is time to get the day started right. Where would you be interested in going first with your companions;

</h5>

<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="Question4a" name="Question4">
  <label class="form-check-label" for="Question4a">Festival Party (p)</label>
</div>

<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="Question4b" name="Question4">
  <label class="form-check-label" for="Question4b">Expedition (p)</label>
</div>
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="Question4c" name="Question4">
  <label class="form-check-label" for="Question4c">Games (q)</label>
</div>
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="Question4d" name="Question4">
  <label class="form-check-label" for="Question4d">Nature Trek (q)</label>
</div>


<h5>Question 5:</h5>
<div>
<h5>1)	At the Festival Party, where you would you find yourself:</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question51a" name="Question51">
  <label class="form-check-label" for="Question51a">At the center (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question51b" name="Question51">
  <label class="form-check-label" for="Question51b">Towards the outer edges (b)</label>
</div>
</div>
<div>
<h5>2)	While on the expedition to the new destination on new soil, you would be at the;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question52a" name="Question52">
  <label class="form-check-label" for="Question52a">Complete front (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question52b" name="Question52">
  <label class="form-check-label" for="Question52b">Middle (b)</label>
</div>
</div>
<div>
<h5>3)	Since you have decided to go enjoy yourself with some games, what kind of games interest you;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question53a" name="Question53">
  <label class="form-check-label" for="Question53a">General knowledge fun games (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question53b" name="Question53">
  <label class="form-check-label" for="Question53b">Intellectual thinking games (b)</label>
</div>
</div>
<div>
<h5>4)	On the Nature trek, different groups are heading towards different destinations. Where among the following would you enjoy going;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question54a" name="Question54">
  <label class="form-check-label" for="Question54a">Hilly/Stony areas (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question54b" name="Question54">
  <label class="form-check-label" for="Question54b">Riverside/Waterfall area (b)</label>
</div>
</div>

<h5>Question 6:</h5>
<div>
<h5>1)	At the Festival Party, what would you find yourself doing;</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question61a" name="Question61">
  <label class="form-check-label" for="Question61a">Making new friends and dancing (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question61b" name="Question61">
  <label class="form-check-label" for="Question61b">Lay back and enjoy the experience minding your own business (b)</label>
</div>
</div>
<div>
<h5>2)	While on the expedition, chanting has now began to keep fatigue away and morale high, would you;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question62a" name="Question62">
  <label class="form-check-label" for="Question62a">Lead in a few of the chants on your own (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question62b" name="Question62">
  <label class="form-check-label" for="Question62b">Happily join along with the chants (b)</label>
</div>
</div>
<div>
<h5>3)	While getting yourself involved in the games activities of the day, would you be playing the games for;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question63a" name="Question63">
  <label class="form-check-label" for="Question63a">Competition’s sake (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question63b" name="Question63">
  <label class="form-check-label" for="Question63b">Fun’s Sake (b)</label>
</div>
</div>
<div>
<h5>4)	While on the nature trek, the guide decides he would like to try out a new path that he hasn’t before. This path new path could be tough on those not prepared for anything. What would you do;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question64a" name="Question64">
  <label class="form-check-label" for="Question64a">Take the risk and charter new territory (a)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question64b" name="Question64">
  <label class="form-check-label" for="Question64b">Stick to the regular trek ways (b)</label>
</div>
</div>
<h5>Question 7:</h5>
<h5>Hunger begins to set in and all around you there is food being unpacked. What kind of food would you be interested in. Would it b new food from the different tribes or the regular means ;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="Question7a" name="Question7">
  <label class="form-check-label" for="Question7a">New food from other tribes (p)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="Question7b" name="Question7">
  <label class="form-check-label" for="Question7b">Stick to the traditional foods from your tribe (q)</label>
</div>
<h5>Question 8:</h5>
<h5>The day is now slowly coming to an end and the light disappearing. People are now grouping up to listen to stories from the tribe elders of all the tribes scattered all over. What type of stories would you be interested in;
</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="Question8a" name="Question8">
  <label class="form-check-label" for="Question8a">Intellectual/Historical Stories (p)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="Question8b" name="Question8">
  <label class="form-check-label" for="Question8b">Fun/Jovial stories (q)</label>
</div>
<h5>Question 9:</h5>
<h5>One of the elders walking about strikes a conversation with you. He asks you what kind what is more valuable and meaningful to you with regards to your friendships and relationships;

</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="a" type="radio" class="form-check-input" id="Question9b" name="Question9">
  <label class="form-check-label" for="Question9b">Emotional Intimacy (a)label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="b" type="radio" class="form-check-input" id="Question9b" name="Question9">
  <label class="form-check-label" for="Question9b">Superficial Intimacy (b)</label>
</div>

<h5>Question 10:</h5>
<h5>As the time passes and the moon is at its peak. The closing Bonfire is lit and the activities begin winding up as people break into song appreciating the maker for all his mercies. Once at this point where can you be found, at the fire with everyone else or at home fast asleep;

</h5>
<!-- Material unchecked -->
<div class="form-check">
  <input value="p" type="radio" class="form-check-input" id="Question10a" name="Question10">
  <label class="form-check-label" for="Question10a">At the Bonfire (p)</label>
</div>

<!-- Material checked -->
<div class="form-check">
  <input value="q" type="radio" class="form-check-input" id="materialQuestion10bChecked" name="Question10">
  <label class="form-check-label" for="Question10b">At Home (q)</label>
</div>

<input id="submit" type="submit" value="SUBMIT">

<?= form_close();?>
<!-- </form> -->
</div>
</div>

</div>
</div>

<script>
$(document).ready(function(){   
  $("#Question4a").click(function()
  { 
      $('#Question51a').attr("enabled", "true");
      $('#Question51b').attr("enabled", "true");
      $('#Question52a').attr("disabled", "true");
      $('#Question52b').attr("disabled", "true");
      $('#Question53a').attr("disabled", "true");
      $('#Question53b').attr("disabled", "true");
      $('#Question54a').attr("disabled", "true");
      $('#Question54b').attr("disabled", "true");
      $('#Question61a').attr("enabled", "true");
      $('#Question61b').attr("enabled", "true");
      $('#Question62a').attr("disabled", "true");
      $('#Question62b').attr("disabled", "true");
      $('#Question63a').attr("disabled", "true");
      $('#Question63b').attr("disabled", "true");
      $('#Question64a').attr("disabled", "true");
      $('#Question64b').attr("disabled", "true");
  });
  $("#Question4b").click(function()
  { 
      $('#Question51a').attr("disabled", "true");
      $('#Question51b').attr("disabled", "true");
      $('#Question52a').attr("enabled", "true");
      $('#Question52b').attr("enabled", "true");
      $('#Question53a').attr("disabled", "true");
      $('#Question53b').attr("disabled", "true");
      $('#Question54a').attr("disabled", "true");
      $('#Question54b').attr("disabled", "true");
      $('#Question61a').attr("disabled", "true");
      $('#Question61b').attr("disabled", "true");
      $('#Question62a').attr("enabled", "true");
      $('#Question62b').attr("enabled", "true");
      $('#Question63a').attr("disabled", "true");
      $('#Question63b').attr("disabled", "true");
      $('#Question64a').attr("disabled", "true");
      $('#Question64b').attr("disabled", "true");
  });
  $("#Question4c").click(function()
  { 
      $('#Question51a').attr("disabled", "true");
      $('#Question51b').attr("disabled", "true");
      $('#Question52a').attr("disabled", "true");
      $('#Question52b').attr("disabled", "true");
      $('#Question53a').attr("enabled", "true");
      $('#Question53b').attr("enabled", "true");
      $('#Question54a').attr("disabled", "true");
      $('#Question54b').attr("disabled", "true");
      $('#Question61a').attr("disabled", "true");
      $('#Question61b').attr("disabled", "true");
      $('#Question62a').attr("disabled", "true");
      $('#Question62b').attr("disabled", "true");
      $('#Question63a').attr("enabled", "true");
      $('#Question63b').attr("enabled", "true");
      $('#Question64a').attr("disabled", "true");
      $('#Question64b').attr("disabled", "true");
  });
  $("#Question4d").click(function()
  { 
      $('#Question51a').attr("disabled", "true");
      $('#Question51b').attr("disabled", "true");
      $('#Question52a').attr("disabled", "true");
      $('#Question52b').attr("disabled", "true");
      $('#Question53a').attr("disabled", "true");
      $('#Question53b').attr("disabled", "true");
      $('#Question54a').attr("enabled", "true");
      $('#Question54b').attr("enabled", "true");
      $('#Question61a').attr("disabled", "true");
      $('#Question61b').attr("disabled", "true");
      $('#Question62a').attr("disabled", "true");
      $('#Question62b').attr("disabled", "true");
      $('#Question63a').attr("disabled", "true");
      $('#Question63b').attr("disabled", "true");
      $('#Question64a').attr("enabled", "true");
      $('#Question64b').attr("enabled", "true");
  });

  $('#my_form').change(function (){
    selected_value = $("input[name='Question1']:checked").val();
    alert(selected_value);
  })

  $("#submit").click(function()
  {      
    var title = $("input[name='title']").val(); 
    $.ajax({
        type: "POST",
        url: base_url + "questions/process_form", 
        data: {textbox: $("#textbox").val()},
        dataType: "text",  
        cache:false,
        success: 
              function(data){
                alert(data);  //as a debugging message.
              }
          });// you have missed this bracket
    return false;
    });
});
</script>
</body>

</html>