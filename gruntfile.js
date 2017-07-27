module.exports = function(grunt) {



  // the general grunt function that is run
grunt.initConfig({
  sass: {                              // Task
    dist: {                            // Target
      options: {                       // Target options
        style: 'compressed',
      },
      files: {                         // Dictionary of files
        'assets/css/main.css': 'resource/scss/app.scss',       // 'destination': 'source'
      }
    }
  },

  cssmin: {
  options: {
    mergeIntoShorthands: false,
    roundingPrecision: -1
  },
  target: {
    files: {
      'assets/css/app.min.css': [
                                  'assets/css/main.css',
                                  'assets/css/font-awesome.css',
                                  'resource/css/animations.css'
                                ]
      }
    }
  },
  uglify: {
      options: {
        mangle: false,
        sourceMap: true,
        drop_console: true
      },
      target: {
        files: {
          'assets/js/app.min.js': [
                                  'resource/js/bootstrap.js',
                                  'resource/js/css3-animate-it.js',
                                  'resource/js/main.js'
                                  ]
        }
      }
    },
   watch: {
      options: {
       nospawn:true
      },
      css: {
        files: ['resource/scss/*/*.scss' , 'resource/scss/*.scss'],
        tasks: ['sass','cssmin'],
      },
      js:{
        files:['resource/js/*.js' , 'resource/js/*/*.js'],
        tasks:['uglify'],
      }
    },
    browserSync: {
      dev: {

        bsFiles:{
          src: [
              'assets/css/app.min.css',
              'assets/js/*.js',
              '*.php'
              ]
        },
        options: {
          watchTask:true,
          proxy: 'bootstrapmat.dev',
        }

      }
    }

});



  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-browser-sync');


  // registering the default task that we're going to use along with watch
  grunt.registerTask('default', ['sass','cssmin','uglify', 'browserSync','watch']);


};
