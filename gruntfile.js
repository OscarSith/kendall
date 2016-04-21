module.exports = function(grunt) {
	grunt.initConfig({
		cssmin: {
			combine: {
				files: {
					'public/css/main.min.css': [
						'public/css/bootstrap.min.css',
						'public/css/font-awesome.min.css',
						'public/css/main.css',
						'public/css/my-custom-styles.css',
					]
				}
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('css', ['cssmin']);
};