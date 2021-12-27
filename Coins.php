<?php 
	session_start();
	if(isset($_SESSION['user'])) {
		echo'<html>
	<head>
		<?php // Göktürk Turan 290201096 ?>
		<title> Crypto World </title>
		<style>
			table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
			}
		</style>
	</head>
	<body><center>
		<div>
			<img src="logo5.png" width="300" usemap="#image-map">
			<map id="logomap" name="image-map">
    				<area shabe="rect" coords="20,0,270,130" href="index.php">
			</map>
		</div>
		<hr>
		<div>
		<a href="index.php"  style="color:0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Profile.php" style="color:#0462B5"><font size="+3"><b>Profilim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="Çıkış.php" style="color:0462B5"><font size="+3"><b>Çıkış Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<h3><u>Piyasa Değeri En Yüksek İlk 20 Coin</u></h3>
		<table>
  			<tr>
    				<td><b><img src="coins/1.png"><a href="https://coinmarketcap.com/tr/currencies/bitcoin/">1. Bitcoin</a></b></td>
				<td><b><img src="coins/1027.png"><a href="https://coinmarketcap.com/tr/currencies/ethereum/">2. Ethereum</a></b></td>
				<td><b><img src="coins/1839.png"><a href="https://coinmarketcap.com/tr/currencies/binance-coin/">3. Binance Coin</a></b></td>
				<td><b><img src="coins/825.png"><a href="https://coinmarketcap.com/tr/currencies/tether/">4. Tether</a></b></td>
				<td><b><img src="coins/5426.png"><a href="https://coinmarketcap.com/tr/currencies/solana/">5. Solana</a></b></td>
  			</tr>
  			<tr>
    				<td><b><img src="coins/2010.png"><a href="https://coinmarketcap.com/tr/currencies/cardano/">6. Cordano</a></b></td>
    				<td><b><img src="coins/52.png"><a href="https://coinmarketcap.com/tr/currencies/xrp/">7. XRP</a></b></td>
    				<td><b><img src="coins/3408.png"><a href="https://coinmarketcap.com/tr/currencies/usd-coin/">8. USD Coin</a></b></td>
				<td><b><img src="coins/6636.png"><a href="https://coinmarketcap.com/tr/currencies/polkadot-new/">9. Polkadot</a></b></td>
				<td><b><img src="coins/74.png"><a href="https://coinmarketcap.com/tr/currencies/dogecoin/">10. Doge Coin</a></b></td>
  			</tr>
  			<tr>
    				<td><b><img src="coins/5805.png"><a href="https://coinmarketcap.com/tr/currencies/avalanche/">11. Avalanche</a></b></td>
    				<td><b><img src="coins/5994.png"><a href="https://coinmarketcap.com/tr/currencies/shiba-inu/">12. SHIBA INU</a></b></td>
    				<td><b><img src="coins/4172.png"><a href="https://coinmarketcap.com/tr/currencies/terra-luna/">13. Terra</a></b></td>
				<td><b><img src="coins/3635.png"><a href="https://coinmarketcap.com/tr/currencies/crypto-com-coin/">14. Crypto.com Coin</a></b></td>
				<td><b><img src="coins/3717.png"><a href="https://coinmarketcap.com/tr/currencies/wrapped-bitcoin/">15. Wrapped Bitcoin</a></b></td>
  			</tr>
			<tr>
    				<td><b><img src="coins/2.png"><a href="https://coinmarketcap.com/tr/currencies/litecoin/">16. Litecoin</a></b></td>
				<td><b><img src="coins/4687.png"><a href="https://coinmarketcap.com/tr/currencies/binance-usd/">17. Binance USD</a></b></td>
				<td><b><img src="coins/7083.png"><a href="https://coinmarketcap.com/tr/currencies/uniswap/">18. Uniswap</a></b></td>
				<td><b><img src="coins/3890.png" width="65"><a href="https://coinmarketcap.com/tr/currencies/polygon/">19. Polygon</a></b></td>
				<td><b><img src="coins/1975.png"><a href="https://coinmarketcap.com/tr/currencies/chainlink/">20. Chainlink</a></b></td>
  			</tr>
		</table>
		
		<hr>
		</center>
	</body>
</html>'; } else { echo '<html>
	<head>
		
		<title> Crypto World </title>
		<style>
			table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
			}
		</style>
	</head>
	<body><center>
		<div>
			<img src="logo5.png" width="300" usemap="#image-map">
			<map id="logomap" name="image-map">
    				<area shabe="rect" coords="20,0,270,130" href="index.php">
			</map>
		</div>
		<hr>
		<div>
		<a href="index.php"  style="color:0462B5"><font size="+3"><b>Ana Sayfa</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="İletişim.php" style="color:0462B5"><font size="+3"><b>İletişim</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="ÜyeOl.php" style="color:0462B5"><font size="+3"><b>Kayıt Ol</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="GirişYap.php" style="color:0462B5"><font size="+3"><b>Giriş Yap</b></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div>
		<hr>
		<h3><u>Piyasa Değeri En Yüksek İlk 20 Coin</u></h3>
		<table>
  			<tr>
    				<td><b><img src="coins/1.png"><a href="https://coinmarketcap.com/tr/currencies/bitcoin/">1. Bitcoin</a></b></td>
				<td><b><img src="coins/1027.png"><a href="https://coinmarketcap.com/tr/currencies/ethereum/">2. Ethereum</a></b></td>
				<td><b><img src="coins/1839.png"><a href="https://coinmarketcap.com/tr/currencies/binance-coin/">3. Binance Coin</a></b></td>
				<td><b><img src="coins/825.png"><a href="https://coinmarketcap.com/tr/currencies/tether/">4. Tether</a></b></td>
				<td><b><img src="coins/5426.png"><a href="https://coinmarketcap.com/tr/currencies/solana/">5. Solana</a></b></td>
  			</tr>
  			<tr>
    				<td><b><img src="coins/2010.png"><a href="https://coinmarketcap.com/tr/currencies/cardano/">6. Cordano</a></b></td>
    				<td><b><img src="coins/52.png"><a href="https://coinmarketcap.com/tr/currencies/xrp/">7. XRP</a></b></td>
    				<td><b><img src="coins/3408.png"><a href="https://coinmarketcap.com/tr/currencies/usd-coin/">8. USD Coin</a></b></td>
				<td><b><img src="coins/6636.png"><a href="https://coinmarketcap.com/tr/currencies/polkadot-new/">9. Polkadot</a></b></td>
				<td><b><img src="coins/74.png"><a href="https://coinmarketcap.com/tr/currencies/dogecoin/">10. Doge Coin</a></b></td>
  			</tr>
  			<tr>
    				<td><b><img src="coins/5805.png"><a href="https://coinmarketcap.com/tr/currencies/avalanche/">11. Avalanche</a></b></td>
    				<td><b><img src="coins/5994.png"><a href="https://coinmarketcap.com/tr/currencies/shiba-inu/">12. SHIBA INU</a></b></td>
    				<td><b><img src="coins/4172.png"><a href="https://coinmarketcap.com/tr/currencies/terra-luna/">13. Terra</a></b></td>
				<td><b><img src="coins/3635.png"><a href="https://coinmarketcap.com/tr/currencies/crypto-com-coin/">14. Crypto.com Coin</a></b></td>
				<td><b><img src="coins/3717.png"><a href="https://coinmarketcap.com/tr/currencies/wrapped-bitcoin/">15. Wrapped Bitcoin</a></b></td>
  			</tr>
			<tr>
    				<td><b><img src="coins/2.png"><a href="https://coinmarketcap.com/tr/currencies/litecoin/">16. Litecoin</a></b></td>
				<td><b><img src="coins/4687.png"><a href="https://coinmarketcap.com/tr/currencies/binance-usd/">17. Binance USD</a></b></td>
				<td><b><img src="coins/7083.png"><a href="https://coinmarketcap.com/tr/currencies/uniswap/">18. Uniswap</a></b></td>
				<td><b><img src="coins/3890.png" width="65"><a href="https://coinmarketcap.com/tr/currencies/polygon/">19. Polygon</a></b></td>
				<td><b><img src="coins/1975.png"><a href="https://coinmarketcap.com/tr/currencies/chainlink/">20. Chainlink</a></b></td>
  			</tr>
		</table>
		
		<hr>
		</center>
	</body>
</html>'; }
?>


