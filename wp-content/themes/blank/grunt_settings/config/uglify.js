module.exports ={
	prod: {
		files: [{
			expand: true,
			cwd: '<%= config.js %>/dev',
			src: ['*.js', '!*.min.js', '!admin.js'],
			dest: '<%= config.js %>/min',
			ext: '.min.js'
		}]
	}
};