# Bootstrap Ecommerce Template Using Paper theme

This template is build with [Bootstrap Paper] theme and [bootstrap-sass (3.3.7)]
## Installation
 * Using Git `git clone https://github.com/royrakesh/bootstrap-ecommerce.git` 
 * Using Composer `composer create-project royrakesh/bootstrap-ecommerce`

## Installation for development

 * First clone the repository, after cloning the repository run `npm install` or `yarn install` 
 * Change the url of browser sync (in gruntfile.js)  then just run `grunt` to start the server 
 * Sass files ara avalable for development 
 

 ![browser sync](http://res.cloudinary.com/rakeshrio/image/upload/v1501840842/Sc_vxkdwx.png "Bootstrap Ecommerce Template")

## Credits   

  * Icon: [Flaticon] and [Font Awesome]
  * Effects: [Hover.css]
  * Js : [Jquery 3.2.1]


![Bootstrap Ecommerce Template](http://magicmockups.com/media/screen/guest/16/3d21c542e1b748028a8ea8e677810bd4_22_1920.jpg "Bootstrap Ecommerce Template")


## Known Issue

The `browserSync` only works with host name (like yourhost.dev ), simple localhost not going to work so if you have  [Laragon]  (which automatically create a hostname on project creation ) the you can use `browserSync` or you just have to comment the part in `gruntfile.js` file and remove it from `grunt.registerTask('default', ['copy', 'sass', 'uglify', 'browserSync', 'watch']);` here.



  [Bootstrap Paper]: https://bootswatch.com/paper/
  [bootstrap-sass (3.3.7)]: https://github.com/twbs/bootstrap-sass
  [Flaticon]: https://www.flaticon.com/
  [Font Awesome]: http://fontawesome.io/
  [Hover.css]: http://ianlunn.github.io/Hover/
  [Jquery 3.2.1]: https://www.npmjs.com/package/jquery
  [Laragon]: http://laragon.org/