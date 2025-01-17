<!DOCTYPE html>
<html lang="fr">
    <head>
      <title>Ma page</title>
      <meta charset="utf-8"> 
	  <link rel="stylesheet" href="../style.css">
	<script>

  var dieFace = {
    2:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="20" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    4:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="20" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    6:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="20" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    8:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="20" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    10:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="15" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    12:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="15" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    20:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="15" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
	100:'<svg width="50" height="50"><polygon points="3,3 3,47 47,47 47,3" style="stroke: black; fill: grey" /><text fill="black" x="8" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
    'other':'<svg width="50" height="50"><circle cx="25" cy="25" r="20" style="stroke: black; fill: grey" /><text fill="black" x="20" y="30" font-family="Verdana" font-size="18">REPLACEME</text></svg>',
  };

  function rollem(){
  	total = 0;
    n = document.getElementById('num').value;
    d = document.getElementById('die').value;
  	o = document.getElementById('output');
	p = o.innerHTML;
	
	if (d in dieFace){ 
	  face = dieFace[d];
    } else {
      face = dieFace['other'];
    }
	
    if (p != ''){
        p = p.concat("<hr>")
    } else {
        p = p.concat('<button id="clear" onclick="clearme()" style="float:right;">Clear</button>');
    }
    for (i = 0; i < n; i++){
		r = Math.ceil(Math.random() * d);
		total += r;
        p = p.concat("<span> " + face.replace('REPLACEME', r.toString()) + " </span>");
    }
    p += " Résultat: " + total;
    o.innerHTML = p;
  }

  function clearme(){
  	o = document.getElementById('output');
  	o.innerHTML = "";
  }

  function loady(){
  	  for(f in dieFace){
  		  e = document.getElementById(f);
		  if (e) e.innerHTML = dieFace[f].replace("REPLACEME", f);
	  }
  }

  function dieClick(whatzis){
    n = document.getElementById('num');
    d = document.getElementById('die');
		if (whatzis.id == d.value){
			n.value = Number(n.value) + 1;
		} else {
			n.value = 1;
			d.value = whatzis.id
		}
  }
</script>

    </head>
    
	<body onload=loady()>
	
	<header>
	<nav>
	<ul>
	<li><a href="../index.html"> Fiche Personnage </a></li>
	<li><a href="Classes.html">Liste des classes </a></li>
	<li><a href="Map.html">Planisphère </a></li>
	<li><a href="Roll.html">Dice Roller </a></li>
	<li><a href="Loot.html">Looter |en construction| </a></li>
	</ul>
	</nav>
	</header>
	
    <div class="centrale" name="Roll">
    <div class='outer'>
    <div id="control" name="barreRoll">
    <input type="number" step="1" id="num" value='3' maxlength="3" size="1" width="1em"> d <input type="number" step="1" id="die" value='6' maxlength="3" size="1">
    <button id="roll" onclick="rollem()">Lance le dé bâtard</button>
	<button id="roll" onclick="clearme()">Reset</button>
    </div>
	<div class="dés">
		<span id="2" onclick="dieClick(this)">
		</span>  
		<span id="4" onclick="dieClick(this)">
		</span>
		<span id="6" onclick="dieClick(this)">
		</span>
		<span id="8" onclick="dieClick(this)">
		</span>
		<span id="10" onclick="dieClick(this)">
		</span>
		<span id="12" onclick="dieClick(this)">
		</span>
		<span id="20" onclick="dieClick(this)">
		</span>
		<span id="100" onclick="dieClick(this)">
		</span>
	</div>
	
	<div id="output">
  
	</div>
	</div>
    </div>
  
</body>

</html>