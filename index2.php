<!DOCTYPE html>
<html>
  <head>
    <!-- 1. Load platform.js for polyfill support. -->
    <script src="bower_components/platform/platform.js"></script>

    <!-- 2. Use an HTML Import to bring in the element. -->
    <link rel="import"
          href="bower_components/core-ajax/core-ajax.html">
    <link rel="import" href="components/core-elements/core-elements.html">
<link rel="import" href="components/paper-elements/paper-elements.html">


  </head>
  <body>
    <!-- 3. Declare the element. Configure using its attributes. -->
    <core-ajax url="http://example.com/json"
               handleAs="json"></core-ajax>

    <script>
      // Wait for 'polymer-ready'. Ensures the element is upgraded.
      window.addEventListener('polymer-ready', function(e) {
        var ajax = document.querySelector('core-ajax');

        // Respond to events it fires.
        ajax.addEventListener('core-response', function(e) {
          console.log(this.response);
        });

        ajax.go(); // Call its API methods.
      });
    </script>
    
    <paper-shadow z="3"><div style="width: 100px; height: 100px; background: green;">
  
 </div>
</paper-shadow>
  </body>
</html>