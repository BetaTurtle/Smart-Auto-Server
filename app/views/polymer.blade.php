
<!doctype html>
<!--
Copyright (c) 2014 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE
The complete set of authors may be found at http://polymer.github.io/AUTHORS
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS
-->
<html>
  <head>
    <title>Paper Elements Sampler</title>

    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, user-scalable=yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">



    <script src="assets/webcomponentsjs/webcomponents.js"></script>
    
    <link rel="shortcut icon" href="http://www.polymer-project.org/images/logos/p-logo-16.png">

    <link rel="import" href="assets/components/core-icons/core-icons.html">
    <link rel="import" href="assets/components/sampler-scaffold/sampler-scaffold.html">
    <link rel="import" href="assets/components/font-roboto/roboto.html">
    <link rel="import" href="assets/components/core-item/core-item.html">
    <link rel="import" href="assets/components/core-menu/core-submenu.html">
    <link rel="import" href="assets/components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="assets/components/paper-fab/paper-fab.html">

    <style>

      body {
        font-family: RobotoDraft, sans-serif;
        color: #333;
        margin: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        -webkit-touch-callout: none;
      }
      
    </style>

  </head>

  <body unresolved>

    <sampler-scaffold label="Paper Elements" fit>

      <paper-icon-button class="menuButton" icon="menu" ></paper-icon-button>
      <paper-fab class="sourceButton bottom" icon="launch"></paper-fab>
    
    <core-item label="Home page" tag="paper-checkbox" url="/"></core-item>


      <core-item label="Checkbox" tag="paper-checkbox" url="../paper-checkbox/demo.html"></core-item>

      <core-item label="Radio Button" tag="paper-radio-button" url="../paper-radio-group/demo.html"></core-item>

      <core-item label="Toggle Button" tag="paper-toggle-button" url="../paper-toggle-button/demo.html"></core-item>
      
      <core-item label="Input" tag="paper-input" url="../paper-input/demo.html"></core-item>
      
      <!-- <core-item label="Ripple Effect" tag="paper-ripple" url="../paper-ripple/demo.html"></core-item> -->
      
      <core-item label="Toolbar" tag="core-toolbar" url="demos/core-toolbar.html"></core-item>
      
      <core-item label="Spinner" tag="paper-spinner" url="../paper-spinner/demo.html"></core-item>

      <core-item label="Progress Bar" tag="paper-progress" url="../paper-progress/demo.html"></core-item>
      
      <core-item label="Slider" tag="paper-slider" url="../paper-slider/demo.html"></core-item>
      
      <core-item label="Tabs" tag="paper-tabs" url="../paper-tabs/demo.html"></core-item>
      
      <core-item label="Button" tag="paper-button" url="../paper-button/demo.html"></core-item>

      <core-item label="Icon Button" tag="paper-icon-button" url="../paper-icon-button/demo.html"></core-item>

      <core-item label="Floating Action Button" tag="paper-fab" url="../paper-fab/demo.html"></core-item>
      
      <core-item label="Dropdown" tag="paper-dropdown" url="../paper-dropdown/demo.html"></core-item>
      
      <core-item label="Dropdown Menu" tag="paper-dropdown-menu" url="../paper-dropdown-menu/demo.html"></core-item>
      
      <core-item label="Menu Button" tag="paper-menu-button" url="../paper-menu-button/demo.html"></core-item>
      
      <core-item label="Item" tag="paper-item" url="../paper-item/demo.html"></core-item>
      
      <core-item label="Dialog" tag="paper-dialog" url="../paper-dialog/demo.html"></core-item>
      
      <core-item label="Shadow" tag="paper-shadow" url="../paper-shadow/demo.html"></core-item>
      
      <core-item label="Toast" tag="paper-toast" url="../paper-toast/demo.html"></core-item>
      
    </sampler-scaffold>
  
  
  </body>

</html>
