# Cropit Made Simple ... 

## Dependency:  `jQuery` 


## HTML Markup 

````
<div id="myImgCropper" class="image-editor">

<span>Select image file</span>
  <input title="Select image" type="file" class="cropit-image-input" accept="image/*">

  <div title="Image Preview" class="cropit-preview"></div>

  <label class="image-size-label">Resize image</label>
  <input title="Resize Image" type="range" class="cropit-image-zoom-input"><br><br>

  <button title="Rotate Anti Clockwise" type="button" class="rotate-ccw">&#8634;</button>
  <button title="Rotate Clockwise" type="button" class="rotate-cw">&#8635;</button> <br><br>

  <textarea type="hidden" name="image-data" class="hidden-image-data"></textarea><br>

  <pre id="catch_error">This is optional</pre>

  <input type="submit">

</div>
````

##	JS part: how to initialize 

````
var arg = {
   image_editor     : '#image-editor1'
  ,error_container  : '#catch_error'  // optional
  ,imgHeight        : 500             // optional
  ,imgWidth         : 500             // optional
  ,previewHeight    : 500             // optional
  ,previewWidth     : 500             // optional
  ,debug            : true            // optional
}; 

initCropit(arg);
````

### CDN 
````
<link rel="stylesheet" href="https://raw.githubusercontent.com/an-amin/simply_cropit/master/cropit.min.css">
<script src="https://raw.githubusercontent.com/an-amin/simply_cropit/master/cropit.min.js"></script>
````

### Credits : [scottcheng/cropit](https://github.com/scottcheng/cropit)
### [scottcheng.github.io/cropit](http://scottcheng.github.io/cropit/)