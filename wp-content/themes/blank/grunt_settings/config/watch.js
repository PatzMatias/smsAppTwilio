module.exports = {
  options: {
      livereload: true,
  },
  sass: {
    files: ['<%= config.sass %>/{,*/}*.{scss,sass}'],
    tasks: ['sass:dev']
  },
  babel: {
    files: ['<%= config.js %>/dev/{,*/}*.js'],
    tasks: ['babel:dev'],
  },
  configFiles: {
    files: [ 'gruntfile.js', 'grunt_settings/config/*.js', 'grunt_settings/tasks/*.js' ],
    options: {
      reload: true
    }
  }
};