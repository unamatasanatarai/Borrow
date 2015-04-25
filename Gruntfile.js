module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		sass: {
			dist: {
				files: {
					'public/css/s.css' : 'public/css/s.scss'
				},
				options: {
					style: 'compressed',
					cacheLocation: 'public/css/.sass-cache'
				}
			}
		},
		autoprefixer: {
			dist: {
				options: {
					browsers: ['last 2 versions'],
					map: true
				},
				files: {
					'public/css/s.css' : 'public/css/s.css'
				}
			}
		},
		min: {
			dist: {
				src: [
					'public/js/vendor/jquery-1.11.2.min.js',
					'public/js/vendor/bootstrap.min.js',
				],
				dest: 'public/js/s.js'
			}
		},
		watch: {
			css: {
				files: ['public/css/*.scss'],
				tasks: ['sass', 'autoprefixer']
			},
			scripts: {
				files: ['public/js/*.js'],
				tasks: ['min']
			}
		}
	});

	grunt.loadNpmTasks('grunt-yui-compressor');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');

	grunt.registerTask('default',['watch']);
}
