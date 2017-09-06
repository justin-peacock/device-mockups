module.exports = {
	'default': [
		'makepot',
		'styles',
		'scripts'
	],
	'styles': [
		'sass',
		'postcss',
		'cssbeautifier'
	],
	'scripts': [
		'jshint',
		'concat'
	],
	'build': [
		'default',
		'phpcs',
		'clean:dist',
		'copy:build'
	],
	'dist': [
		'copy:build',
		'copy:dist'
	]
};
