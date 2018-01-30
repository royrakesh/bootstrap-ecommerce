<p align="center">
  <img src="screenshot/8d22dbedd0944856a4fa2d35b21c7e1b_13_1600.jpg?raw=true">
</p>



# Bootstrap Ecommerce Template Using Paper theme

This template is build with [Bootstrap Paper] theme and [bootstrap-sass (3.3.7)]
## Installation
 * Using Git `git clone https://github.com/royrakesh/bootstrap-ecommerce.git` 
 * Using Composer `composer create-project royrakesh/bootstrap-ecommerce`

## Installation for development

 * First clone the repository, after cloning the repository run `npm install` or `yarn install` 
 * Change the url of browser sync (in gruntfile.js)  then just run `grunt` to start the server 
 * Sass files ara avalable for development 
 

## Credits   

  * Icon: [Flaticon] and [Font Awesome]
  * Effects: [Hover.css]
  * Js : [Jquery 3.2.1]



## Known Issue

* The `browserSync` only works with host name (like yourhost.dev ), simple localhost not going to work so if you have  [Laragon]  (which automatically create a hostname on project creation ) then you can use `browserSync` or you just have to comment the part in `gruntfile.js` file and remove it from `grunt.registerTask('default', ['copy', 'sass', 'uglify', 'browserSync', 'watch']);` here.



  [Bootstrap Paper]: https://bootswatch.com/paper/
  [bootstrap-sass (3.3.7)]: https://github.com/twbs/bootstrap-sass
  [Flaticon]: https://www.flaticon.com/
  [Font Awesome]: http://fontawesome.io/
  [Hover.css]: http://ianlunn.github.io/Hover/
  [Jquery 3.2.1]: https://www.npmjs.com/package/jquery
  [Laragon]: http://laragon.org/