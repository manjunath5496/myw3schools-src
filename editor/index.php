<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#" class="loading"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>PHP Editor</title> <style> html.loading { background: white url('http://www.static.myw3schools.com/img/loading.gif') no-repeat 50% 50%; -webkit-transition: background-color 0; transition: background-color 0; background-position-x: 50%; background-position-y: 0%; } body { -webkit-transition: opacity 1s ease-in; transition: opacity 1s ease-in; } html.loading body { opacity: 0; -webkit-transition: opacity 0; transition: opacity 0; } </style> <link rel="stylesheet" type="text/css" href="http://www.static.myw3schools.com/css/codemirror.css"> <script> var html = document.getElementsByTagName('html')[0]; var removeLoading = function() { setTimeout(function() { html.className = html.className.replace(/loading/, ''); }, 3000); }; removeLoading(); </script> <script src="http://www.static.myw3schools.com/js/jquery.min.js"></script> <script src="http://www.static.myw3schools.com/js/editor-action.js"></script> <script src="http://www.static.myw3schools.com/js/codemirror.js"></script></head><body> <div class="row"> <textarea class="codemirror-textarea" id="ed_code"></textarea> <div class="app-row"> <button class="btn-action" id="run">Run</button> <button class="btn-action" id="clear">Clear</button> <button class="btn-action" id="refresh">Refresh</button></br> </br> <span id="error"></span> </div> </div> <div class="app-row"> <pre><div id="result" style="overflow-x:auto; background-color: #3D3D3D; color: white; height: 300px;" ></div></pre> </div></body></html>