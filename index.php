<!DOCTYPE html>
<html>
  <head>
    <title>Hesap</title>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body style="background-color:#eee;">
  <div class="row">

		  <div class="col-md-4"></div>
		  <div class="col-md-4"> 
		
		  <div class="bs-callout bs-callout-info">
			<h4>Maç kupon hesaplama sistemi</h4>
			<p>İddiaa kupon hesaplama sistemine maç oranını<br/> yazarken sayıların oranlarını "," ile ayrınız.<br/> <code>&lt;iddiaa&gt;</code> kupon sistemi.</p>
		  </div>
		<form class="form-inline"> 
		<div class="row">
		<div class="col-xs-4">
		<input type="text" name="mac_sayisi[1]" id="inputSuccess4" class="form-control" style="margin-bottom:10px; width:160px; float:left;" placeholder="Maç Oranı">
		</div>
		<div class="col-xs-4">
		<input type="text" name="mac_kodu_1'" style="margin-bottom:10px; width:145px; float:left" class="form-control" placeholder="Maç Kodu">
		</div>
		<button type="button" onclick="add_fields();" class="btn btn-success"><i class="fa fa-plus-square"></i></button>
		<div class="col-md-4"></div>
		</div>
		
		<div id="ekle"></div>
			<button type="button" onclick="Gonder();" class="btn btn-info"><i class="fa fa-refresh fa-spin"></i> Hesapla</button>
			<button type="button" onclick="Kaydet();" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Kaydet</button>
			<button type="button" onclick="goster();" class="btn btn-info"><i class="fa fa-cog fa-spin"></i> Misli</button>
						<button type="reset" class="btn btn-danger"><i class="fa fa-trash-o fa-lg"></i></button>
		<br/>
			<script type="text/javascript"> 
				function Gonder() {
					$.ajax({ 
						type: "POST",
						url: "hesap.php",
						data: $('form').serialize(), 
						error:function(){ $('#sonuc').html("Bir hata algılandı."); }, //Hata alınırsa ekrana bastırılacak veri 
						success: function(veri) {
						/*$('#inputName').val('');
						$('#inputEmail').val('');
						$('#inputMessage').val('');*/
						$('#sonuc').html(veri); 
						$('#sonuc_kazanc').html(veri);
							
						}									
					}); }				
			</script><br/>
		<div id="misli" style="display:none">
		<input type="radio" name="radio" value="1" checked /> 01&nbsp;&nbsp;
		<input type="radio" name="radio" value="2" /> 02&nbsp;&nbsp;
		<input type="radio" name="radio" value="3" /> 03&nbsp;&nbsp;
		<input type="radio" name="radio" value="4" /> 04&nbsp;&nbsp;
		<input type="radio" name="radio" value="5" /> 05&nbsp;&nbsp;
		<input type="radio" name="radio" value="6" /> 06&nbsp;&nbsp;
		<input type="radio" name="radio" value="7" /> 07&nbsp;&nbsp;<br/>
		<input type="radio" name="radio" value="8" /> 08&nbsp;&nbsp;
		<input type="radio" name="radio" value="9" /> 09&nbsp;&nbsp;
		<input type="radio" name="radio" value="10" /> 10&nbsp;&nbsp;
		<input type="radio" name="radio" value="20" /> 20&nbsp;&nbsp;
		<input type="radio" name="radio" value="30" /> 30&nbsp;&nbsp;
		<input type="radio" name="radio" value="40" /> 40&nbsp;&nbsp;
		<input type="radio" name="radio" value="50" /> 50&nbsp;&nbsp;<br/>
		<input type="radio" name="radio" value="60" /> 60&nbsp;&nbsp;
		<input type="radio" name="radio" value="70" /> 70&nbsp;&nbsp;
		<input type="radio" name="radio" value="80" /> 80&nbsp;&nbsp;
		<input type="radio" name="radio" value="90" /> 90&nbsp;&nbsp;
		<input type="radio" name="radio" value="100" /> 100&nbsp;&nbsp;
		<input type="radio" name="radio" value="110" /> 110&nbsp;&nbsp;
		</form>
		</div><br/>
		<div id="yazi">Oranlar :&nbsp;<b id="sonuc"></b></div>
		<div id="yazi">Kazanç :&nbsp;<b id="sonuc_kazanc"></b>&nbsp;TL</div>
		<div id="yazi_kopya"style="font-family:courier;">Copyright ® Batuhan Dinç. Tüm hakları gizli.</div>
		
		<i></i>
		</div>
		<script type="text/javascript"> 
		var room = 1;
		function add_fields() {
			room++;
			var objTo = document.getElementById('ekle')
			var divtest = document.createElement("div");
			divtest.innerHTML = '<div class="row" id="mac_' + room + '"><div class="col-xs-4"><input type="text" name="mac_sayisi['+room+']"  class="form-control" style="margin-bottom:10px; width:160px;" placeholder="Maç Oranı"></div><div class="col-xs-4"><input type="text" name="mac_kodu_' + room +'" style="margin-bottom:10px; width:145px;" class="form-control" placeholder="Maç Kodu"></div></div>';
			objTo.appendChild(divtest)
		$('mac_' + room + '').remove(e);
		}
		
		var sayi = 0;
		function goster()
		{
			if (sayi == 0)
			{
				document.getElementById("misli").style.display = "block";
				sayi = 1;
			}
			else
			{
				document.getElementById("misli").style.display = "none";
				sayi = 0;
			}
		}
		</script>
	<div class="col-md-4"></div>
	</div>


  </body>
</html>