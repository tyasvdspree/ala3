				$(document).ready(function(){
					console.log(sessionStorage.voornaam + " " + sessionStorage.achternaam)
					if(sessionStorage.txtVoornaam != undefined && sessionStorage.txtAchternaam != undefined){
					document.getElementById("voornaam").innerHTML = "Welkom " + sessionStorage.txtVoornaam;
					document.getElementById("voornaam").innerHTML = document.getElementById("voornaam").innerHTML + " " + sessionStorage.txtAchternaam;
					}
					
					else{
						
						document.getElementById("voornaam").innerHTML = "Welkom gast";
						
					}
				});