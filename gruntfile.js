module.exports = function(grunt) {

  grunt.initConfig({


  // minify css
  cssmin: {
    my_target: {
      files: [{
          expand: true,
          cwd: 'controller/assets/css',
          src: ['*.css'],
          dest: 'controller/assets/css',
          ext: '.min.css'
      }]
    }
  },


  // convert less files in controller/assets/less/*.less to controller/assets/css/*.css
  less: {
    my_target: {
      files: [{
          expand: true,
          cwd: 'controller/assets/less',
          src: ['*.less'],
          dest: 'controller/assets/css',
          ext: '.css'
      }]
    }
  },

  // convert js files in controller/assets/js/*.js to controller/assets/min.js/*.min.js
  uglify: {
    my_target: {
      files: [{
          expand: true,
          cwd: 'controller/assets/js',
          src: '**/*.js',
          dest: 'controller/assets/min.js',
          ext: '.min.js'
      }]
    }
  },

  // convert js files in controller/assets/js/*.js to controller/assets/min.js/*.min.js
  concat: {
    dist: {
      src: ['controller/assets/js/*.js'],
      dest: 'controller/assets/output.js'
    }
  },

  jshint: {
    beforeconcat: ['controller/assets/**/*.js'],
    afterconcat: ['controller/assets/*-error.js']
  },

//


/*

                  ###########
                  WATCH FILES
                  ###########

*/


  // make 'grunt watch' task in bash available
  // watch over any alterations in controller/assets/less and controller/assets/js
  watch: {

    less: {
      files: ['controller/assets/less/*.less'],
      tasks: ['less'],
      options: {
        spawn: false,
      },
    },

    scripts: {
      files: ['controller/assets/js/*.js'],
      tasks: ['uglify'],
      options: {
        spawn: false,
      },
    },

    cssmin: {
      files: ['controller/assets/css/*.css'],
      tasks: ['cssmin'],
      options: {
        spawn: false,
      },
    },

  },



  });

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  
  grunt.registerTask('default', [
    'less',
    'uglify'
    ]);


};
