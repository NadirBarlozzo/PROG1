
<!DOCTYPE>
<html>
<head>
    <style>
        table {
            margin-left: auto;
            margin-right: auto;
            border-spacing: 10px;
        }
        input {
            color: gray;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<form method="post" id="mainForm" action="DataManager.php" onsubmit="return validateData()">
	<table>
		<tr>
			<td><input type="text" name="name" placeholder="Nome"></td>
			<td><input type="text" name="surname" placeholder="Cognome"></td>
		</tr>
		<tr>
			<td><input type="date" name="datepicker" id="datepicker" placeholder="Data di nascita" onchange="validateAge()"></td>
			<td>Maschio:<input type="radio" name="sex" id="sexm" value="Maschio" checked>Femmina:<input type="radio" name="sex" id="sexf" value="Femmina"></td>
        </tr>
        <tr>
			<td>
                <select name="nation" placeholder="Nazione">
					<script>
						var states = new Array("Vuoto","Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
						for(var hi=0; hi<states.length; hi++){
							document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
						}
					</script>
				</select>
            </td>
			<td><input type="text" name="address" placeholder="Via" style="width:125px; margin-right:3%"><input type="text" name="nr" placeholder="Nr" style="width:40px;"></td>
		</tr>
		<tr>
            <td><input type="text" name="nationality" placeholder="Nazionalità"></td>
			<td><input type="text" name="home" placeholder="Domicilio" style="width:120px; margin-right:3%"><input type="text" name="npa" placeholder="NPA" style="width:45px;"></td>
		</tr>
		<tr>
			<td><input type="text" name="state" placeholder="Cantone"></td>
		</tr>
		<tr>
			<td><input type="text" name="cellPhone" placeholder="Numero di cellulare"></td>
			<td><input type="text" name="homePhone" placeholder="Numero di casa"></td>
		</tr>
		<tr>
			<td><input type="email" name="email" placeholder="E-mail"></td>
		</tr>
        <td><span style="margin-left: auto;margin-right: auto;">Studente:<input type="radio" name="interface" onclick="switchInterface(0)" checked>
		Apprendista:<input type="radio" name="interface" onclick="switchInterface(1)"></span></td>
    </table>
    <table id="parent" hidden>
        <tr>
            <td>Dati anagrafici dell'autorità parentale AP</td>
        </tr>
        <tr>
			<td><input type="text" name="name2" placeholder="Nome AP"></td>
			<td><input type="text" name="surname2" placeholder="Cognome AP"></td>
		</tr>
		<tr>
			<td><input type="date" name="datepicker2" placeholder="Data di nascita AP"></td>
			<td>Maschio:<input type="radio" name="sex2" id="sexm2" value="Maschio">Femmina:<input type="radio" name="sex2" id="sexf2" value="Femmina"></td>
        </tr>
		<tr>
			<td>
				<select name="authority" placeholder="Autorità">
						<option>Ruolo (Madre/Padre/Tutore)</option><option>Madre</option><option>Padre</option><option>Tutore</option>
				</select>
			</td>
		</tr>
        <tr>
			<td>
                <select name="nation2" placeholder="Nazione AP">
                    <script>
                        var states = new Array("Vuoto","Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
						for(var hi=0; hi<states.length; hi++){
							document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
						}
                    </script>
                </select>
            </td>
			<td><input type="text" name="address2" placeholder="Via AP" style="width:125px; margin-right:3%"><input type="text" name="nr2" placeholder="Nr AP" style="width:40px;"></td>
		</tr>
		<tr>
            <td><input type="text" name="nationality2" placeholder="Nazionalità AP"></td>
			<td><input type="text" name="home2" placeholder="Domicilio AP" style="width:120px; margin-right:3%"><input type="text" name="npa2" placeholder="NPA AP" style="width:45px;"></td>
		</tr>
		<tr>
			<td><input type="text" name="state2" placeholder="Cantone AP"></td>
		<tr>
		<tr>
			<td><input type="text" name="cellPhone2" placeholder="Numero di cellulare AP"></td>
			<td><input type="text" name="homePhone2" placeholder="Numero di casa AP"></td>
		</tr>
		<tr>
			<td><input type="email" name="email2" placeholder="e-mail AP"></td>
		<tr>
    </table>
    <table id="school">
        <tr>
			<td>Dati scolastici</td>
		</tr>
        <tr>
			<td>
			    <select name="schoolType" placeholder="Tipo di scuola">
                    <option>Tipo (Elementare/Media/Superiore)</option>
                    <option>Elementare</option>
                    <option>Media</option>
                    <option>Superiore</option>
                </select>
			</td>
		</tr>
		<tr>
			<td><input type="text" name="schoolName" placeholder="Denominazione scuola"></td>
		</tr>
        <tr>
            <td><input type="text" name="schoolYear" placeholder="Ultimo anno scolastico"></td>
        </tr>
		<tr>
			<td><input type="text" name="schoolPlace" placeholder="Sede scuola"></td>
		</tr>
    </table>
    <table id="work" hidden>
        <tr>
            <td>Dati lavorativi</td>
        </tr>
        <tr>
			<td><input type="text" name="workName" placeholder="Denominazione apprendistato" style="width: 190px;"></td>
		</tr>
        <tr>
            <td><input type="text" name="workYear" placeholder="Ultimo anno di apprendistato" style="width: 190px;"></td>
        </tr>
		<tr>
			<td><input type="text" name="workPlace" placeholder="Sede apprendistato"></td>
		</tr>
        <tr>
            <td><input type="text" name="workType" placeholder="Professione"></td>
        </tr>
    </table>
	<table>
		<tr>
            <td><input type="submit" name="submit" value="Invia registrazione"></td>
        </tr>
    </table>
	</form>
	<script>
        var age = 0;
        var gface = 0;

        Array.prototype.remove = function(from, to) {
            var rest = this.slice((to || from) + 1 || this.length);
            this.length = from < 0 ? this.length + from : from;
            return this.push.apply(this, rest);
        };

        function switchInterface(face) {
            if(face == 1) {
                $('#work').css('display','table');
                $('#school').css('display','none');
            }
            else {
                $('#school').css('display','table');
                $('#work').css('display','none');
            }
            gface = face;
        }

		function validateAge()
		{
            var d = $('#datepicker').val();
            var today = new Date();
            var birthDate = new Date(d);
            age = today.getFullYear() - birthDate.getFullYear();
            var m = today.getMonth() - birthDate.getMonth();
            if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            if(age < 18) {
                 $('#parent').css('display','table');
            }
            else {
                 $('#parent').css('display','none');
            }
		}

		function validateData()
		{
            var n = $('#mainForm input[name=name]');
            var s = $('#mainForm input[name=surname]');
            var d = $('#mainForm input[name=datepicker]');
            var se = $('#mainForm input[name=sex]');
            var na = $('#mainForm input[name=nation]');
            var nat = $('#mainForm input[name=nationality]');
            var ad = $('#mainForm input[name=address]');
            var nr = $('#mainForm input[name=nr]');
            var h = $('#mainForm input[name=home]');
            var npa = $('#mainForm input[name=npa]');
            var st = $('#mainForm input[name=state]');
            var cn = $('#mainForm input[name=cellPhone]');
            var hn = $('#mainForm input[name=homePhone]');
            var e = $('#mainForm input[name=email]');

            var n2 = $('#mainForm input[name=name2]');
            var s2 = $('#mainForm input[name=surname2]');
            var d2 = $('#mainForm input[name=datepicker2]');
            var se2 = $('#mainForm input[name=sex2]');
            var na2 = $('#mainForm input[name=nation2]');
            var nat2 = $('#mainForm input[name=nationality2]');
            var ad2 = $('#mainForm input[name=address2]');
            var nr2 = $('#mainForm input[name=nr2]');
            var h2 = $('#mainForm input[name=home2]');
            var npa2 = $('#mainForm input[name=npa2]');
            var st2 = $('#mainForm input[name=state2]');
            var cn2 = $('#mainForm input[name=cellPhone2]');
            var hn2 = $('#mainForm input[name=homePhone2]');
            var e2 = $('#mainForm input[name=email2]');

            var stype = $('#mainForm input[name=schoolType]');
            var sname = $('#mainForm input[name=schoolName]');
            var splace = $('#mainForm input[name=schoolPlace]');
            var syear = $('#mainForm input[name=schoolYear]');

            var wtype = $('#mainForm input[name=workType]');
            var wname = $('#mainForm input[name=workName]');
            var wplace = $('#mainForm input[name=workPlace]');
            var wyear = $('#mainForm input[name=workYear]');

            var arr = [ n, s, d, nat, ad, nr, h, npa, st, cn, hn, e];

            if(age < 18) {
                arr.push(n2, s2, d2, nat2, ad2, nr2, h2, npa2, st2, cn2, hn2, e2);
            }
            else {
                arr.remove(12, 23);
            }

            if(gface == 0) {
                arr.remove(24, 26);
                arr.push(sname, splace, syear);
            }
            else {
                arr.remove(24, 26);
                arr.push(wname, wplace, wyear, wtype);
            }

            console.log(arr);

            for (var i = 0; i < arr.length; i++) {
                if(arr[i].val() == "" || arr[i].val() == null || arr[i].val() == undefined) {

                    alert($(arr[i]).attr("placeholder") + " non può essere lasciato vuoto.");
                    return false;
                }
            }
			//arr.indexOf(n) > -1 && 
			if(/\d/.test(n) == true) {
				alert("Il nome non può contenere numeri");
				return false;
			}
			
			if(/\d/.test(s) == true) {
				alert("Il nome non può contenere numeri");
				return false;
			}
			
			return true;
		}
	</script>
</body>
</html>
