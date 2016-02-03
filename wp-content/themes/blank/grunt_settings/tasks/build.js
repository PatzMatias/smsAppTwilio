module.exports = function(grunt){
	grunt.registerTask('build', ['sass:prod','uglify:prod']);
};