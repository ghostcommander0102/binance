<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Binance Watch</title>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=Edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="description" content="Binance price watch and crypto news app." />
    <meta name="author" content="Rainner Lins | @raintek_ | https://rainnerlins.com | https://github.com/rainner" />

     <style type="text/css">
      @keyframes _spin { 0% { transform: rotate( 0deg ); } 100% { transform: rotate( 359deg ); } }
      html, body { position: relative; margin: 0; padding: 0; min-height: 100vh; }
      #_spnr { display: flex; flex-direction: column; align-items: center; justify-content: center; position: fixed; left: 0; top: 0; width: 100%; height: 100%; background-color: #192029; z-index: 9999; }
      #_spnr { text-align: center; font-family: Arial, Helvetica, sans-serif; color: antiquewhite; }
      #_spnr h1 { display: block; margin: 0; padding: 0; letter-spacing: -2px; font-weight: bold; text-transform: uppercase; color: orange; }
      #_spnr svg { display: block; margin: 0; padding: 0; animation: _spin 1s linear infinite; }
      #_spnr noscript { max-width: 500px; }
      #_spnr a { color: orange; }
    </style>

    <link href="public/css/fonts.css" rel="stylesheet" />
    <link href="public/bundles/bootstrap.css" rel="stylesheet" />
    <link href="public/bundles/app.min.css" rel="stylesheet" />
    <link href="favicon.ico" rel="shortcut icon" />

  </head>
  <body>

    <div id="_spnr">
      <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-ring">
        <circle cx="50" cy="50" fill="none" r="40" stroke="#151b23" stroke-width="8"></circle>
        <circle cx="50" cy="50" fill="none" r="40" stroke="#f2a10d" stroke-width="6" stroke-linecap="round" stroke-dasharray="150 100"></circle>
      </svg>
      <h1>Binance Watch</h1>
      <noscript>
        This applications requires Javascript to run.
        Make sure Javascript is enabled in your web browser settings and try again.
        <a href="https://www.enable-javascript.com/" target="_blank">Visit this link</a>
        for more information on how to enable Javascript.
      </noscript>
    </div>

    <div id="app" v-cloak></div>
    <script src="public/js/crypto-js.min.js"></script>
    <script src="public/bundles/app.min.js"></script>

  </body>
</html>
