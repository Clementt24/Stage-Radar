<!-- Mettre dans le fichier style.css --> 

<style> 
    footer {
    width: 100%;
    background-color: #1a56db;
    color: #ffffff;
    padding: 15px 0;
    text-align: center;
    font-size : 13px;
    line-height : 20px;
}

.div1 {
    width : 85%; 
    margin: auto;
    display: flex; 
    flex-wrap : wrap;
    align-items : flex-start;
    justify-content : space-between;
}

.col1{
    flex-basis : 25%;
    padding : 10px;
    display:flex;
    flex-direction: column;
    align-items : center;

}

.col1 h3 {
    width: fit-content;
    margin-bottom : 15px; 
    color : #ffffff
    font-weight: 700px; 

}

.col1 a:hover { color:white;}



</style> 

<!-- Footer --> 

<footer> 
    <div class="div1">
        <div class="col1">
            <h3> SAE  </h3>
            <p>  BUT2 Info  </p>
            <p>  Stage-radar</p> 
            <p>  IUT de Villetaneuse</p> 
        </div>
        <div class="col1">
            <h3> Etablissement </h3>
            <p>  Université Sorbonne Paris Nord  </p>
            <p>  99 Avenue Jean-Baptiste Clément</p>
            <p> 93430 Villetaneuse </p>  
        </div>
        <div class="col1">
            <h3> Liens </h3> 
            <ul> 
                <li> <a href=""> Contactez nous </a>  </li> 
                <li> <a href=""> FAQ </a>  </li> 
                <li> <a href=""> Sujet </a>  </li> 
                <li> <a href=""> A propros  </a>  </li> 

            </ul> 

        </div>
        <div class="col1">
            <h3> Technologie </h3>
            <p>  HTML </p>
            <p> PHP</p> 
            <p> CSS </p>
            <p> JavaScript </p>  
        </div>
    </div>        
</footer>

<script src="assets/js/main.js"></script>
</body>
</html> 