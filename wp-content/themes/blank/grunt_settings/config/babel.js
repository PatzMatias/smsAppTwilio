module.exports = {
  options: {
    sourceMap: true
  },
  dev: {
    files: [{
      expand: true,
      cwd: '<%= config.js %>/dev',
      src: ['{,*/}*.js', '!*.min.js'],
      dest: '<%= config.js %>/min',
      ext: '.min.js'
    }]
  }
};