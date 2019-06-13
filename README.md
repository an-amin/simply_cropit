# Cropit Made Simple ... 
Simple Image Cropper. Crop it (JavaScript Image Library) made easy. 

## Dependency:  `jQuery` 


## HTML Markup 

````
<div id="image-editor" class="image-editor">

  <label>Select image file</label>
  <input title="Select image" type="file" class="cropit-image-input" accept="image/*">

  <div title="Image Preview" class="cropit-preview"></div>

  <label class="image-size-label">Resize image</label>
  <input title="Resize Image" type="range" class="cropit-image-zoom-input">

  <button title="Rotate Anti Clockwise" type="button" class="rotate-ccw">&#8634;</button>
  <button title="Rotate Clockwise" type="button" class="rotate-cw">&#8635;</button>

  <br><textarea type="hidden" name="image-data" class="hidden-image-data"></textarea>

  <pre id="catch-error">Error Container : This is optional</pre>

  <input type="submit">

</div>
````

##	JS part: how to initialize 

````
$(document).ready(function(){

  var arg = {
      image_editor    : '#image-editor'
    , error_container : '#catch-error'  // optional
    , imgHeight       : 500             // optional
    , imgWidth        : 500             // optional
    , previewHeight   : 500             // optional
    , previewWidth    : 500             // optional
    , quality         : 0.75            // optional
    , originalSize    : false           // optional
    , smallImage      : true            // optional
    , debug           : false           // optional
  }; 

  simplyCropit(arg);

});
````

### CDN 
````
<link rel="stylesheet" href="https://raw.githubusercontent.com/an-amin/simply_cropit/master/cropit.min.css">
<script src="https://raw.githubusercontent.com/an-amin/simply_cropit/master/cropit.min.js"></script>
````

### Credits 
[scottcheng/cropit](https://github.com/scottcheng/cropit) - [scottcheng.github.io/cropit](http://scottcheng.github.io/cropit/)