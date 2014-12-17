
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
    <title>Last Minute - Home</title>

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

<link rel="import" href="/assets/elements/test-element.html">
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

    <sampler-scaffold label="Courses" fit>


      <paper-icon-button class="menuButton" icon="menu" ></paper-icon-button>
      <paper-fab class="sourceButton bottom" icon="launch"></paper-fab>
      
    

@foreach($data as $item)
  <core-item label="{{ $item->course_name }}" tag="{{ $item->course_no }}" url="course/{{ $item->id }}"></core-item>
@endforeach
      
    </sampler-scaffold>
  
  
  </body>

</html>
