module.exports = function(grunt) {
  
  var path = require('path');

  var config = {
    js: 'js',
    styles: 'styles',
    sass: 'sass'
  };

  require('time-grunt')(grunt);
 

  require('load-grunt-config')(grunt, {
    configPath: path.join(process.cwd(), 'grunt_settings/config'),
    jitGrunt: {
      customTasksDir: 'grunt_settings/tasks'
    },
    data: {
      config: config,
      pkg: grunt.file.readJSON('package.json'),
    }
  });



  
};

