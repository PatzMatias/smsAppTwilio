module.exports = {
    options: {
      sourceMap: true,
    },
    dev: {
      options:{
        outputStyle: 'nested'
      },
      files: [{
        expand: true,
        cwd: '<%= config.sass %>',
        src: ['*.{scss,sass}'],
        dest: '<%= config.styles %>',
        ext: '.min.css'
      }]
    },
    prod: {
      options:{
        outputStyle: 'compressed'
      },
      files: [{
        expand: true,
        cwd: '<%= config.sass %>',
        src: ['*.{scss,sass}'],
        dest: '<%= config.styles %>',
        ext: '.min.css'
      }]
    }
};