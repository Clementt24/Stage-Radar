<style>

body{
    margin:0;
    font-family : Helvetica, sans-serif;
}

footer{
    width : 100%;
    margin-top : 50px;
}

*{
    box-sizing: border-box
    margin:0;
    padding:0;
}

.titre{
    text-align:center;
    font-size: 3em;
    margin-bottom :1em;
}

.faq_section{
    padding: 4em 2em;
}

.faq {
    list-style : none;
    max-width : 700px;
    margin: 0 auto;
}

.faq li {
    background: #f2f2f2;
    border-bottom : 1px #ccc solid;

}

.faq li:first-child {
    border-top : 1px #ccc solid;
}

.questions {
    padding: 1em 0;
    border-left: 10px #f2f2f2 solid;
    cursor: pointer;
}

.questions:hover, .q:hover .fleches {
    border-left : #0569ff;
}

.fleches {
    display: inline-block;
    margin: 0 0.5em; 
    width: 0;
    height : 0;
    border-top : 6px solid transparent;
    border-left : 10px solid #555;
    border-bottom: 6px solid transparent;
    transition: 0.3s; 
}

.faq p {
    color: #888;
    line-height : 25px;
}

.reponses {
    overflow: hidden;
    height: 0;
    padding: 0 1em 0 3.3em;
}

.reponses-opened {
    padding; 1em 1em 2em 3.3em
    height: initial;
}

.fleches-rotated {
    transform: rotate(90deg);
}


</style> 

<?php 
session_start(); 
include 'includes/header.php';
include 'includes/sidebar.php';
?>

<section class="faq_section"> 
 <h1 class="titre"> Foire à questions </h1> 
 
 <ul class="faq"> 
    <li> 
     <div class="questions"> 
        <span class="fleches"> </span> 
        <span> Quel est l'objectif du site ? </span> 
     </div> 
     
     <div class="reponses">
        <p> L'objectif de ce site est de blabla </p> 
     </div> 
    </li>

    <li> 
     <div class="questions"> 
        <span class="fleches"> </span> 
        <span> Comment bien utiliser Stage Radar ?  </span> 
     </div> 
     
     <div class="reponses">
        <p> L'objectif de ce site est de blabla </p> 
     </div> 
    </li>
    
 </ul> 
<?php 

include 'includes/footer.php';

?> 
    


