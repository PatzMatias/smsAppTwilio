module.exports = {
  sass: {
    files: ['<%= config.sass %>/{,*/}*.{scss,sass}'],
    tasks: ['sass:dev']
  },
  babel: {
    files: ['<%= config.js %>/dev/{,*/}*.js'],
    tasks: ['babel:dev']
  },
  configFiles: {
    files: [ 'gruntfile.js', 'grunt/config/*.js', 'grunt/tasks/*.js' ],
    options: {
      reload: true
    }
  }
};