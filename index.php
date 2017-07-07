
<!DOCTYPE html>
<html>
	<head>
		<title>IAM | Comptes AD</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		
		<!-- librairies CSS BOOTSTRAP 3 -->
		<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
				
		<!-- librairies JS BOOTSTRAP 3 -->
		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script type="text/javascript" language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- librairies PASSWORD METER -->
		<script src="scripts/password.min.js"></script>
		<script src="scripts/password.min.css"></script>	
		<script language="Javascript"> //script de validation du mot de passe. 
			$(document).ready(function(){
			$("input[type=password]").keyup(function(){
				var ucase = new RegExp("[A-Z]+"); // Contenir une majuscule
				var lcase = new RegExp("[a-z]+"); // Contenir une minuscule
				var num = new RegExp("[0-9]+"); // Contenir un chiffre
				var schar = new RegExp("[^a-zA-Z0-9]"); //Contenir un caractere spécial
				var usern = new RegExp("[^a-zA-Z0-9]") //Contient identifiant
			
			if($("#password1").val().length >= 8){ // 8 caractères
				$("#8char").removeClass("glyphicon-remove");
				$("#8char").addClass("glyphicon-ok");
				$("#8char").css("color","green");
				$("#8char2").css("color","green");
			}else{
				$("#8char").removeClass("glyphicon-ok");
				$("#8char").addClass("glyphicon-remove");
				$("#8char").css("color","red");
			}
			
			if(schar.test($("#password1").val())){ // 1 caractère spécial
				$("#schar").removeClass("glyphicon-remove");
				$("#schar").addClass("glyphicon-ok");
				$("#schar").css("color","green");
				$("#schar2").css("color","green");
			}else{
				$("#schar").removeClass("glyphicon-ok");
				$("#schar").addClass("glyphicon-remove");
				$("#schar").css("color","red");
			}
			
			if(ucase.test($("#password1").val())){ // 1 majuscule
				$("#ucase").removeClass("glyphicon-remove");
				$("#ucase").addClass("glyphicon-ok");
				$("#ucase").css("color","green");
				$("#ucase2").css("color","green");
			}else{
				$("#ucase").removeClass("glyphicon-ok");
				$("#ucase").addClass("glyphicon-remove");
				$("#ucase").css("color","red");
			}
			
			if(lcase.test($("#password1").val())){ // 1 minuscule
				$("#lcase").removeClass("glyphicon-remove");
				$("#lcase").addClass("glyphicon-ok");
				$("#lcase").css("color","green");
				$("#lcase2").css("color","green");
			}else{
				$("#lcase").removeClass("glyphicon-ok");
				$("#lcase").addClass("glyphicon-remove");
				$("#lcase").css("color","red");
			}
			
			if(num.test($("#password1").val())){ // 1 chiffre
				$("#num").removeClass("glyphicon-remove");
				$("#num").addClass("glyphicon-ok");
				$("#num").css("color","green");
				$("#num2").css("color","green");
			}else{
				$("#num").removeClass("glyphicon-ok");
				$("#num").addClass("glyphicon-remove");
				$("#num").css("color","red");
			}
			
			if(usern.test($("#password1").val())){ // ne contient pas l'identifiant windows
				$("#usern").removeClass("glyphicon-ok");
				$("#usern").addClass("glyphicon-remove");
				$("#usern").css("color","red");
				$("#usern2").css("color","red");
			}else{
				$("#usern").removeClass("glyphicon-remove");
				$("#usern").addClass("glyphicon-ok");
				$("#usern").css("color","green");
			}
			});
			});
			
			$('#password1').password({
				username: '#username',
				showPercent: true
			});
			
			
		</script>
		<style>
			label::after {
                content: ":";
            }
			
			.hsimp-checks li {
                list-style: none;
            }

            .hsimp-checks h2 {
                font-size: 1.2em;
				font-weight:bold;
                margin-bottom: 0;
            }

            .hsimp-checks p {
                margin-top: 0;
                font-size: 1em;
            }
			
			.option__gradient {
				background-image: linear-gradient(#bfe7f2, #ffffff);
			}

			.paspoint {
                list-style: none;
            }
			
			.hsimp-time {
				color:#FF4500;
				font-size:30px;
				font-weight:bold;
			}	
			
			.thumb-wrap {
				display:inline-block;
				vertical-align:top;
				margin: 4px;
				margin-right: 0;
				padding: 4px;
				border: 1px solid #999999;
			}			
			
			.input-icon-wrap {
				border: 1px solid #ddd;    
				display: flex;
				flex-direction: row;
			}
			
			.input-icon {
				background: #ddd;
			}

			.input-with-icon {
				border: none;
				flex: 1;
			}
        </style>
	</head>
<body>
	<div class="container">
		</br>
		<div class="row"> <!-- Message présentation de l'outil -->
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Outil de validation de mot de passe</h3>
					</div>
					<div class="panel-body">
					<span style="font-size:small ;">
						<p>Cet outil permet de vérifier que votre mot de passe remplit les critères de sécurité recommandée par la DS2IN. Il est demandé la validation de <b>5</b> critères sur <b>6</b> afin garantir à votre mot de passe un niveau de sécurité suffisant.</br></br>Critère à respecter obligatoirement:</p>
						<ul class="paspoint">
							<li><span id="8char" class="glyphicon glyphicon-remove" style="color:red"></span></span><span id="8char2" style="color:red"> Contenir 8 caractères</span></li>
						</ul>
						Et respectez <u>au minimum 4 des 5 critères suivants</u>:</br></br>
						<ul class="paspoint">
							<li><span id="ucase" class="glyphicon glyphicon-remove" style="color:red"></span><span id="ucase2" style="color:red"> Contenir une majuscule</span></li>
							<li><span id="num" class="glyphicon glyphicon-remove" style="color:red"></span><span id="num2" style="color:red"> Contenir un chiffre</span></li>
							<li><span id="lcase" class="glyphicon glyphicon-remove" style="color:red"></span><span id="lcase2" style="color:red"> Contenir une minuscule</span></li>
							<li><span id="schar" class="glyphicon glyphicon-remove" style="color:red"></span><span id="schar2" style="color:red"> Contenir un caractère spécial</span></li>
							<li><span id="usern" class="glyphicon glyphicon-ok" style="color:green"></span><span id="usern2" style="color:green"> Ne contient pas votre identifiant</span></li>
						</ul></span>
					</div>
					<div class="panel-footer">
					<b>Temps moyen à PC de bureau standard pour trouver votre mot de passe :</b></br>
					<center><p><b><div id="password-time" class="hsimp-time">????</div></b></p></center>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-user" style=""></span> 
								</div>
								<input class="form-control" id="username" name="username" type="text" placeholder="<?php echo $username; ?>" autocomplete="off"/>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="glyphicon glyphicon-arrow-right" style=""></span> 
								</div>
								<input class="form-control" id="password1" name="password1" type="password" placeholder="Mot de passe" autocomplete="off"/>
							</div>
						</div>
					</div>
					<div class="panel-body">
						<div class="alert alert-info alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Fermer"><span aria-hidden="true">&times;</span></button>
							<strong>Astuces!</strong> Quelques astuces pour le choix de votre mot de passe. <span class="glyphicon glyphicon-arrow-down"></span> 
						</div>
						<ul id="password-checks" class="hsimp-checks"></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="scripts/hsimp.min.js"></script>
	<script>
            (function (doc) {
                var passwordInput = doc.getElementById("password1"),
                    timeDiv = doc.getElementById("password-time"),
                    checksList = doc.getElementById("password-checks");

                // Code pour afficher le temps de crackage
                var renderTime = function (time, input) {
                    timeDiv.innerHTML = time || "";
                };

                // Code pour afficher les astuces (checks)
                var renderChecks = function (checks, input) {
                    checksList.innerHTML = "";

                    for (var i = 0, l = checks.length; i < l; i++) {
                        var li = doc.createElement("li"),
                            title = doc.createElement("h2"),
                            message = doc.createElement("p");

                        title.innerHTML = checks[i].name;
                        li.appendChild(title);

                        message.innerHTML = checks[i].message;
                        li.appendChild(message);

                        checksList.appendChild(li);
                    }
                };

                // Déclaration de l'objet
                var attachTo = hsimp({
                    options: {
                        calculationsPerSecond: 10e9, // 10 billion calculations per second
                        good: 31557600e9, // 1 billion years
                        ok: 31557600e3 // 1 thousand years
                    },
                    outputTime: renderTime,
                    outputChecks: renderChecks
                });
                
                // setup custom values for "instantly"/"forever"
                hsimp.setDictionary({
                    "instantly": "Instantanément 😫 😫",
                    "forever": "🏆 Il n'existe pas de machine capable de trouver ce mot de passe 🏆",
                });

                // Run the HSIMP
                attachTo(passwordInput);
            }(this.document));
        </script>
</body>
</html>
