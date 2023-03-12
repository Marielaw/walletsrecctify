<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bo.css">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg section-2">
    <ul class="navbar-nav">
        <a class="nav-link font-weight-bold" href="claim.php">Wallet connect</a>
      <li class="nav-item">
        <a class="nav-link font-weight-bold" href="wallets.php">Go to wallet</a>
      </li>
    </ul>
</nav>
</div>

<div class="container section-3">
 <center><img src="back.webp" width="100%"></center>
</div>
<div class="container">
  <center><img src="bak2.webp" width="100%"></center>
</div>
  <center>
  <div class="btn btn-primary" style="width:250px; margin-top:55px; margin-bottom:55px;">
    <a href="wallets.php" style="color: #fff;">Go to Wallet</a></div>
    </center>
<div class="container">
 <h2 class="font-weight-bold">What is WalletConnect?</h2><br>
 <p>WalletConnect is an open source protocol for connecting decentralised applications to mobile wallets with QR code scanning or deep linking. A user can interact securely with any Dapp from their mobile phone, making WalletConnect wallets a safer choice compared to desktop or browser extension wallets.</p>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <h3>How does it work?</h3>
      <p>WalletConnect connects web applications to supported mobile wallets. The WalletConnect session is started by scanning a QR code (desktop) or by clicking an application deep link (mobile)</p>
    </div>
    <div class="col">
      <img src="imag1.jpeg" height="250px">
      <img src="imag.jpeg" height="250px">
    </div>
    <div class="col">
      <h3>Is there a token?</h3>
      <p>There is no token. WalletConnect protocol does not run on a blockchain and there are no fees.</p>
    </div>
    <div class="col-md">
      <h3 class="font-weight-bold">How can I help WalletConnect project?</h3>
      <p>WalletConnect project is developed by open source developers of various Wallet and Dapp projects. Please contact us on Discord if you want to help the project.</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md"></div>
    <div class="col-md">
      <h3>Frequently asked questions</h3>
      <h5> How do I install WalletConnect?</h5>
      <p>WalletConnect is not an app, but a protocol supported by many different decentralised applications and wallets. To use WalletConnect, install any mobile wallet supporting the WalletConnect protocol. WalletConnect wallets are available for Android and iPhone.</p>
    </div>
    <div class="col-md"></div>
    <div class="col-md"></div>
  </div>
</div>
<div class="container">
  <h2 style="margin-bottom: 30px;">How can I build a wallet supporting WalletConnect?</h4>
  <p class="display-4 font-weight-bold" style="margin-bottom: 120px;">There are libraries for React-Native (Javascript), Android (Kotlin) and Swift (iOS) available. Read more about it in our documentation.</p>
  <div class="row">
    <div class="col-md">
      <h4>How can I add WalletConnect support to a Dapp I developed?</h4>
      <p>You can support various wallets either using Web3Modal library or add support for WalletConnect provider directly.</p>
    </div>
    <div class="col-md">
      <h4>How do web frontend and mobile wallets communicate?</h4>
      <p>Communication happens over a bridge server that relays messages without access to their content. The contents are encrypted using the session data shared by the QR code or deep link between the dapp and wallet. Read more about it in our documentation. WalletConnect Labs runs a public bridge server, but you can also deploy your own.</p>
    </div>
    <div class="col-md">
      <img src="foot.jpeg" height="300px" width="300px">
    </div>
  </div>
</div>
 

<footer class="d-flex justify-content-center mt-5">
 
</footer>
<script src="jquery.js"> </script>
<script src="bootstrap.js"> </script>
</body>
</html>