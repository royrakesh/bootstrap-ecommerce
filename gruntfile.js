module.exports = function(grunt)
{
  // the general grunt function that is run
  grunt.initConfig(
  {
    copy: {
      main: {
        files: [
        {
          expand: true,
          src: ["node_modules/font-awesome-scss/fonts/*"],
          dest: 'assets/fonts',
          filter: 'isFile',
          flatten: true,
        }, 
        {
          expand: true,
          src: ["node_modules/bootstrap-sass/assets/fonts/bootstrap/*"],
          dest: 'assets/fonts',
          filter: 'isFile',
          flatten: true,
        }, ],
      },
    },
    sass: { // Task
      dist: { // Target
        options: { // Target options
          style: 'compressed',
        },
        files: { // Dictionary of files
          'assets/css/app.min.css': ['resource/scss/app.scss']
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
          'assets/js/app.min.js': ['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.slim.js', 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'resource/js/main.js']
        }
      }
    },
    watch: {
      options: {
        nospawn: true
      },
      css: {
        files: ['resource/scss/**/*.scss', 'resource/scss/*.scss'],
        tasks: ['sass'],
      },
      js: {
        files: ['resource/js/*.js', 'resource/js/*/*.js'],
        tasks: ['uglify'],
      }
    },
    browserSync: {
      dev: {
        bsFiles: {
          src: ['assets/css/app.min.css', 'assets/js/*.js', '*.php', '**/*.php']
        },
        options: {
          watchTask: true,
          proxy: 'bootstrapmat.dev',
        }
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-browser-sync');
  // registering the default task that we're going to use along with watch
  grunt.registerTask('default', ['copy', 'sass', 'uglify', 'browserSync', 'watch']);
};